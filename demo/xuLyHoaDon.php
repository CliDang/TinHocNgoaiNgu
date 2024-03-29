<?php
$mysqli = new mysqli("localhost","root","","tinhocngoaingu");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="bootstrap/css/bill.css" media="all" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
  </head>
  <body id="html2pdf">
    <header class="clearfix">
      <div id="logo">
        <img src="images/logo.png">
      </div>
      <h1>HÓA ĐƠN</h1>
      <div id="company" class="clearfix">
        <div>Trung tâm Ngoại ngữ và Tin học - Sở Giáo dục và Đào tạo TP. HCM</div>
        <div>66 - 68 Lê Thánh Tôn, phường Bến Nghé <br />Quận 1, TP. HCM</div>
        <div>(028) 38.291.039</div>
        <div><a href="mailto:company@example.com">ttngoaingutinhocsgdhcm@gmail.com</a></div>
      </div>
      <div id="project">
         <?php
         include 'utils.php';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          $madatve = affine_encrypt(strtoupper($_POST["taxcode2"]));    
          $SDT =  $_POST["taxcode"];
          if($madatve){
            $sql = "SELECT *
            FROM thisinh t1                                
            JOIN thisinhchungchi t2 ON t1.ThiSinh_id = t2.ThiSinh_Id
            JOIN chungchi t3 ON t2.ChungChi_id = t3.ChungChi_id
            JOIN capdo t4 ON t3.CapDo_id = t4.CapDo_id
            JOIN capdo_hoadon t5 ON t4.CapDo_id = t5.Fk_CapDoID
            JOIN hoadon t6 ON t5.FK_MaHoaDon = t6.MaHoaDon
            WHERE t2.madatve = '$madatve' ";
            $result = $mysqli->query($sql);
          
            $rows = mysqli_num_rows($result); 
            // Lấy số hàng trả về
            
        
              while ($row = $result->fetch_assoc()) { 
                echo  "<div><span>Tên Thí Sinh</span>".  $row["TenThiSinh"] . "</div>";
                echo  "<div><span>Ngày Sinh</span>" . $row["NgaySinh"]. "US</div>";
                echo "<div><span>EMAIL</span>" . $row["Email"]. "US</div>";
                echo "<div><span>SDT </span>" . $row["Sdt"]. "</div>";                                                                                                                                                                                                                                                                              
            } 
    
          } 
          if($SDT){
            $sql = "SELECT *
            FROM thisinh t1                                
            JOIN thisinhchungchi t2 ON t1.ThiSinh_id = t2.ThiSinh_Id
            JOIN chungchi t3 ON t2.ChungChi_id = t3.ChungChi_id
            JOIN capdo t4 ON t3.CapDo_id = t4.CapDo_id
            JOIN capdo_hoadon t5 ON t4.CapDo_id = t5.Fk_CapDoID
            JOIN hoadon t6 ON t5.FK_MaHoaDon = t6.MaHoaDon
            WHERE t1.Sdt = '$SDT' ";
            $result = $mysqli->query($sql);
          
            $rows = mysqli_num_rows($result); 
            // Lấy số hàng trả về
          
             if ($rows) {
              while ($row = mysqli_fetch_array($result)) { 
                echo  "<div><span>Tên Thí Sinh</span>".  $row["TenThiSinh"] . "</div>";
                echo  "<div><span>Ngày Sinh</span>" . $row["NgaySinh"]. "US</div>";
                echo "<div><span>EMAIL</span>" . $row["Email"]. "US</div>";
                echo "<div><span>SDT </span>" . $row["Sdt"]. "</div>";   
            } 
          }
          }
        }
          ?>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="desc">CẤP ĐỘ</th>
            <th class="unit">Mã Số Thuế</th>
            <th class="total">Tổng Tiền</th>
          </tr>
        </thead>
        <tbody>
                
<?php
//Khi người dùng bấm tra cứu 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $madatve = affine_encrypt(strtoupper($_POST["taxcode2"]));  
  $maSoThue =  $_POST["taxcode"];
  if($madatve){
    $sql = "SELECT *
    FROM thisinh t1                                
    JOIN thisinhchungchi t2 ON t1.ThiSinh_id = t2.ThiSinh_Id
    JOIN chungchi t3 ON t2.ChungChi_id = t3.ChungChi_id
    JOIN capdo t4 ON t3.CapDo_id = t4.CapDo_id
    JOIN capdo_hoadon t5 ON t4.CapDo_id = t5.Fk_CapDoID
    JOIN hoadon t6 ON t5.FK_MaHoaDon = t6.MaHoaDon
    WHERE t2.madatve = '$madatve' ";
    $result = $mysqli->query($sql);
  
    $rows = mysqli_num_rows($result); 
    // Lấy số hàng trả về
    
     if ($rows) {
      while ($row = mysqli_fetch_array($result)) {   echo "<tr>";
        echo "<td class='desc'>" . $row["TenCapDo"] . "</td>";
        echo "<td class='qty'>" . $row["MaSoThue"] . "</td>";
        echo "<td class='total'>" . $row["TongTien"] . "</td>";
        echo "</tr>";      
                                                                                                                                                                                                                                                                                                                         
    } 
  }
  } 
  if($SDT){
    $sql = "SELECT *
    FROM thisinh t1                                
    JOIN thisinhchungchi t2 ON t1.ThiSinh_id = t2.ThiSinh_Id
    JOIN chungchi t3 ON t2.ChungChi_id = t3.ChungChi_id
    JOIN capdo t4 ON t3.CapDo_id = t4.CapDo_id
    JOIN capdo_hoadon t5 ON t4.CapDo_id = t5.Fk_CapDoID
    JOIN hoadon t6 ON t5.FK_MaHoaDon = t6.MaHoaDon
    WHERE t1.Sdt = '$SDT' ";
    $result = $mysqli->query($sql);
  
    $rows = mysqli_num_rows($result); 
    // Lấy số hàng trả về
  
     if ($rows) {
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td class='desc'>" . $row["TenCapDo"] . "</td>";
        echo "<td class='qty'>" . $row["MaSoThue"] . "</td>";
        echo "<td class='total'>" . $row["TongTien"] . "</td>";
        echo "</tr>";                      
    } 
  }
  }
}
?>
            
         

        </tbody>
      </table>
      <button id="exportPDF" style="color:black;padding:8px 16px;float:right">Dowload PDF</button>
      
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
    <script>

      let htmlPDF = document.getElementById("html2pdf");
      let exportPDF = document.getElementById("exportPDF");
      exportPDF.onclick = (e) => html2pdf(htmlPDF);
      
</script>
  </body>
</html>