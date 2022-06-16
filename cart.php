<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Shopflex</title>
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
    <!-- INDEX CONTENT LAYER 1 -->
    <div class="container-fluid bg-default h-25">
        <!-- ROW 1 -->
        <div class="row p-4">
        
            <div class="col-md-7">
            <h6>My Cart</h6><hr>
            <form action="" class="cart-items">
                <div class="border rounded mt-4">
                    <div class="row ">
                        <div class="col-md-3">
                            <img src="./img/comp1.jpg" alt="1" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h5 class="pt-2">Apple Mac</h5>
                            <small class="text-secondary">Seller: dailytution</small>
                            <h5 class="pt-2">&#8358; 543,000</h5>
                            <button type="submit" class="btn btn-danger" name="remove">Remove</button>
                        </div>
                        <div class="col-md-3 py-5">
                            <div class="">
                                <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus "></i></button>
                                <input type="text" value="1" class="form-control w-25 d-inline ">
                                <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus "></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded mt-4">
                    <div class="row ">
                        <div class="col-md-3">
                            <img src="./img/elec14.jpg" alt="1" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h5 class="pt-2">Flat screen TV</h5>
                            <small class="text-secondary">12 inches : dailytution</small>
                            <h5 class="pt-2">&#8358; 203,000</h5>
                            <button type="submit" class="btn btn-danger" name="remove">Remove</button>
                        </div>
                        <div class="col-md-3 py-5">
                            <div class="">
                                <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus "></i></button>
                                <input type="text" value="1" class="form-control w-25 d-inline ">
                                <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus "></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-4 bg-white h-25 ">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6><hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <h6>Price (2 item(s))</h6>
                            <h6>Delivery Charges</h6><hr>
                            <h6>Amount Payable</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>&#8358; 746,000</h6>
                            <h6><span style="color: green">FREE</span></h6><hr>
                            <h6>&#8358; 746,000</h6>
                        </div>
                        <a href="checkout.php" class="btn btn-primary ">Checkout</a>
                    </div>
                </div>
            </div>
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