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
    <a class="navbar-brand fa fa-home" href="#"></a> 
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

<script type="text/javascript">
var examdate = '';
var examid = '';
var district_id = '';
var isLogin = 0;
var examDateList = {'20-04-2023':{'examdateS2':'20-04-2023','registrationfree':''},'22-04-2023':{'examdateS2':'22-04-2023','registrationfree':''},'06-05-2023':{'examdateS2':'06-05-2023','registrationfree':''},'07-05-2023':{'examdateS2':'07-05-2023','registrationfree':''},'12-05-2023':{'examdateS2':'12-05-2023','registrationfree':''},'13-05-2023':{'examdateS2':'13-05-2023','registrationfree':''},'14-05-2023':{'examdateS2':'14-05-2023','registrationfree':''},'16-05-2023':{'examdateS2':'16-05-2023','registrationfree':''},'17-05-2023':{'examdateS2':'17-05-2023','registrationfree':''},'18-05-2023':{'examdateS2':'18-05-2023','registrationfree':''},'20-05-2023':{'examdateS2':'20-05-2023','registrationfree':''},'25-05-2023':{'examdateS2':'25-05-2023','registrationfree':''}};
var upload_file_url = '/index.php';
var currentY = 2023;
var examSchedules ={
"13-05-2023":[{'groupid':'FCE - PC','examid':'FCE_PC','price':1660000,'name': 'Tiếng Anh Tổng Quát (FCE) thi trên máy tính - FCE - PC','classfrom':0,'classto':0,'requirecertificate':'','note':'','exam_note':'THÍ SINH ĐĂNG KÝ DỰ THI BẮT BUỘC PHẢI CÓ MỘT TRONG CÁC LOẠI GIẤY TỜ: CCCD HOẶC (PASSPORT, BẰNG LÁI XE, THẺ SINH VIÊN, THẺ HỌC SINH).'}],
"20-05-2023":[{'groupid':'PTE G','examid':'FD','price':1000000,'name': 'PTE GENERAL - FOUNDATION','classfrom':0,'classto':0,'requirecertificate':'','note':'','exam_note':''},{'groupid':'PTE G','examid':'LA','price':1000000,'name': 'PTE GENERAL - LEVEL 1','classfrom':0,'classto':0,'requirecertificate':'','note':'','exam_note':''},{'groupid':'PTE Y','examid':'FW','price':550000,'name': 'PTE YOUNG LEARNERS - FIRSTWORDS','classfrom':0,'classto':0,'requirecertificate':'','note':'','exam_note':''},{'groupid':'PTE Y','examid':'SB','price':550000,'name': 'PTE YOUNG LEARNERS - SPRINGBOARD','classfrom':0,'classto':0,'requirecertificate':'','note':'','exam_note':''},{'groupid':'PTE Y','examid':'QM','price':550000,'name': 'PTE YOUNG LEARNERS - QUICKMARCH','classfrom':0,'classto':0,'requirecertificate':'','note':'','exam_note':''},{'groupid':'PTE Y','examid':'BT','price':550000,'name': 'PTE YOUNG LEARNERS - BREAKTHROUGH','classfrom':0,'classto':0,'requirecertificate':'','note':'','exam_note':''}],
"25-05-2023":[{'groupid':'FCE - PC','examid':'FCE_PC','price':1660000,'name': 'Tiếng Anh Tổng Quát (FCE) thi trên máy tính - FCE - PC','classfrom':0,'classto':0,'requirecertificate':'','note':'Đây là kỳ thi diễn ra vào ngày thường, không phải ngày nghỉ. Vui lòng bấm "Đồng ý" nếu thì sinh đảm bảo điều kiện tham dự thi, nếu không vui lòng chọn ngày khác.','exam_note':'THÍ SINH ĐĂNG KÝ DỰ THI BẮT BUỘC PHẢI CÓ MỘT TRONG CÁC LOẠI GIẤY TỜ: CCCD HOẶC (PASSPORT, BẰNG LÁI XE, THẺ SINH VIÊN, THẺ HỌC SINH).'}],

		};
		
var serviceRates = {'NCC':[{'price':30000,'from':1,'to': 5 },{'price':40000,'from':6,'to': 15 },{'price':50000,'from':16,'to': 30 },{'price':60000,'from':31,'to': 70 },{'price':70000,'from':71,'to': 100 },{'price':90000,'from':101,'to': 150 },{'price':110000,'from':151,'to': 200 },{'price':130000,'from':201,'to': 250 },{'price':150000,'from':251,'to': 300 },{'price':170000,'from':301,'to': 350 }],'NCCNT':[{'price':40000,'from':1,'to': 5 },{'price':50000,'from':6,'to': 15 },{'price':60000,'from':16,'to': 30 },{'price':80000,'from':31,'to': 70 },{'price':100000,'from':71,'to': 100 },{'price':130000,'from':101,'to': 150 },{'price':160000,'from':151,'to': 200 }]};
var selectedExams ={

		};
