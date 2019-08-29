<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION["user"]="Pannawat";
$_SESSION["favcolor"]="green";
echo "Session variables are set";
?><hr>
<a href="page2.php">Go to Page2</a>
</body>
</html>

