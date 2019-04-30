<?php
include('config.php');
if(isset($_POST['submit']))
{
    
$id=$_POST['id'];
$name=$_POST['register_name'];
$email=$_POST['register_email'];
$phone=$_POST['register_phone'];
$password=$_POST['register_password'];
$gender=$_POST['gender'];
$project=$_POST['project'];
$sql= "UPDATE `register_register` SET `register_name` = '$name', `register_email` = '$email', `register_phone` = '$phone', `register_password` = '$password', `gender` = '$gender', `project` = '$project' WHERE `register_register`.`id` = $id;";
$result=mysql_query($sql,$con);
if(!$result)
{
mysql_error();
}
    
}

echo '<script>
alert("successfully updated");
window.location.href="view.php";
</script>';
?>