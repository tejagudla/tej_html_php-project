<?php
include("config.php");
if(isset($_POST['submit']))
{
    $email=$_POST["login_email"];
    $password=$_POST["login_password"];
    
$sql="INSERT INTO login_login(login_email,login_password)
VALUES ('$email','$password')";
$result=mysql_query($sql,$con);
if(!$result)
{
        
mysql_error();
}
//echo"success";
echo'<script>
alert("successfully created");
window.location.href="thankyou.php";
</script>';
}
?>