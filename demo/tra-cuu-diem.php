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
    <a class="navbar-brand fa fa-home" href="(index).php"></a> 
    <span style="padding-left:0px;" id="tech-support" title="Nhấn  vào để xem số điện thoại hỗ trợ">
        <span>* Điện thoại hỗ trợ *</span>
    </span>                                                
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

<div class="container mark-page">
    <div class="container-content">       
        <div class="panel-heading">
           <div class="panel-title text-center">
                <h1 class="title">TRA CỨU ĐIỂM KIỂM TRA</h1>
            </div>
        </div> 
        <div class="main-section main-center main-section-border">        
            <form class="form-horizontal" method="post" action="/tra-cuu-diem" id="tracuu_frm">
                
                <div class="title-section">Thông tin đăng ký:</div>
                <div class="info1-section">                     
                    <div class="form-group col-6">
                        <label for="name" class="col-6 control-label">Họ và tên: <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <input type="text" class="form-control upper" name="name" id="name" placeholder="Nhập họ và tên thí sinh" value="" autocomplete="off" aria-autocomplete="none" />
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="birthday" class="col-6 control-label">Ngày sinh: <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <input type="text" class="form-control datepicker" name="birthday" id="birthday"  placeholder="Nhập ngày sinh" value="" autocomplete="off" aria-autocomplete="none" />
                        </div>
                   </div>
                    <div class="form-group col-6">
                        <label for="mdc" class="col-6 control-label">Số báo danh: <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <input type="text" class="form-control" name="sbd" id="sbd"  placeholder="Nhập số báo danh" value="" autocomplete="off" aria-autocomplete="none" />
                        </div>
                   </div>
                   
                    <div class="form-group col-6">
                        <label for="examdate" class="col-6 control-label">Ngày kiểm tra: <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <input type="text" class="form-control datepicker" name="s_examdate" id="s_examdate"  placeholder="Nhập ngày kiểm tra" value="" autocomplete="off" />
                        </div>
                    </div>
                    
                    <div class="form-group col-12">
                        <label for="examdate" class="col-3 control-label">Cấp độ: <span class="required">(*)</span></label>
                        <div class="col-9 f-input">
                        <select class="form-control" name="s_capdothi" id="s_capdothi">
                            <option value="">Chọn cấp độ kiểm tra</option>
                            
                                    <option value="S" >Tiếng Anh Thiếu Nhi - (YLE) - STARTERS</option>
                                
                                    <option value="M" >Tiếng Anh Thiếu Nhi - (YLE) - MOVERS</option>
                                
                                    <option value="F" >Tiếng Anh Thiếu Nhi - (YLE) - FLYERS</option>
                                
                                    <option value="K" >Tiếng Anh Tổng Quát (KET-PET) - KET</option>
                                
                                    <option value="P" >Tiếng Anh Tổng Quát (KET-PET) - PET</option>
                                
                                    <option value="K_PC" >Tiếng Anh Tổng Quát (KET-PET) thi trên máy tính - KET - PC</option>
                                
                                    <option value="P_PC" >Tiếng Anh Tổng Quát (KET-PET) thi trên máy tính - PET - PC</option>
                                
                                    <option value="FCE" >Tiếng Anh Tổng Quát (FCE) - FCE</option>
                                
                                    <option value="FCE_PC" >Tiếng Anh Tổng Quát (FCE) thi trên máy tính - FCE - PC</option>
                                
                                    <option value="M1" >Giảng dạy tiếng Anh (TKT) - MODULE 1</option>
                                
                                    <option value="M2" >Giảng dạy tiếng Anh (TKT) - MODULE 2</option>
                                
                                    <option value="M3" >Giảng dạy tiếng Anh (TKT) - MODULE 3</option>
                                
                                    <option value="J" >TOEFL JUNIOR - JUNIOR</option>
                                
                                    <option value="JC" >TOEFL JUNIOR - JUNIOR CHALLENGE (C)</option>
                                
                                    <option value="PA" >TOEFL PRIMARY - PRIMARY STEP 1</option>
                                
                                    <option value="PB" >TOEFL PRIMARY - PRIMARY STEP 2</option>
                                
                                    <option value="PC" >TOEFL PRIMARY - PRIMARY CHALLENGE (C)</option>
                                
                                    <option value="PA-C" >TOEFL PRIMARY - PRIMARY STEP 1 CHALLENGE (C)</option>
                                
                                    <option value="PB-C" >TOEFL PRIMARY - PRIMARY STEP 2 CHALLENGE (C)</option>
                                
                                    <option value="PA-C2" >TOEFL PRIMARY - PRIMARY STEP 1</option>
                                
                                    <option value="PB-C2" >TOEFL PRIMARY - PRIMARY STEP 2 (C) V2</option>
                                
                                    <option value="ITP" >TOEFL ITP - TOEFL ITP</option>
                                
                                    <option value="ITP-C" >TOEFL ITP - TOEFL ITP CHALLENGE</option>
                                
                                    <option value="CF" >Tin học CERTIPORT (IC3) - COMPUTING FUNDAMENTALS</option>
                                
                                    <option value="KA" >Tin học CERTIPORT (IC3) - KEY APPLICATIONS</option>
                                
                                    <option value="LO" >Tin học CERTIPORT (IC3) - LIVING ONLINE</option>
                                
                                    <option value="CF-C" >Tin học CERTIPORT (IC3) - COMPUTING FUNDAMENTALS CHALLENGE (C)</option>
                                
                                    <option value="KA-C" >Tin học CERTIPORT (IC3) - KEY APPLICATIONS CHALLENGE (C)</option>
                                
                                    <option value="LO-C" >Tin học CERTIPORT (IC3) - LIVING ONLINE CHALLENGE (C)</option>
                                
                                    <option value="CF-C2" >Tin học CERTIPORT (IC3) - COMPUTING FUNDAMENTALS (C) VCK</option>
                                
                                    <option value="KA-C2" >Tin học CERTIPORT (IC3) - KEY APPLICATIONS (C) VCK</option>
                                
                                    <option value="LO-C2" >Tin học CERTIPORT (IC3) - LIVING ONLINE (C) VCK</option>
                                
                                    <option value="IBT" >TOEFL IBT thi trên máy tính - TOEFL iBT</option>
                                
                                    <option value="CF-S" >Tin học CERTIPORT SPARK (IC3S) - COMPUTING FUNDAMENTALS (S)</option>
                                
                                    <option value="KA-S" >Tin học CERTIPORT SPARK (IC3S) - KEY APPLICATIONS (S)</option>
                                
                                    <option value="LO-S" >Tin học CERTIPORT SPARK (IC3S) - LIVING ONLINE (S)</option>
                                
                                    <option value="CF-SC" >Tin học CERTIPORT SPARK (IC3S) - COMPUTING FUNDAMENTALS CHALLENGE (SC)</option>
                                
                                    <option value="KA-SC" >Tin học CERTIPORT SPARK (IC3S) - KEY APPLICATIONS CHALLENGE (SC)</option>
                                
                                    <option value="LO-SC" >Tin học CERTIPORT SPARK (IC3S) - LIVING ONLINE CHALLENGE (SC)</option>
                                
                                    <option value="CF-SC2" >Tin học CERTIPORT SPARK (IC3S) - COMPUTING FUNDAMENTALS (SC) VCK</option>
                                
                                    <option value="KA-SC2" >Tin học CERTIPORT SPARK (IC3S) - KEY APPLICATIONS (SC) VCK</option>
                                
                                    <option value="LO-SC2" >Tin học CERTIPORT SPARK (IC3S) - LIVING ONLINE (SC) VCK</option>
                                
                                    <option value="LEVEL 1" >Tin học CERTIPORT SPARK (IC3S) - IC3 SPARK GS6 LEVEL 1</option>
                                
                                    <option value="LEVEL 2" >Tin học CERTIPORT SPARK (IC3S) - IC3 SPARK GS6 LEVEL 2</option>
                                
                                    <option value="LEVEL 3" >Tin học CERTIPORT SPARK (IC3S) - IC3 SPARK GS6 LEVEL 3</option>
                                
                                    <option value="FD" >PTE GENERAL - FOUNDATION</option>
                                
                                    <option value="LA" >PTE GENERAL - LEVEL 1</option>
                                
                                    <option value="LB" >PTE GENERAL - LEVEL 2</option>
                                
                                    <option value="LC" >PTE GENERAL - LEVEL 3</option>
                                
                                    <option value="LD" >PTE GENERAL - LEVEL 4</option>
                                
                                    <option value="FW" >PTE YOUNG LEARNERS - FIRSTWORDS</option>
                                
                                    <option value="SB" >PTE YOUNG LEARNERS - SPRINGBOARD</option>
                                
                                    <option value="QM" >PTE YOUNG LEARNERS - QUICKMARCH</option>
                                
                                    <option value="BT" >PTE YOUNG LEARNERS - BREAKTHROUGH</option>
                                
                                    <option value="IEL" >Nhóm IEL - IELTS</option>
                                
                                    <option value="IC" >Tin học CHAL (2018) (IC3-IC3S CHALLENGE) - IC3 (C)</option>
                                
                                    <option value="ISC" >Tin học CHAL (2018) (IC3-IC3S CHALLENGE) - IC3 SPARK (C)</option>
                                
                                    <option value="IT-B" >Ứng dụng CNTT - ỨNG DỤNG CNTT - CƠ BẢN</option>
                                
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 button-group">
                        <button type="submit" class="btn btn-primary btn-lg save-button">TRA CỨU</button>
                    </div>
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
                <p><center><img src="images/loader.gif" /></center></p>
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
