<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=10" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="bootstrap/js/popper.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="bootstrap/datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="bootstrap/datepicker/locales/bootstrap-datepicker.vi.min.js" type="text/javascript"></script>
    <link href="bootstrap/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <script src="js/index.js?20230109" type="text/javascript"></script>
    <link href="css/index.css?0930442" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        var datepicker_config = {
            'startDate': '27-2-1943',
            'endDate': '27-2-2021'
        };
    </script>



    <?php
    $con = mysqli_connect("localhost", "root", "", "tinhocngoaingu");

    // Check connection
    if ($con->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    if (isset($_POST['tracuu'])) {
        $name = strtoupper($_POST['name']);
        $birthday = $_POST['birthday'];
        $examdate = $_POST['examdate'];
        $level = $_POST['level'];


        $sqlexamdate = "SELECT NgayThi FROM lichthi";
        $resultexamdate = mysqli_query($con, $sqlexamdate);


        
        if ($resultexamdate->num_rows > 0) {
            // output data of each row
            while ($rowexamdate = $resultexamdate->fetch_assoc()) {
                if ($rowexamdate['NgayThi'] == $examdate) {
                    $sqllevel = "SELECT CapDo_id,TenCapDo FROM capdo";
                    $resultlevel = mysqli_query($con, $sqllevel);
                    if ($resultlevel->num_rows > 0) {
                        while ($rowlevel = $resultlevel->fetch_assoc()) {
                            if ($rowlevel['CapDo_id'] == $level) {

                                $sqlthisinhchungchi = "SELECT Diem,ThiSinh_id FROM thisinhchungchi";
                                $sqlthisinh = "SELECT ThiSinh_id,TenThiSinh,NgaySinh,GioiTinh FROM thisinh";
                                $resultthisinh = mysqli_query($con, $sqlthisinh);
                                $resultthisinhchungchi = mysqli_query($con, $sqlthisinhchungchi);
                                if ($resultthisinh->num_rows > 0) {
                                    $dem = 0;
                                    while ($rowthisinh = $resultthisinh->fetch_assoc()) {
                                        if ($rowthisinh['TenThiSinh'] == $name && $rowthisinh['NgaySinh'] == $birthday) {
                                            if ($resultthisinhchungchi->num_rows > 0) {
                                                while ($rowthisinhchungchi = $resultthisinhchungchi->fetch_assoc()) {
                                                    if ($rowthisinh['ThiSinh_id'] == $rowthisinhchungchi['ThiSinh_id']) {
                                                        if ($rowthisinhchungchi['Diem'] == null) {
                                                            $Diem = 'Chưa có điểm';
                                                        } else if ($rowthisinhchungchi['Diem'] >= 0 && $rowthisinhchungchi['Diem'] <= 10) {
                                                            $Diem = $rowthisinhchungchi['Diem'];

                                                        }
                                                        break;
                                                    }
                                                }
                                            }
                                            //$a = "Mã thí sinh: " . $rowthisinh["ThiSinh_id"] . " - Tên thí sinh: " . $rowthisinh["TenThiSinh"] . " - Ngày sinh:" . $rowthisinh["NgaySinh"] . " - Giới tinh:" . sex($rowthisinh["GioiTinh"]) . " - Cấp độ:" . $rowlevel["TenCapDo"] . " - Điểm:" . $Diem;
                                            $MaThiSinh = $rowthisinh["ThiSinh_id"];
                                            $TenThiSinh = $rowthisinh["TenThiSinh"];
                                            $NgaySinh = $rowthisinh["NgaySinh"];
                                            $GioiTinh = sex($rowthisinh["GioiTinh"]);
                                            $CapDo = $rowlevel["TenCapDo"];
                                            $DiemSo = $Diem;

                                            /*
                                            echo "<!-- The Modal -->
                                            <div class=\"modal\" id=\"myModal\">
                                            <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <!-- Modal Header -->
                                            <div class=\"modal-header\">
                                            <h4 class=\"modal-title\">Thông tin thí sinh</h4>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class=\"modal-body\">";
                                            echo "Mã thí sinh: " . $MaThiSinh;
                                            echo "<br>";
                                            echo "Tên thí sinh: " . $TenThiSinh;
                                            echo "<br>";
                                            echo "Giới tính: " . $GioiTinh;
                                            echo "<br>";
                                            echo "Cấp độ: " . $CapDo;
                                            echo "<br>";
                                            echo "Điểm số: " . $DiemSo;
                                            echo "</div>
                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-danger\"
                                            data-bs-dismiss=\"modal\">Close</button>
                                            </div>
                                            </div>
                                            </div>
                                            </div>";
                                            */
                                            $dem++;
                                            function_alert($MaThiSinh, $TenThiSinh, $NgaySinh, $GioiTinh, $CapDo, $DiemSo);
                                        }
                                    }
                                    if ($dem == 0) {
                                        echo "Không tìm thấy thí sinh, vui lòng thử lại !!!";
                                    }
                                }
                            }

                        }
                    } else
                        message_alert('Không có cấp độ thi nào được tổ chức vào ngày bạn đã điền!');

                    break;
                } else
                    message_alert('Không có ngày thi này');
                break;
            }
        } else {
            echo "0 results";
        }
    }

    /**/


    function function_alert($a, $b, $c, $d, $e, $f)
    {
        echo "<script>alert('Mã thí sinh : $a\\nTên thí sinh : $b\\nNgày Sinh : $c\\nGiới tính : $d\\nCấp độ : $e\\nĐiểm số : $f');
        </script>";
    }
    function message_alert($message)
    {
        echo "<script>alert('$message');</script>";
    }

    function sex($a)
    {
        if ($a == 1)
            return 'Nam';
        if ($a == 0)
            return 'Nữ';
    }

    function Diem()
    {

    }

    ?>

    <title>Tra cứu điểm</title>

</head>

<body>
    <div class="logo-header no-print">
        <img border="0" alt="" class="lazy" src="images/trungtamngoainguvatinhoc.png" style="display: inline;">
    </div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top-"
        style="margin-bottom: 20px;min-height: 40px;z-index:999;">
        <button id="btn-navbars-menu" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="navbars-menu" aria-controls="navbars-menu" aria-expanded="true" aria-label="Toggle navigation">
            <span class="fa fa-fw fa-bars"></span>
        </button>
        <div class="collapse" id="navbars-menu" data-toggle="collapse">
            <ul class="navbar-nav mr-auto">


                <li><a class="navbar-brand" href="(index).php">Lịch kiểm tra</a></li>


                <li><a class="dropdown-toggle nav-link navbar-brand" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Đăng ký</a>
                    <div class="dropdown-menu" aria-labelledby="dangkythi-submenu">
                        <a class="dropdown-item" href="register.php">Tự do</a>
                    </div>
                </li>

                <li class="tracuu-menu-s"><a class="navbar-brand" href="register-detail.php">Phiếu báo</a></li>


                <li class="tracuu-menu-s"><a class="navbar-brand" href="tra-cuu-diem.php">Tra cứu kết quả</a></li>

                <li style="display:none;" class="tracuu-menu"><a class="dropdown-toggle nav-link navbar-brand" href="#"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tra cứu</a>
                    <div class="dropdown-menu tracuu-submenu" aria-labelledby="help-tracuu">

                        <a class="dropdown-item" href="tra-cuu-diem.php">Tra cứu kết quả kiểm tra</a>

                        <a class="dropdown-item" href="tra-cuu-hoa-don.php">Tra cứu hóa đơn</a>

                        <a class="dropdown-item" href="register-detail.php">Phiếu báo</a>
                        <a class="dropdown-item" href="register-detail.php">Chi tiết đăng ký</a>
                    </div>
                </li>

                <li class="tracuuhd-menu-s"><a class="navbar-brand" href="tra-cuu-hoa-don.php">Tra cứu hóa đơn</a></li>

                <li class="login-menu"><a class="navbar-brand" href="login.php">Đăng nhập</a></li>

            </ul>
        </div>
    </nav>

    <div class="modal" id="DlgTechSupport" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Điện thoại hỗ trợ</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <ul class="support-phone-list">
                            <li style="list-style: none;font-weight: bold;padding-bottom: 15px;">Giờ hành chính, từ thứ
                                2 đến thứ 6:</li>

                            <li>Liên hệ thay đổi thông tin thí sinh: <b class="em">(028) 3829 1023</b></li>
                            <li>Liên hệ về thông tin kỳ kiểm tra và thanh toán lệ phí: <b class="em">(028) 3829 1023</b>
                            </li>
                            <li>Liên hệ về số báo danh, kết quả kiểm tra, chứng chỉ: <b class="em">(028) 3829 1039</b>
                            </li>
                            <li>Quên mật khẩu, thay đổi mật khẩu, thông tin đăng ký: <b class="em">(028) 3829 1023</b>
                            </li>

                        </ul>
                        <div style="font-weight: bold;padding-top:5px;padding-left: 20px;display:none;">Thứ bảy và chủ
                            nhật vui lòng gọi: <b class="em">0902.718.687</b></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mark-page">
        <div class="container-content">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h1 class="title">TRA CỨU ĐIỂM KIỂM TRA</h1>
                </div>
            </div>
            <div class="main-section main-center main-section-border">
                <form class="form-horizontal" method="post" action="tra-cuu-diem.php" id="tracuu_frm">

                    <div class="title-section">Thông tin đăng ký:</div>
                    <div class="info1-section">
                        <div class="form-group col-6">
                            <label for="name" class="col-6 control-label">Họ và tên: <span
                                    class="required">(*)</span></label>
                            <div class="col-6 f-input">
                                <input type="text" class="form-control upper" required name="name" id="name"
                                    placeholder="Nhập họ và tên thí sinh" value="" autocomplete="off"
                                    aria-autocomplete="none" />
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="birthday" class="col-6 control-label">Ngày sinh: <span
                                    class="required">(*)</span></label>
                            <div class="col-6 f-input">
                                <input type="date" class="form-control " required name="birthday" id="birthday"
                                    placeholder="Nhập ngày sinh" value="" autocomplete="off" aria-autocomplete="none" />
                                <div class="col-sm-6" style="width:200px;">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="examdate" class="col-6 control-label">Ngày kiểm tra: <span
                                    class="required">(*)</span></label>
                            <div class="col-6 f-input">
                                <input type="date" class="form-control" required name="examdate" id="examdate"
                                    placeholder="Nhập ngày kiểm tra" value="" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="examdate" class="col-3 control-label">Cấp độ: <span
                                    class="required">(*)</span></label>
                            <div class="col-9 f-input">
                                <select class="form-control" required name="level" id="level">
                                    <option value="">Chọn cấp độ kiểm tra</option>

                                    <option value="3">Tiếng Anh Thiếu Nhi - (YLE) - STARTERS</option>

                                    <option value="4">Tiếng Anh Thiếu Nhi - (YLE) - MOVERS</option>

                                    <option value="5">Tiếng Anh Thiếu Nhi - (YLE) - FLYERS</option>

                                    <option value="1">Tiếng Anh Tổng Quát (KET-PET) thi trên máy tính - KET - PC
                                    </option>

                                    <option value="2">Tiếng Anh Tổng Quát (KET-PET) thi trên máy tính - PET - PC
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group col-12 button-group">
                            <button type="submit" name="tracuu" class="btn btn-primary btn-lg save-button"
                                data-bs-toggle="modal" data-bs-target="#myModal">TRA CỨU
                            </button>
                            </button>
                        </div>
                        <!-- $MaThiSinh = $rowthisinh["ThiSinh_id"];
                                            $TenThiSinh = $rowthisinh["TenThiSinh"];
                                            $NgaySinh = $rowthisinh["NgaySinh"];
                                            $GioiTinh = sex($rowthisinh["GioiTinh"]);
                                            $CapDo = $rowlevel["TenCapDo"];
                                            $DiemSo = $Diem; -->
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/tracuudiemthi.js" type="text/javascript"></script>

    <br>

    <div class="modal" id="DlgLoading" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <p>
                        <center><img src="images/loader.gif" /></center>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal thongBaoDialog" id="thongBaoDialog" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông báo!</h4>
                </div>
                <div class="modal-body">
                    <p><img clas="responnsive" src="images/thongbao_202309.png?0.7055475"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            //$('#thongBaoDialog').modal('show');
        });
    </script>
    <div class="footer-section no-print">
        <div class="footer-body">
            <div class="logo-botoom "><img alt=" " class="lazy" src="images/logo.png"></div>
            <div class="footer-right">
                <div><strong>Trung tâm Ngoại ngữ và Tin học - Sở Giáo dục và Đào tạo TP. HCM</strong></div>
                <div><strong>66 - 68 Lê Thánh Tôn, phường Bến Nghé, quận 1, TP. HCM</strong></div>
                <div>Email: ttngoaingutinhocsgdhcm@gmail.com</div>
                <div><strong>Liên hệ đăng ký dự kiểm tra:</strong></div>
                <div>Điện thoại: (028) 38.291.023</div>
                <div><strong>Liên hệ bộ phận cấp chứng chỉ và phát phiếu báo dự kiểm tra:</strong></div>
                <div>Điện thoại: (028) 38.291.039</div>
            </div>
        </div>
    </div>


    <div class="modal" id="levelNotificationPopup" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông báo!</h4>
                </div>
                <div class="modal-body">
                    <div id="level_notification_content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        onclick="javascript:pages.Common.closeLevelNotificationPopup();">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="dwNotificationPopup" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông báo!</h4>
                </div>
                <div class="modal-body">
                    <p>Đây là kỳ kiểm tra diễn ra vào ngày thường, không phải ngày nghỉ. Vui lòng bấm "Đồng ý" nếu thì
                        sinh đảm bảo điều kiện tham dự kiểm tra, nếu không vui lòng chọn ngày khác.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        onclick="javascript:pages.Common.dwNotificationClose();">Chọn ngày khác</button>
                    <button type="button" class="btn btn-default confirm-btn" data-dismiss="modal">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>




</body>

</html>