</script>
<div class="container">
    <div class="container-content">
       
        <div class="panel-heading">
           <div class="panel-title text-center">
                <h1 class="title">ĐĂNG KÝ DỰ KIỂM TRA (TỰ DO)</h1>
                <h2 class="title">KỲ KIỂM TRA CHỨNG CHỈ TIẾNG ANH VÀ TIN HỌC QUỐC TẾ</h2>
            </div>
        </div> 
        <div class="main-section main-center main-section-border single-register">
        
            <form class="form-horizontal" method="post" action="/register" id="sign-up-frm">
                <input type="hidden" id="h-exam-fee" name="h-exam-fee" value="0" />
                <input type="hidden" id="h-pbd-fee" name="h-pbd-fee" value="0" />
                <input type="hidden" id="h-cc-fee" name="h-cc-fee" value="0" />
                <input type="hidden" id="h-total-qty" name="h-total-qty" value="0" />
                <input type="hidden" id="number_inwords" name="number_inwords" value="" />
                <div class="title-section">Thông tin kỳ kiểm tra</div>
<div class="info0-section"> 
    <div class="form-group col-12">
    
        <label for="examdate" class="col-3 control-label examdate-label">Ngày kiểm tra: <span class="required">(*)</span></label>
        <div class="col-9 f-input f-examdate">
            <select name="examdate" id="examdate" class="form-control" data-toggle="tooltip" title="Chọn ngày kiểm tra từ danh sách">
                
                <option value="">Chọn ngày kiểm tra</option>
                 
				  <option value="20-04-2023" dw="5">20-04-2023</option>
				
				  <option value="22-04-2023" dw="7">22-04-2023</option>
				
				  <option value="06-05-2023" dw="7">06-05-2023</option>
				
				  <option value="07-05-2023" dw="1">07-05-2023</option>
				
				  <option value="12-05-2023" dw="6">12-05-2023</option>
				
				  <option value="13-05-2023" dw="7">13-05-2023</option>
				
				  <option value="14-05-2023" dw="1">14-05-2023</option>
				
				  <option value="16-05-2023" dw="3">16-05-2023</option>
				
				  <option value="17-05-2023" dw="4">17-05-2023</option>
				
				  <option value="18-05-2023" dw="5">18-05-2023</option>
				
				  <option value="20-05-2023" dw="7">20-05-2023</option>
				
				  <option value="25-05-2023" dw="5">25-05-2023</option>
				
            </select>
        </div>
        </div>
    <div class="form-group col-12">
        <label class="col-3 control-label examid-label">Chọn cấp độ kiểm tra: <span class="required">(*)</span></label>
        <div class="col-9 f-input level-list" id="level-list">
            
            <select id="examid" name="examid" class="form-control" data-toggle="tooltip" title="Chọn cấp độ kiểm tra từ danh sách"><option value="0">Chọn cấp độ kiểm tra</option></select>
            
        </div>
    </div>
    <div class="col-12" id="dv-exam-fee" style="display:none;">
        <label class="col-3 control-label examdate-label">Lệ phí:</label>
        <div class="col-9 f-input">
            <div id="dv-examdate-note"><span id="selected-exam-fee"></span></div>
        </div>
    </div>
    
    <div class="col-12" id="dv-exam-note" style="display:none;">
        <label class="col-3 control-label examdate-label">Ghi chú:</label>
        <div class="col-9 f-input">
            <div class="error"><span id="exam-note"></span></div>
        </div>
    </div>
