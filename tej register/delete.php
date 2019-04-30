<html>
<body>
        <?php
            include('config.php');
            if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $query1=mysql_query
            ("delete from  register_register where id='$id'");
        {
            echo'<script>
            alert("successfully deleted");
            window.location.href="view.php";
            </script>';
        }
        }
        ?>
</body>
</html>