<?php
include('config.php');
if(isset($_POST['submit']))
{
//    $id=$_POST['id'];
    $name=$_POST['register_name'];
    $email=$_POST['register_email'];
    $phone=$_POST['register_phone'];
    $password=$_POST['register_password'];
    $gender=$_POST['gender'];
    $project=$_POST['project'];

$sql="INSERT INTO register_register(register_name,register_email,register_phone,register_password,gender,project) VALUES('$name','$email','$phone','$password','$gender','$project')";
$result=mysql_query($sql,$con);
if(!$result)
{
mysql_error();
}
}
//echo "success created";
echo '<script>
alert("successfully created");
window.location.href="view.html";
</script>';
?>