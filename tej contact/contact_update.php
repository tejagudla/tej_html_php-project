<?php
include('config.php');
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['contact_name'];
    $email=$_POST['contact_email'];
    $subject=$_POST['contact_subject'];
    $yourmessage=$_POST['contact_yourmessage'];
    
    $sql="UPDATE `contact_contact` SET `contact_name` = '$name', `contact_email` = '$email', `contact_subject`='$subject', `contact_yourmessage`='$yourmessage 'WHERE `contact_contact`.`id` = $id;";
    $result=mysql_query($sql,$con);
    if(!$result)
{
    mysql_error();
}
}
//echo "success";
echo'<script>
alert("successfully updated");
window.location.href="contact_view.php";
</script>';
?>