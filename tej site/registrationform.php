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
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
             </button>
         <a class="navbar-brand" href="images/tez.jpg">img</a>
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
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 text-left"> 

    <div class="container">
       
<h1>Registration</h1>
    <form class="form-inline" method="post" action="insertdata.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="register_name" id="register_name" placeholder="your name">
        </div><br><br>
    
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="register_email" id="register_email" placeholder="your email">
        </div><br><br>
    
         <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" name="register_phone" id="register_phone" placeholder="your phone">
        </div><br><br>
    
         <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="register_password" id="register_password" placeholder="your password">
        </div><br><br>
    
         <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="checkbox" name="gender" id="gender" value="male">Male
            <input type="checkbox" name="gender" id="gender" value="female">Female
            <input type="checkbox" name="gender" id="gender" value="others">Others
        </div><br><br>
    
         <div class="form-group">
            <label for="project">Project:</label>
        <input type="radio" name="project" id="project" value="webdesigning">Webdesigning
            <input type="radio" name="project" id="project" value="business">Business
        <input type="radio" name="project" id="project" value="onlinestores">Onlinestores
             <input type="radio" name="project" id="project" value="marketing">Marketing
             <input type="radio" name="project" id="project" value="portfolio">Portfolio
        </div><br><br>
    
        
            <button type="submit" name="submit" value="submit" id="submit">submit
        </button>
    
    </form>
          
    </div>
       
      </div>
<div class="col-sm-2 sidenav">

      </div>
            </div>
    </div>    
        
        <footer class="container-fluid text-center">
            <p>©2017,TEZ TECHNOLOGIES.ALL RIGHTS RESERVED</p>
        </footer>
    
</body> 
</html>