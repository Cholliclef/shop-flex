<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Games</title>
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
    <div class="container-fluid bg-default">
        <!-- ROW 1 -->
        <div class="row p-4">
            <div class="col">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style="height: 350px">
                        <div class="carousel-item active">
                        <img src="./img/sale5.jpg" class="d-block w-100" alt="Sales one">
                        </div>
                        <div class="carousel-item">
                        <img src="./img/sale6.jpg" class="d-block w-100" alt="Sales two">
                        </div>
                        <div class="carousel-item">
                        <img src="./img/sale12.jpg" class="d-block w-100" alt="Sales three">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW 3 -->
        <div class="row p-4">
            <h2 style="text-align: center"><b>Most moving game sales</b></h2>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game5.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game6.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game2.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game1.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game3.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game4.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game7.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game2.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game6.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game8.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game2.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                            <button class="btn btn-outline-danger" type="submit">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="col-sm-2">
                <table class="table table-hover">
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none" style="color: black">
                                <div class="card" style="background: url('./img/game1.jpg') no-repeat center center/cover; height: 150px;"></div>
                                <h5>Spons game <br><span style="color: red"><b>&#8358; 15,000</b></span></h5>
                            </a>
                        </td>
                    </tr>
                </table> 
            </div>
        </div>
        
        <!-- ROW 4 -->
        <div class="row p-4">
            <div class="col-md-6">
                <div class="card" style="background: url('./img/sale6.jpg') no-repeat center center/cover; height: 200px;">
                </div>
            </div>
            <div class="col-md-6">
                    <div class="card" style="background: url('./img/sale10.jpg') no-repeat center center/cover; height: 200px;">
                        <!-- <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div> -->
                    </div>
            </div>
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