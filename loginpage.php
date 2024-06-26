<?php
session_start();

require_once "includes/dbh.inc.php";

//Check if user is already logged in:
//
if(isset($_SESSION["user_id"]) && isset($_SESSION["email"])){
  header("Location: home.php");
}

//Check for login errors
//
if(!isset($_SESSION["login_error"])){
  $_SESSION["login_error"] = "";
}
$loginMessage = $_SESSION["login_error"];

if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];

    $sql = "SELECT user_id, email, password_hash FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $user= $stmt->fetch(PDO::FETCH_ASSOC);

    if($user && $password === $user["password_hash"]){
      $_SESSION["user_id"] = $user["user_id"];
      $_SESSION["email"] = $user["email"];
      $_SESSION["login_error"] = '';

      header("Location: home.php");
    } else{
      $_SESSION["login_error"] = "Invalid email or passwordl!";

      header("Location: invalidlogin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/loginpage.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="js/login-form-validation.js" defer></script>
  <title>Log in</title>
</head>

<body>
  <div id="page-container">
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php">
            <img class="logo" src="images/Logo.png" title="Empower your strength and mind" alt="Iron Anchor Athletics">
          </a>
          <h1 class="nav-title">Iron Anchor Athletics</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
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
              <a class="nav-link navbar-brand" href="loginpage.php" title="Coming soon">Log in</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="main">
      <section class="login-form">
        <div class="container">
          <div class="row">
            <div class="col-5">
              <div class="title">
                <h1>LOG IN</h1>
              </div>
              <div class="login-link">
                <a href="createacc.php">
                    <h5>CREATE AN ACCOUNT</h5>
                </a>
                <h5 class="invalid-login-msg"><?php echo $loginMessage ?></h5>
              </div>
            </div>
            <div class="col">
              <form class="form" method="POST">
                <div class="form-floating mb-3">
                  <input name="email" id="email" type="text" class="form-control">
                  <div id="email-error" class="error-message"></div>
                  <label for="email">Email:</label>
                </div>
                <div class="form-floating mb-3">
                  <input name="password" id="password" type="password" class="form-control">
                  <div id="password-error" class="error-message"></div>
                  <label for="password">Password:</label>
                </div>
                <button class="submit" type="submit">Log in</button>
              </form>
            </div>
          </div>
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
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact</a></li>
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
            <li class="ms-3"><a class="link-dark" href="https://www.facebook.com/victor.pausan" target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg></a></li>
            <li class="ms-3"><a class="link-dark" href="https://www.instagram.com/pausanvictor/" target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg></a></li>
            <li class="ms-3"><a class="link-dark" href="https://twitter.com/VictorPausan" target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter-x"
                  viewBox="0 0 16 16">
                  <path
                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg></a></li>
          </ul>
        </div>
      </footer>
    </div>
  </div>
  </div>
</body>

</html>