<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Medicine Delivery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signin.php">Sign in</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="med.php">Med</a>
      </li>
      
    </ul>
    
  </div>
</nav>
<form action="userinfo.php" method="post">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputEmail4">Name</label>
      <input type="text" name="first_name" class="form-control" placeholder="First name">
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail4">Name</label>
      <input type="text" name="last_name" class="form-control" placeholder="Last name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address_1" class="form-control" id="inputAddress" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" name="address_2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNumber">Phone Number</label>
      <input type="text" name="p_number" class="form-control" id="inputNumber">
    </div>
    <div class="form-group col-md-4">
    <label for="city">City</label>
    <input type="text" name="city" class="form-control" id="inputCity" placeholder="city">
  </div>
      
  
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" name="zip" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I agree with the terms
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>