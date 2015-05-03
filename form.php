<!doctype html>

<?php
 
if (isset($_POST['firstname'])) $firstname = $_POST['firstname'];
else $firstname = "(Not entered)";
if (isset($_POST['lastname'])) $lastname = $_POST['lastname'];
else $lastname = "(Not entered)";
if (isset($_POST['email'])) $email = $_POST['email'];
else $email = "(Not entered)";
if (isset($_POST['number'])) $number = $_POST['number'];
else $number = "(Not entered)";
if (isset($_POST['password'])) $password = $_POST['password'];
else $password = "(Not entered)";
if (isset($_POST['password'])) $repassword = $_POST['repassword'];
else $repassword = "(Not entered)";

echo <<<_END
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" viewport="width=device-width", initial scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/bootstrap.min.js"></script>
</head>

<body style="background-color:lavender">

<h1 style="text-align:center">Sign-up Form</h1><br/>


<form class="form-horizontal" role="form" Method="POST"> 
<div class="form-group"> 
<label for="firstname" class="col-md-6 col-xs-12 control-label">First Name</label>
<div class="col-md-6 col-xs-12">
<input type="text" class="form-control" id="firstname" placeholder="Enter First Name"> 
</div>
</div>

<form role="form" Method="POST"> 
<div class="form-group"> 
<label for="lastname" class="col-md-6 col-xs-12 control-label">Last Name</label>
<div class="col-md-6 col-xs-12">
<input type="text" class="form-control" id="lastname" placeholder="Enter Last Name"> 
</div>
</div>

<form role="form" Method="POST"> 
<div class="form-group"> 
<label for="email" class="col-md-6 col-xs-12 control-label">E-Mail</label>
<div class="col-md-6 col-xs-12">
<input type="text" class="form-control" id="email" placeholder="Enter E-mail"> 
</div>
</div>

<form role="form" Method="POST"> 
<div class="form-group"> 
<label for="number" class="col-md-6 col-xs-12 control-label">Phone Number</label>
<div class="col-md-6 col-xs-12">
<input type="text" class="form-control" id="number" placeholder="Enter Phone Number"> 
</div>
</div>

<form role="form" Method="POST"> 
<div class="form-group"> 
<label for="password" class="col-md-6 col-xs-12 control-label">Password</label>
<div class="col-md-6 col-xs-12">
<input type="password" class="form-control" id="password" placeholder="Enter Password"> 
</div>
</div>

<form role="form" Method="POST"> 
<div class="form-group"> 
<label for="repassword" class="col-md-6 col-xs-12 control-label">Re-Enter Password</label>
<div class="col-md-6 col-xs-12">
<input type="password" class="form-control" id="repassword" placeholder="Re-Enter Password"> 
</div>
</div>

</label>
 </div> 
<button type="signup" class="btn btn-default pull-right">Sign-up</button> 
 
</form>


</body>
</html>


_END;

?>



