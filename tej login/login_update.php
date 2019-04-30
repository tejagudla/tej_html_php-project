<?php
include('config.php');
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  
    $sql="UPDATE `login_login` SET `email` = '$email', `password` = '$password'   WHERE `login_login`.`id`=$id";
    $result=mysql_query($sql,$con);
    if(!$result)
{
    mysql_error();
}
}
//echo "success";
echo'<script>
alert("successfully updated");
window.location.href="thankyou.php";
</script>';
?>