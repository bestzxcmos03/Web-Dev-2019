
<head>
    <link rel="stylesheet" href="form.css">
</head>
<body class="bg">
<?php
$name = $_POST['name'];
$email = $_POST['email'];
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";


?>
ข้อมูลที่ส่งเข้ามาคือ<hr>
ชื่อ: <?=$name?><br>
email: <?=$email?><br>
<br> Thank you



</body>
