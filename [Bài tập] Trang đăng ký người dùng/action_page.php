<?php
$email1 = null;
$pas = null;
$repeatPas = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $repeatPass = $_POST['psw-repeat'];

    $md5 = md5($pass);

    if (empty($email)) {
        $email1 = "Email chưa được nhập ";
    }else {
       echo "<span style='color: #ff573e; font-size: 20px; margin-left: 20px; margin-bottom: 30px'>Email của bạn là : $email <br></span>";
    }

    if (empty($pass)) {
        $pas = "Password chưa được nhập";
    }else {
        echo "<span style='color: #ff573e; font-size: 20px; margin-left: 20px'>Password sau khi được mã hoá Md5 : $md5</span>";
    }

    if (empty($repeatPass)) {
        $repeatPas = "RepeatPass chưa được nhập ";
    }
}
?>