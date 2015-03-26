<?php
session_start();
if(isset($_SESSION['rno']){
header("location:login.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>