</div>
                <div class="title-section">Thông tin thí sinh:</div>
                <div class="info1-section"> 
                    
                    <div class="form-group col-12">
                        <label for="name" class="col-3 control-label thisinh-label">Họ và tên thí sinh: <span class="required">(*)</span>
                        <div class="error">(In hoa không dấu)</div></label>
                        <div class="col-9 f-input">
                            <input type="text" class="form-control upper" name="name" id="name" placeholder="Họ và tên thí sinh" value="" maxlength=100 />
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="birthday" class="col-6 control-label">Ngày sinh (Day/Month/Year): <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <input type="text" class="form-control datepicker" name="birthday" id="birthday"  placeholder="Ngày sinh" value="" autocomplete="off" maxlength=10 />
                        </div>
                   </div>
                   <div class="form-group col-6">
                        <label for="sex" class="col-6 control-label">Giới tính: <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <select name="sex" id="sex" class="form-control">
                                <option value="1" >Nam</option>
                                <option value="2" >Nữ</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="phone" class="col-6 control-label">Số điện thoại: <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <input type="text" class="form-control" name="phone" id="phone"  placeholder="Số điện thoại" value="" maxlength=10 />
                        </div>
                   </div>
                   <div class="form-group col-6">     
                        <label for="email" class="col-6 control-label">Email: <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Nhập email" value="" maxlength=50 />
                        </div>
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="name" class="col-6 control-label">Đang học tại: - Quận: <span class="required">(*)</span></label>
                        <div class="col-6 f-input" id="district-section">
                            <select name="district" id="district" class="form-control chosen-select">
                                <option value="">Chọn khu vực</option>
                                <optgroup label="TP .HCM">
                                
                                    <option value="760">Quận 1</option>
                                    
                                    <option value="769">Quận 2</option>
                                    
                                    <option value="770">Quận 3</option>
                                    
                                    <option value="773">Quận 4</option>
                                    
                                    <option value="774">Quận 5</option>
                                    
                                    <option value="775">Quận 6</option>
                                    
                                    <option value="778">Quận 7</option>
                                    
                                    <option value="776">Quận 8</option>
                                    
                                    <option value="763">Quận 9</option>
                                    
                                    <option value="771">Quận 10</option>
                                    
                                    <option value="772">Quận 11</option>
                                    
                                    <option value="761">Quận 12</option>
                                    
                                    <option value="762">Quận Thủ Đức</option>
                                    
                                    <option value="764">Quận Gò Vấp</option>
                                    
                                    <option value="765">Quận Bình Thạnh</option>
                                    
                                    <option value="766">Quận Tân Bình</option>
                                    
                                    <option value="767">Quận Tân Phú</option>
                                    
                                    <option value="768">Quận Phú Nhuận</option>
                                    
                                    <option value="777">Quận Bình Tân</option>
                                    
                                    <option value="783">Huyện Củ Chi</option>
                                    
                                    <option value="784">Huyện Hóc Môn</option>
                                    
                                    <option value="785">Huyện Bình Chánh</option>
                                    
                                    <option value="786">Huyện Nhà Bè</option>
                                    
                                    <option value="787">Huyện Cần Giờ</option>
                                    
                                    <option value="791">TP. Thủ Đức</option>
                                    
                                    </optgroup>
                                <option value="0">Ngoại tỉnh</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-6" style="display:none;"> 
                        <label for="englishcenter" class="col-6 control-label">Trung tâm ngoại ngữ:</label>
                        <div class="col-6 f-input">
                            <input type="text" class="form-control" name="englishcenter" id="englishcenter"  placeholder="Trung tâm ngoại ngữ" value="" maxlength=100 />
                        </div>
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="class" class="col-6 control-label">  - Lớp: <span class="required">(*)</span></label>
                        <div class="col-6 f-input">
                            <select name="class" id="class" class="form-control" data-toggle="tooltip" title="Chọn lớp">
                                <option value="1<">&lt; 1</option> 
                                
				                  <option value="1"  >1</option>
				                
				                  <option value="2"  >2</option>
				                
				                  <option value="3"  >3</option>
				                
				                  <option value="4"  >4</option>
				                
				                  <option value="5"  >5</option>
				                
				                  <option value="6"  >6</option>
				                
				                  <option value="7"  >7</option>
				                
				                  <option value="8"  >8</option>
				                
				                  <option value="9"  >9</option>
				                
				                  <option value="10"  >10</option>
				                
				                  <option value="11"  >11</option>
				                
				                  <option value="12"  >12</option>
				                
                                <option value=">12">&gt;12</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-6 forDistrictHCM"> 
                        <label for="school" class="col-6 control-label">Trường: <span class="required">(*)</span></label>
                        <div class="col-6 f-input" id="school-section">
                            <select id="school" name="school" class="form-control chosen-select" data-toggle="tooltip" title="Chọn trường"></select>
                        </div>
                    </div>
                </div>
                <div class="title-section">Thông tin đăng ký chuyển phát chứng chỉ</div>
<div class="form-group col-12" id="services">
    <div class="checkbox-group checkbox"><input type="checkbox" class="checkbox service-group chk-cc" name="chk-cc" id="chk-cc" value="1"  />
        <label for="chk-cc">Đăng ký dịch vụ chuyển phát chứng chỉ:</label>
    </div>
