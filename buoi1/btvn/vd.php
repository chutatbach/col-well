<?php 
// $GLOBALS[key] là 1 biến mảng lưu trữ các biến toàn cục dựa vào key = tên biến 
$x = 5;
$y = 7;
function add():int{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    return $GLOBALS['z'];
}
echo add();

//$_SERVER[key]  là 1 biến mảng lưu trữ các đường dẫn, thông tin, và các địa chỉ mã lệnh,....
echo $_SERVER['PHP_SELF'];// /col-well/buoi1/btvn/vd.php
echo "<br>";
echo $_SERVER['SERVER_NAME'];// localhost
echo "<br>";
echo $_SERVER['HTTP_HOST'];// localhost
echo "<br>";
echo $_SERVER['HTTP_REFERER'];// http://localhost/col-well/buoi1/btvn/
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];// Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];// /col-well/buoi1/btvn/vd.php

// $_REQUEST[key] là 1 biến mảng lưu trữ dữ liệu từ form người dùng nhập rồi gửi
print_r($_REQUEST); 
// Array (
//     [username] => 'bach'
//     [password] => '123'
// );


// $_POST[key] là 1 biến mảng lưu trữ dữ liệu từ form người dùng nhập rồi gửi với thuộc tính của thẻ form là method giá trị là POST 
print_r($_POST); 
// Array (
//     [username] => 'bach'
//     [password] => '123'
// );

// $_GET[key] là 1 biến mảng lưu trữ dữ liệu từ thanh url
// VD: người dùng nhập rồi gửi với thuộc tính của thẻ form là method giá trị là GET 
// khi submit chuyển trang thì trang web sẽ nhận được ?username=bach&password=123
// hoặc ta có thể dùng đường dẫn chuyển trang 
print_r($_GET); 
// Array (
//     [username] => 'bach'
//     [password] => '123'
// );


// $_FILES là 1 biến mảng lưu trữ tập tin từ form người dùng chọn file rồi gửi với thuộc tính của thẻ form là method giá trị là POST và enctype="multipart/form-data"
print_r($_FILES); 
// Array (
//    [name] => facepalm.jpg //tên ảnh 
//    [type] => image/jpeg //loại  
//    [tmp_name] => /tmp/phpn3FmFr //thư mục tạm
//    [error] => 0 //lỗi 
//    [size] => 15476 //kích thước ảnh
// );



// $_COOKIE[key] là 1 biến mảng lữu trữ dữ liệu khi được
// setcookie(
//     string $name, // key
//     string $value, // dữ liệu được truyền
//     int $expires, // thời gian sống cookie
//     string $path, // đường dẫn lưu trữ cookie
//     string $domain, // tên domain 
// ):

print_r($_COOKIE['name']); //lấy giá trị 
setcookie('name','',time() - 3600); //xóa cookie


session_start(); //muốn làm việc với session ở trang web nào thì phải có session_start() ở đầu lệnh
// $_SESSION[key] là 1 biến mảng lữu trữ dữ liệu bên phía máy chủ 
$_SESSION["newsession"] = 'bach'; // lữu trữ dữ liệu
$a = $_SESSION["newsession"]; // lấy dữ liệu
print_r($a); //hiển thị giá trị 'bach'
unset($_SESSION["newsession"]);//loại bỏ mảng theo key
session_destroy(); // xóa toàn bộ session
?>
