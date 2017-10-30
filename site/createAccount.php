

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="bootstrap.min.css">
     <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="styles.css">
     <title>Ceylon Electricity Board</title>

  </head>
  <body>

<div id="back" class="grad1">


  <nav class="navbar navbar-default  ">
<div class="container-fluid " >
 <!-- Brand and toggle get grouped for better mobile display -->
 <div class="navbar-header navbarpic" >
   <a href="#" class="navbar-brand">Ceylon Electricity Board</span></a>
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
</button>



 </div>

 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


   <ul class="nav navbar-nav navbar-right " >
     <li  ><a href="infex.php">Home</a></li>
     <li ><a href="contactUs.php">Contact Us</a></li>
     <li><a href="aboutUs.php">About Us</a></li>
     <li><a href="login.php">Log In</a></li>

   </ul>
 </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<br>
<br>
<br>
<br>

 <div class="container-fluid">
   <div class="row">
     <form class="form-horizontal  createAccountPadding" action="insertUser.php" method="post">

       <div class="form-group">
         <label for="inputName3" class="col-sm-2 control-label">Name</label>
         <div class="col-sm-10">
           <input type="text" name="name"class="form-control" id="inputName3" placeholder="Name">
         </div>
       </div>
       <div class="form-group">
         <label for="inputAddress3" class="col-sm-2 control-label">Address</label>
         <div class="col-sm-10">
           <input type="text" name="address"class="form-control" id="inputAddress3" placeholder="Address">
         </div>
       </div>
       <div class="form-group">
         <label for="inputNIC3" class="col-sm-2 control-label">NIC</label>
         <div class="col-sm-10">
           <input type="text" name="nic"class="form-control" id="inputNIC3" placeholder="NIC">
         </div>
       </div>
       <div class="form-group">
         <label for="inputTelephoneNumber3" class="col-sm-2 control-label">T.P.Number</label>
         <div class="col-sm-10">
           <input type="text"name="tp_number" class="form-control" id="inputTelephoneNumber3" placeholder="Telephone Number">
         </div>
       </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email"class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password"class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputReEnterPassword3" class="col-sm-2 control-label">Re Enter Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputReEnterPassword3" placeholder="Re Enter Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit"name="submit" class="btn btn-default">Create Account</button>

    </div>
  </div>
</form>
</div>
</div>

</div>

   </div>

 </div>



   <!-- <script type="text/javascript" src="./jquery.min.js"></script>-->
    <!--<script type="text/javascript" src="./bootstrap.min.js"></script>-->
    <!--<script src="js/bootstrap.js">-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

    </script>


  </body>
</html>
