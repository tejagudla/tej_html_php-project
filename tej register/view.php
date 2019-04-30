<html>
  <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: green;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
             </button>
         <a class="navbar-brand" href="tez.jpg">img</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
             <li class="active"><a href="home.php">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="projects.php">Projects</a></li>
             <li><a href="contact.php">Contact</a></li>
          </ul>
       <ul class="nav navbar-nav navbar-right">
            <li><a href="loginform.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
         </div>
    </div>
</nav>
  
<body>
    <div class="col-sm-8 text-left"> 

   
    
        <h1>ViewPage</h1>
        <table border="1px solid blue">
            <thead>
            <tr>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Project</th>
                    
                    <th>Action</th>
                    
            </tr>
            </thead>
            <tbody>
                <?php
                include("config.php");
                $sql="SELECT*FROM register_register ORDER BY id";
                $result=mysql_query($sql,$con);
                while($row=mysql_fetch_array($result))
                {?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['register_name'];?></td>
                    <td><?php echo $row['register_email'];?></td>
                    <td><?php echo $row['register_phone'];?></td>
                    <td><?php echo $row['register_password'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['project'];?></td>
                    <td>
                <a href="registrationform.php">Add</a>
                <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>         </td>
                </tr>
                <?php }?>
 </tbody>
 </table>
   </div>    
 </body>
 </html>    