<?php
$blacklist = array(
    "192.168.0.1",
    "10.0.0.1",
    "172.16.0.1",
    "192.168.202.130"
);

// Lấy địa chỉ IP của người dùng
$user_ip = $_SERVER['REMOTE_ADDR'];

// Chuyển đổi địa chỉ IP của người dùng thành số nguyên 32 bit
$user_ip_long = ip2long($user_ip);

// Kiểm tra xem địa chỉ IP của người dùng có nằm trong danh sách đen hay không
if (in_array($user_ip_long, array_map('ip2long', $blacklist))) {
    // Nếu có, chặn truy cập của người dùng
    header('HTTP/1.0 403 Forbidden');
    exit;
}
?>
