<html>
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Pro-Ivan 通行证分发</title>
  <style>
#divcss{margin:20 auto;width:50%;height:40px;}   
#footer {
            height: 90px;
            line-height: 40px;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            background: #373d41;
            color: #ffffff;
            font-family: Arial;
            font-size: 16px;
            letter-spacing: 1px;
        }
a {text-decoration: none}
  </style>
</head>
<body>
<?php
//所有需要输出二次密码打开的页面，只需要将本php文件进行包含即可
$url = $_SERVER["HTTP_REFERER"];
//echo $url;
if (!session_id()){session_start();};
if(isset($_GET['close'])){  
$url = $_GET['url']; 
unset($_SESSION['recheck']);
}
if(isset($_POST['password']) && $_POST['password'] == '123456'){
    $_SESSION['recheck'] = 1;
    $type=0;
    header('location:'.$url);
}
if(isset($_POST['password']) && $_POST['password'] == 'yujionako'){
    $_SESSION['recheck'] = 1;
    $type=1;
    header('location:'.$url);
}
if(!isset($_SESSION['recheck'])){
    setcookie("log", "1", time( )+86400*30, "/", $_SERVER['SERVER_NAME']);
    exit('<div id="divcss"><center>
        <img src="/Ivan.png" width=30%><br><br>
        <form method="post">
            我们的英文名?(全小写) ：<br><input type="password" name="password" />
            <input type="submit" value="确定" /><br>（访客密码：123456）
        </form>
    </center></div>
    ');
}
?>
<div id="footer">
    <?php
        if(isset($_COOKIE["log"]) != 1){
            header("refresh:0;url=/passport/passgive.php?close=yes");
        }
        elseif(isset($_COOKIE["passport"]) == FALSE){
            setcookie("passport", "by9X45eN7UMI0o75CR9t65eX7cvB88C98ny74bU8C74Xw577N9j", time( )+86400*30, "/", $_SERVER['SERVER_NAME']);
            if($type == 0){
                setcookie("type", "0", time( )+86400*30, "/", $_SERVER['SERVER_NAME']);
            }
            if($type == 1){
                setcookie("type", "x3X43W547897bM89I54c656drS6f5C6ju7v678f64bynUn8ONU98p", time( )+86400*30, "/", $_SERVER['SERVER_NAME']);
            }
        }
    ?>
    <a href="/new.html"><font color="#FFFFFF">已添加通行证，点击此处安全退出本页面</font></a><br>
    <a href='/passport/passgive.php?close=yes'><font color="#FFFFFF">您也可以点击这里注销以重新获得通行证</font></a>
</div>
</body>
</html>