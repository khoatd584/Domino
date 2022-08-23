<?php
require_once './db/connection.php';
?>
<?php include './pages/header-checkout.php' ?>
<?php include './pages/content-checkout.php' ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
if(isset($_POST['dathang'])) {
    require './PHPMailer-master/src/Exception.php';
    require './PHPMailer-master/src/PHPMailer.php';
    require './PHPMailer-master/src/SMTP.php';
    
    $mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail -> charSet = "UTF-8"; 
    $mail->isSMTP(); 
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true; 
    $mail->Username   = 'khoatdpc04409@fpt.edu.vn'; 
    $mail->Password   = '04042003tdK';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465; 

    $mail->setFrom('system@xxx.com', 'Domino Pizza');
    $mail->addAddress($email, $name);

    $mail->isHTML(true); 
    $mail->Subject = 'ĐƠN HÀNG PIZZA CỦA BẠN';
    $mail->Body    = $content;

    $mail->send();
    echo 'Đã gửi đơn hàng thành công';
} catch (Exception $e) {
    echo "Lỗi gửi mail: {$mail->ErrorInfo}";
}
}
?>
<?php include './pages/footer-cart.php' ?>