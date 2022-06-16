<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>SignUp</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color: white;"><h1><i class="fas fa-shopping-cart"></i>Shop<span style="color: red">flex</span></h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#list" aria-controls="list" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="d-flex col-md-7">
            <input class="form-control me-2" type="search" placeholder="Search a product" aria-label="Search">
            <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
        
        <div class="collapse navbar-collapse justify-content-md-end" id="list">
            
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i> My Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Login Account</a></li>
                        <li><a class="dropdown-item" href="signup.php">SignUp Account</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-question-circle"></i> Help
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="about.php">AboutUs</a></li>
                        <li><a class="dropdown-item" href="contact.php">ContactUs</a></li>
                        <li><a class="dropdown-item" href="help.php">Something esle</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart "></i> Cart</a>
                </li>
            </ul>   
        </div>
    </div>
</nav>
<!-- SIGNUP CONTENT -->
<div class="container-fluid">
    <div class="col-md-6 offset-md-3 p-4" style="height: 563px;">
    <h1 style="color: #000000; font-size: 30px; line-height: 1.2em;"><span style="color:#0d6efd">SignUp</span> With Us</h1>
    <p style="color: #000000; font-size: 15px; line-height: 1.0em;">Please fill out the form below to signup</p><hr>
        <form method="POST" action="signup.php">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Firstname</label>
                                <input type="text" class="form-control" name="f_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Lastname</label>
                                <input type="text" class="form-control" name="l_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="e_mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Userame</label>
                                <input type="text" class="form-control" name="u_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" class="form-control" name="pass">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary form-control " style="border: 1px solid #0d6efd;">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
   
</div>
<!-- FOOTER -->
<div class="container-fluid bg-primary">
        <div class="row p-3 ">
            <div class="col">
                <h5 style="text-align:left; color: white">My Account</h5>
                    <p style="text-align:left; color: white">Shop <br> SignUp <br> My Account <br> Checkout</p>
            </div>
            <div class="col">
              <h5 style="text-align:left; color: white">Customer Care</h5>
                <p style="text-align:left; color: white">Home <br> Privacy Policy <br> Delivery & Returns <br> Terms & Conditions</p>
            </div>
            <div class="col">
              <h5 style="text-align:left; color: white">Newsletter</h5>
                <p style="text-align:left; color: white">Lorem ipsum dolor sit amet consectetur <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Lorem ipsum dolor sit.</p>
            </div>
        </div>
        <div class="row p-3 ">
            <div class="col">
                <p style="text-align: center; font-size: 15px; color: white">Shopflex &copy; 2022, All Right Reserved </p>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>