<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from login_login where id='$id'");
if($query1)
{
echo'<script>
alert("successfully deleted");
window.location.href="login_view.php";
</script>';
}
}
?>
</body>
</html>