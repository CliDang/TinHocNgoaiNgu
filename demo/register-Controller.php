<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Hàm gửi mail tới thí sinh
    function sendMail($email, $madatcho) {

        require 'PHPMailer-master/src/Exception.php';
        require 'PHPMailer-master/src/PHPMailer.php';
        require 'PHPMailer-master/src/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'andanhtest1@gmail.com';
            echo $mail->Username;
            $mail->Password = 'byuhwgnjifpzvdsx';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('andanhtest1@gmail.com', 'NgoaiNguTinHoc');
            $mail->addAddress($email, 'Hau Nguyen');
            $mail->Subject = "TRUNG TAM NGOAI NGU TIN HOC - DANG KY THANH CONG";
            $mail->Body = "CẢM ƠN BẠN ĐÃ ĐĂNG KÝ Ở TRUNG TÂM NGOẠI NGỮ TIN HỌC CHÚNG TỐI. ĐÂY LÀ MÃ ĐẶT CHỖ CỦA BẠN: $madatcho";
            $mail->AltBody = "ABC";
            $mail->send();
            return true;
        }catch (Exception $e) {
            return false;
        }
    }

    //kiểm tra xem chuỗi nhập có phải IN HOA KHONG DAU
    function isUppercaseNoAccent($str) {
        if(preg_match('/^[A-Z\s]+$/', $str)) {
            return true;
        }
        else {
            return false;
        }
    }

    //kiểm tra nhập vào có phải sđt
    function is_phone_number($text) {
        $pattern = '/^\+?\d{1,3}[-.\s]?\d{1,3}[-.\s]?\d{1,4}[-.\s]?\d{1,4}$/';
        return preg_match($pattern, $text) === 1;
    }

    //kiểm tra phương thức có phải POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //nạp kết nối
        include('connection.php');
        //kiểm tra kết nối
        if ($conn != null){
            //để ghi tiếng việt
            header('Content-Type: text/html; charset=UTF-8');           
            $unique_id = substr(uniqid(), 0 , 10);
            $examdate_id = $_POST['examdate'];
            $examlevel = $_POST['examlevel'];
            $name = strtoupper(trim($_POST['name']));
            $birthday = $_POST['birthday'];
            $sex = $_POST['sex'];
            $phone = $_POST['phone'];
            $mail = $_POST['email'];
            $dob = DateTime::createFromFormat('d/m/Y', $birthday);
            
            //lấy ngày thi bằng id
            $getExamdate = "SELECT NgayThi
                    FROM lichthi
                    WHERE $examdate_id = LichThi_id";          
            $statement = $conn->prepare($getExamdate);
            $statement->execute();
            $results = $statement->setFetchMode(PDO::FETCH_ASSOC);
            $examdates = $statement->fetchAll();
            $examdate = null;
            foreach($examdates as $i) {
                $examdate = $i['NgayThi'];
            }

            //kiểm tra ngày thi và cấp độ có trùng khớp không
            $chkLT = "SELECT LichThi_id
                            FROM lichthi
                            WHERE NgayThi = 
                            (SELECT NgayThi
                            FROM lichthi
                            WHERE $examdate_id = LichThi_id) and
                            CapDo_id = 
                            (SELECT CapDo_id 
                            FROM capdo
                            WHERE INSTR('{$examlevel}', TenCapDo))";          
            $statement = $conn->prepare($chkLT);
            $statement->execute();
            $results = $statement->setFetchMode(PDO::FETCH_ASSOC);
            $chkLTs = $statement->fetchAll();
            $isLT = null;
            foreach($chkLTs as $i) {
                $isLT = $i['LichThi_id'];
            }

            if ($isLT == null)
            {
                echo "Không có ngày thi ", $examdate, " của ", $examlevel, ".Vui lòng chọn lại.";
                exit;
            }

            //kiểm tra tên
            if($name) {
                if (!isUppercaseNoAccent($name)) {                   
                    echo "Nhập sai định dạng tên";     
                    exit;   
                }
            }
            else {
                echo "Chưa nhập tên"; 
                exit;
            }

            //kiểm tra ngày sinh hợp lệ theo form ko
            if ($dob) {
                $dob = $dob->format('Y-m-d');
            } else {
                echo "Ngày sinh không hợp lệ";
                exit;
            }          
            
            //kiểm tra sđt
            if (!$phone) {
               echo "Chưa nhập số điện thoại";
               exit; 
            } else {
                if (!is_phone_number($phone)) {
                    echo "Nhập sai định dạng số điện thoại";
                    exit;
                }
            }

            //kiểm tra nhập vào có phải mail ko 
            if ($mail) {
                if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    echo "Nhập sai định dạng email";
                    exit;
                } else {
                    if(!sendMail($mail, $unique_id)){
                        echo "Mail không gửi được!!!";
                        exit;
                    }
                    //Thêm thí sinh mới vào bảng thí sinh    
                    $sql = "INSERT INTO thisinh (TenThiSinh, NgaySinh, GioiTinh, Email, Sdt) VALUES ('{$name}', '{$dob}', '{$sex}', '{$mail}', '{$phone}')";
                    $statement = $conn->prepare($sql);
                    $statement->execute();
                    $results = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $thisinh = $statement->fetchAll();
                    
                    //lấy id thí sinh vừa được thêm
                    $getTSID = "SELECT * FROM thisinh ORDER BY ThiSinh_id DESC LIMIT 1";
                    $statement = $conn->prepare($getTSID);
                    $statement->execute();
                    $results = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $TS_id = $statement->fetchAll();
                    $ThiSinh_id = null;
                    foreach($TS_id as $i) {
                        $ThiSinh_id = $i['ThiSinh_id'];
                    }

                    //lấy id của chứng chỉ được chọn
                    $getCCID = "SELECT ChungChi_id
                    FROM chungchi
                    WHERE CapDo_id = 
                        (SELECT CapDo_id 
                        FROM capdo
                        WHERE INSTR('{$examlevel}', TenCapDo))";          
                    $statement = $conn->prepare($getCCID);
                    $statement->execute();
                    $results = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $id_CC = $statement->fetchAll();
                    $ChungChi_id = null;
                    foreach($id_CC as $i) {
                        $ChungChi_id = $i['ChungChi_id'];
                    }

                    //thêm các trường vào bảng thí sinh chứng chỉ
                    $sqlToTSCC = "INSERT INTO thisinhchungchi (ChungChi_id, NgayDangKy, ThiSinh_id, madatve) VALUES ('{$ChungChi_id}','{$examdate}','{$ThiSinh_id}', '{$unique_id}')";
                    $statement = $conn->prepare($sqlToTSCC);
                    $statement->execute();
                    $results = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $thisinhchungchi = $statement->fetchAll();
                    echo "Đăng ký thành công. Mã đặt chỗ của bạn đã được gửi qua tài khoản mail của bạn vui lòng check!!!";
                }
            } else {
                echo "Chưa nhập mail";
                exit;
            }
        }
    }

?>