</div>
<div class="info2-section"> 
    <div class="form-group col-6">
        <label for="deliveryname" class="col-6 control-label">Họ và tên người nhận:</label>
        <div class="col-6 f-input">
            <input type="text" class="form-control" name="deliveryname" id="deliveryname" placeholder="Nhập họ và tên người nhận" value="" maxlength="100" />
        </div>
    </div>

    <div class="form-group col-6">
        <label for="deliveryphone" class="col-6 control-label">Số điện thoại:</label>
        <div class="col-6 f-input">
            <input type="text" class="form-control" name="deliveryphone" id="deliveryphone" placeholder="Nhập số điện thoại người nhận" value="" maxlength="10" />
        </div>
    </div>
    <div class="form-group col-6">
        <label for="deliveryaddress" class="col-6 control-label">Khu vực:</label>
        <div class="col-6 f-input">
            <select name="deliverydistrict" id="deliverydistrict" class="form-control" data-toggle="tooltip" title="Chọn khu vực">
                
                <option value="0" selected>TP. HCM</option>
                
                <option value="1">Ngoại tỉnh</option>
                
            </select>
        </div>
    </div>
    <div class="form-group col-6">
        <label for="deliveryaddress" class="col-6 control-label">Địa chỉ giao nhận:</label>
        <div class="col-6 f-input">
            <input type="text" class="form-control" name="deliveryaddress" id="deliveryaddress" placeholder="Nhập địa chỉ giao nhận" value="" maxlength="100" />
        </div>
    </div>
</div><div class="title-section">Thông tin thanh toán</div>
<div class="info4-section">
    <div class="col-12 b-line">
        <label for="login" class="cols-6 control-label amount-label">Lệ phí:</label>
        <div class="cols-6 amount">
            <span id="exam-fee">0</span> đồng
        </div>
    </div>
    
    <div class="col-12 b-line" id="dv-cc-amount" style="display:none;">
        <label class="cols-6 control-label amount-label">Phí chuyển phát chứng chỉ</label>
        <div class="cols-6 amount">
            <span id="cc-fee">0</span> đồng
        </div>
    </div>
    
    <div class="col-12 b-line" id="dv-grand-total">
        <label class="cols-6 control-label amount-label grand-total">TỔNG PHÍ THANH TOÁN:</label>
        <div class="cols-6 amount grand-total">
            <span id="grand-total">0</span> đồng
        </div>
        <div id="in-words"></div>
    </div>
</div>
                <div class="form-group col-12 button-group">
                    <button type="button" class="btn btn-primary btn-lg save-button" id="validateFormBtn">ĐĂNG KÝ</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal registerConfirm" id="registerConfirm" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Xác nhận đăng ký!</h4>
            </div>
            <div class="modal-body">
                <p>Nếu thông tin của bạn đã đúng và đầy đủ.
                   <br />Nhấn "Đồng ý" để hoàn tất.
                   <br />Hoặc nhấn "Quay lại" để chỉnh sửa lại thông tin.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Quay lại</button>
                <button type="button" class="btn btn-default" id="registerStart">Đồng ý</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="DlgLoading" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <p><center><img src="images/loader.gif" /></center></p>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal" id="DlgNotification" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thông báo!</h4>
            </div>
            <div class="modal-body">
                <div id="notification-containner">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="DlgError" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thông báo lỗi!</h4>
            </div>
            <div class="modal-body">
                <div id="error-containner">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
            </div>
        </div>
    </div>
</div>

<div class="modal registerNotAllow" id="registerNotAllow" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Chú ý!</h4>
            </div>
            <div class="modal-body">
                    <div id="toefl-primary-challenge-note" style="display:none;">
                    <p>Kỳ kiểm tra <b id="notallow-selected-exam">Toefl Junior Challenge</b> chỉ áp dụng đối với thí sinh đang theo học tại các trường trên địa bàn <b>Tp. Hồ Chí Minh</b>.
                    <br>Xem chi tiết thể lệ cuộc kiểm tra <a href="https://ttngoaingutinhoc.hcm.edu.vn/thong-bao/the-le-cuoc-thi-tieng-anh-toefl-primary-challenge-toefl-junior-challenge-nam-ho-cmobile41169-63554.aspx" target="challengetoefl">tại đây</a> 
                    </div>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap/js/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="bootstrap/chosen/chosen.jquery.min.js" type="text/javascript"></script>
<link href="bootstrap/chosen/chosen.min.css" rel="stylesheet" type="text/css" />   
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/autocomplete.min.js" type="text/javascript"></script>
<script src="js/sign-up.js?20230109" type="text/javascript"></script>
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
