<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
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

<body>

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
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 text-left">

<h1>Indian Office(Web development)</h1>
<p>MVP,Visakhapatnam,Andhrapradesh,India,Pin:530017.</p>
<p>Contactnumber:9989432673</p>
<br>
<h1>Email</h1>
<p>teja.g98@gmail.com<br>
tejagudla@yahoo.com</p>

<div class="container">
  <form class="form-inline" method="post" action="contact_insert_data.php">
      <div class="form-group">
    <label for="contact_name">Name:</label>
    <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Your name..">
      </div>
      <br><br>
      <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Your email..">
      </div>
      <br><br>
      <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" id="contact_subject" name="contact_subject" placeholder="Your subject..">
      </div>
     <br><br>
      <div class="form-group">
  <label for="yourmessage">Your Message:</label>
  <input type="text" class="form-control" id="contact_yourmessage" name="contact_yourmessage" placehodler="type yourmessage..">
  
      </div>
      <br><br>
  <button type="submit" class="btn btn-default" value="submit"  name="submit">submit
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