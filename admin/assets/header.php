<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Google Icons -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Test Website</title>
  <style>
        nav .brand-logo {
  display: flex;
  align-items: center;
  height: 64px;
  transition: color 0.3s ease; /* Add transition for smooth color change */
}

nav .brand-logo:hover {
  color: #e0e0e0; /* Change color on hover */
}

nav .brand-logo img {
  height: 50px;
  margin-right: 10px;
  max-width: 100%;
  transition: transform 0.3s ease; /* Add transition for smooth scaling */
}

nav .brand-logo:hover img {
  transform: scale(1.1); /* Scale up the image on hover */
}

nav .brand-logo span {
  white-space: nowrap;
}

nav ul a {
  transition: color 0.3s ease; /* Add transition for smooth color change */
}

nav ul a:hover {
  color: #e0e0e0; /* Change color on hover */
  background-color: rgba(255, 255, 255, 0.1); /* Add a subtle background color */
}

@media (max-width: 600px) {
  

  nav .brand-logo {
    font-size: 1rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    height: auto;
  }

  nav .brand-logo img {
    height: 25px; /* Adjust the height as desired */
    margin-right: 5px;
  }

  nav .brand-logo span {
    white-space: normal;
  }

  .sidenav-trigger {
    margin-left: auto;
  }
}

        @media (max-width: 600px) {
            nav .brand-logo {
                font-size: 1rem;
            }
            nav .brand-logo img {
                height: 25px; /* Adjust the height as desired */
            }
        }
    </style>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <img src="../assets/images/images.png" alt="Logo" style="width: 50px; height: 50px; margin-right:5px;">
                <a class="navbar-brand" href="../../index.php">Knowledge Hub</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../../users/controllers/controller-home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/view-about.php">About</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="../../admin/controllers/controller-signin.php">Admin-Hub</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--
  <nav class="navbar-fixed">
    <div class="nav-wrapper indigo darken-4">
      <a href="#" class="brand-logo center">
        <img src="https://via.placeholder.com/50x50?text=Logo" alt="Logo" style="margin-left: 10px; margin-right: 10px;">
        Test Website
      </a>
      <ul class="left hide-on-med-and-down">
        <li><a href="../controllers/controller-home.php">Home</a></li>
        <li><a href="../controllers/controller-profile.php">Profile</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
  <li><a class="waves-effect waves-light btn-flat red accent-4 darken-2 white-text" href="../controllers/controller-deconnection.php">Logout</a></li>
</ul>
    </div>
  </nav>
-->
  <!-- Your content goes here -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Materialize JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>