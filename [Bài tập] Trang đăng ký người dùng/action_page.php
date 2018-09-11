<?php
$email1 = null;
$pas = null;
$repeatPas = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $repeatPass = $_POST['psw-repeat'];
    $md5 = null;

    if (empty($email)) {
        $email1 = "Email chưa được nhập ";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email1 = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
        }
    }

    if (empty($pass)) {
        $pas = "Password chưa được nhập";
    } else {
        $md5 = md5($pass);
    }

    if (empty($repeatPass)) {
        $repeatPas = "RepeatPass chưa được nhập ";
    }

    function getContents()
    {
        $json = file_get_contents('json.json');
        //true :chuyển về mảng array ; false :chuyển về dạng class
        $arrData = json_decode($json, true);
        return $arrData;
    }

    function saveDataJSON($filename, $email, $pass)
    {
        $arr = array(
            'email' => $email,
            'pass' => $pass
        );

        $arrData = getContents();

        array_push($arrData, $arr);

        $jsonData = json_encode($arrData, JSON_PRETTY_PRINT);

        $jsonPush = file_put_contents($filename, $jsonData);
    }

    saveDataJSON("json.json", $email, $md5);

}
?>