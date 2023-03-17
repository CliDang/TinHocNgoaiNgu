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
<script>

var datepicker_config = { 'startDate' : '27-2-1943',
                          'endDate' : '27-2-2021' };
</script>
</head>
<body>
<div class="logo-header no-print">
<img border="0" alt="" class="lazy" src="images/trungtamngoainguvatinhoc.png" style="display: inline;">
</div><nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top-" style="margin-bottom: 20px;min-height: 40px;z-index:999;">                                         
    <button id="btn-navbars-menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbars-menu" aria-controls="navbars-menu" aria-expanded="true" aria-label="Toggle navigation">
        <span class="fa fa-fw fa-bars"></span>
    </button>
    <div class="collapse" id="navbars-menu" data-toggle="collapse">
        <ul class="navbar-nav mr-auto">       
            <li><a class="navbar-brand" href="(index).php">Lịch kiểm tra</a></li>
            
            
            <li><a class="dropdown-toggle nav-link navbar-brand" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Đăng ký</a>
                <div class="dropdown-menu" aria-labelledby="dangkythi-submenu">
                    <a class="dropdown-item" href="register.php">Tự do</a>
                </div>
            </li>
            
                <li class="tracuu-menu-s"><a class="navbar-brand" href="register-detail.php">Phiếu báo</a></li>
                
                
                    <li class="tracuu-menu-s"><a class="navbar-brand" href="tra-cuu-diem.php">Tra cứu kết quả</a></li>
               
                <li style="display:none;" class="tracuu-menu"><a class="dropdown-toggle nav-link navbar-brand" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tra cứu</a>
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
                    <li style="list-style: none;font-weight: bold;padding-bottom: 15px;">Giờ hành chính, từ thứ 2 đến thứ 6:</li>
                    
                    <li>Liên hệ thay đổi thông tin thí sinh: <b class="em">(028) 3829 1023</b></li>
                    <li>Liên hệ về thông tin kỳ kiểm tra và thanh toán lệ phí: <b class="em">(028) 3829 1023</b></li>
                    <li>Liên hệ về số báo danh, kết quả kiểm tra, chứng chỉ: <b class="em">(028) 3829 1039</b></li>
                    <li>Quên mật khẩu, thay đổi mật khẩu, thông tin đăng ký: <b class="em">(028) 3829 1023</b></li>
                    
                    </ul>
                    <div style="font-weight: bold;padding-top:5px;padding-left: 20px;display:none;">Thứ bảy và chủ nhật vui lòng gọi: <b class="em">0902.718.687</b></div>
                </div>
            </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>                   
            </div>
        </div>
    </div>
</div>
<div class="container  schedules">
    <div class="container-content">
        <div class="panel-heading">
           <div class="panel-title text-center">
                <h1 class="title">LỊCH KIỂM TRA NGOẠI NGỮ - TIN HỌC QUỐC TẾ</h1>
                <h2 class="title">(Để xem chi tiết lịch kiểm tra <a class="tolichthi" href="https://ttngoaingutinhoc.hcm.edu.vn/lich-thi/thong-bao-lich-kiem-tra-nang-luc-tieng-anh-tin-hoc-chuan-quoc-te-nam-2023/ct/41621/69779" title="Click để xem lịch kiểm tra chi tiết">Click Chọn</a>)</h2>
            </div>
        </div> 
        <div class="main-section main-center">
            <form id="form1" action="" method="post">
                <div class="exam-list">
                    <table border=0 class="exam-tbl" width="100%" cellpadding="1" cellspacing="1">
  <tr>
    <th width="110" nowrap class="center">Ngày kiểm tra</th>
    <th class="center">Nhóm cấp độ</th>
    <th width="140" class="center">Số lượng được đăng ký</th>
    <th class="center">Cấp độ kiểm tra</th>                
    <th width="140" class="center">Lệ phí (VNĐ)</th>
    
        <th width="140" class="center">Đăng ký</th>
    
  </tr>
  
            <tr class="row-bg odd">
                <td rowspan="2" class="rowg center" nowrap>20-04-2023
                <br><span style="font-weight:normal;">(Thứ năm)</span>
                </td>
        
            <td rowspan="2" class="rowg">Tiếng Anh Tổng Quát (KET-PET) thi trên máy tính</td>
            <td rowspan="2" class="rowg money">45</td>                    
            
            <td class="rowe">KET - PC (K_PC)</td>
            <td class="rowd money">925.000</td>
            
            
            <td class="rowd center signup-btns" groupid=KP - PC" examid="K_PC" date="20-04-2023">
                
                <a hred="javascript:;" class="signup-single" href="register.php">Đăng kí tự do</a>
                
            </td>
            
            </tr>            
        <tr class="odd">
            <td class="rowe">PET - PC (P_PC)</td>
            <td class="rowd money">1.000.000</td>
            
            
            <td class="rowd center signup-btns" groupid=KP - PC" examid="P_PC" date="20-04-2023">
                
                <a hred="javascript:;" class="signup-single" href="register.php">Đăng kí tự do</a>
                
            </td>
            
            </tr>            
        
            <tr class="row-bg even">
                <td rowspan="3" class="rowg center" nowrap>22-04-2023
                <br><span style="font-weight:normal;">(Thứ bảy)</span>
                </td>
        
            <td rowspan="3" class="rowg">Tiếng Anh Thiếu Nhi - (YLE)</td>
            <td rowspan="3" class="rowg money">45</td>                    
            
            <td class="rowe">STARTERS (S)</td>
            <td class="rowd money">700.000</td>
            
            
            <td class="rowd center signup-btns" groupid=YLE" examid="S" date="22-04-2023">
                
                <a hred="javascript:;" class="signup-single" href="register.php">Đăng kí tự do</a>
                
            </td>
            
            </tr>            
        <tr class="even">
            <td class="rowe">MOVERS (M)</td>
            <td class="rowd money">775.000</td>
            
            
            <td class="rowd center signup-btns" groupid=YLE" examid="M" date="22-04-2023">
                
                <a hred="javascript:;" class="signup-single" href="register.php">Đăng kí tự do</a>
                
            </td>
            
            </tr>            
        <tr class="even">
            <td class="rowe">FLYERS (F)</td>
            <td class="rowd money">850.000</td>
            
            
            <td class="rowd center signup-btns" groupid=YLE" examid="F" date="22-04-2023">
                
                <a hred="javascript:;" class="signup-single" href="register.php">Đăng kí tự do</a>
                
            </td>

            </tr>            
        
</table>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="js/exam-list.js?123" type="text/javascript"></script>
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
$(document).ready(function(){
    //$('#thongBaoDialog').modal('show');
});
</script><div class="footer-section no-print">
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
                <button type="button" class="btn btn-default" onclick="javascript:pages.Common.closeLevelNotificationPopup();">Xác nhận</button>
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
                <p>Đây là kỳ kiểm tra diễn ra vào ngày thường, không phải ngày nghỉ. Vui lòng bấm "Đồng ý" nếu thì sinh đảm bảo điều kiện tham dự kiểm tra, nếu không vui lòng chọn ngày khác.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="javascript:pages.Common.dwNotificationClose();">Chọn ngày khác</button>
                <button type="button" class="btn btn-default confirm-btn" data-dismiss="modal">Đồng ý</button>
            </div>
        </div>
    </div>
</div>




</body>
</html>
