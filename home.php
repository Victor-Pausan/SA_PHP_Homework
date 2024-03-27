<?php
session_start();

$loggedIn = "Log in";
$loggedInLink = "loginpage.php";

if(isset($_SESSION["user_id"]) && isset($_SESSION["email"])){
    $loggedIn = "Log out";
    $loggedInLink = "logoutpage.php";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <script src="js/script.js" defer></script>
    <title>Iron Anchor Athletics</title>
</head>

<body>
    <div id="page-container">
        <header class="header">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">
                        <img class="logo" src="images/Logo.png" title="Empower your strength and mind"
                            alt="Iron Anchor Athletics">
                    </a>
                    <h1 class="nav-title">Iron Anchor Athletics</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link navbar-brand" href="#clubs" title="Preview">Clubs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-brand" href="#" title="Coming soon">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-brand" href="classes.html" title="Coming soon">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-brand" href="<?php echo $loggedInLink ?>" title="Coming soon"><?php echo $loggedIn ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="main">
            <section class="main-section">
                <picture class="picture">
                    <source media="(min-width: 1080px)" srcset="images/secondary_picture.png">
                    <source media="(min-width: 790px)" srcset="images/secondary_picture3.png">
                    <img src="images/secondary_picture2.png">
                </picture>
                <span class="card-body">
                    <h1 class="card-title">ELITE TRAINING.</h1>
                    <h1 class="card-title">UNBEATABLE RESULTS.</h1>
                    <p class="card-text">Join now or stay average.</p>
                    <a href="createacc.php" class="btn btn-light">Get started.</a>
                </span>
            </section>
            <section class="secondary-section">
                <picture class="picture">
                    <source media="(min-width: 1080px)" srcset="images/main_picture.jpg">
                    <source media="(min-width: 790px)" srcset="images/main_picture3.png">
                    <source media="(min-width: 690px)" srcset="images/main_picture4.png">
                    <img src="images/main_picture2.png" >
                </picture>
                <div class="square">
                    <h2 class="square-title">Membership with benefits</h2>
                    <p class="square-p">Unrivaled Group Fitness classes. Unparalleled Personal Training. Studios that
                        inspire you to perform and luxury amenities that keep you feeling your best.</p>
                    <a href="#" title="Comming soon">
                        <p class="square-p">View membership plans</p>
                    </a>
                </div>
            </section>
            <section class="third-section">
                <picture class="picture">
                    <source media="(min-width: 1080px)" srcset="images/section-pic-big.png">
                    <source media="(min-width: 790px)" srcset="images/section-pic-medium.png">
                    <img src="images/section-pic-small.png">
                </picture>
                <div class="square">
                    <h2 class="square-title">Where Luxury and Fitness Meet</h2>
                    <p class="square-p">Clubs that deliver an unrivaled experience to maximize your potential, and
                        luxury amenities that keep you performing at your best.</p>
                    <a href="#clubs" title="Comming soon">
                        <p class="square-p">Choose club</p>
                    </a>
                </div>
            </section>
            <section class="fourth-section container" id="clubs">
                <div class="explore-text">
                    <h2 class="explore-title">Explore A Club Near You</h2>
                    <p class="explore-content">Unrivaled Group Fitness classes. Unparalleled Personal Training. Studios
                        that inspire you to perform and luxury amenities that keep you feeling your best.</p>
                </div>
                <div id="carouselExampleInterval" class="carousel slide explore-slideshow" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="4000">
                        <img src="images/nyc-gym.png" class="d-block w-100" alt="...">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2>Tribeca</h2>
                              </div>
                              <div class="col-md-6 text-md-end">
                                  <h2 class="temperature" id="10007">60°F</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <p>54 Murray Street
                                    New York, NY 10007</p>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="4000">
                        <img src="images/florida-image.png" class="d-block w-100" alt="...">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2>Brickell Heights</h2>
                              </div>
                              <div class="col-md-6 text-md-end">
                                  <h2 class="temperature" id="33131">60°F</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <p>25 SW 9th Street
                                    Miami, FL 33131</p>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="4000">
                        <img src="images/la-gym.png" class="d-block w-100" alt="...">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2>West Hollywood</h2>
                              </div>
                              <div class="col-md-6 text-md-end">
                                  <h2 class="temperature" id="90069">60°F</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <p>8590 Sunset Blvd<br>West Hollywood, CA 90069</p>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="4000">
                        <img src="images/south-beach.png" class="d-block w-100" alt="...">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2>South Beach</h2>
                              </div>
                              <div class="col-md-6 text-md-end">
                                  <h2 class="temperature" id="33139">60°F</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <p>Collins Avenue
                                    Miami Beach, FL 33139</p>
                              </div>
                          </div>
                      </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </section>
        </main>
        <div class="container footer">
            <footer class="py-5">
              <div class="row justify-content-between">
                <div class="col-6 col-md-2 mb-3">
                  <h5>More Info</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#clubs" class="nav-link p-0 text-muted">Clubs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="about.html" class="nav-link p-0 text-muted">About</a></li>
                  </ul>
                </div>
          
                <div class="col-md-5 offset-md-1 mb-3">
                  <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                      <label for="newsletter1" class="visually-hidden">Email address</label>
                      <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                      <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
          
              <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2024 Iron Anchor Athletics, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                  <li class="ms-3"><a class="link-dark" href="https://www.facebook.com/victor.pausan" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg></a></li>
                  <li class="ms-3"><a class="link-dark" href="https://www.instagram.com/pausanvictor/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                  </svg></a></li>
                  <li class="ms-3"><a class="link-dark" href="https://twitter.com/VictorPausan" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                  </svg></a></li>
                </ul>
              </div>
            </footer>
          </div>
    </div>
</body>

</html>