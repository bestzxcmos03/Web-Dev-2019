<?php
session_start();
?>
<html>
<body>
<?php
echo "Favorite color is ".$_SESSION["favcolor"]."<br>";
echo "user name is".$_SESSION["user"];
?>
</body>
</html>

