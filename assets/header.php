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
        }

        nav .brand-logo img {
            height: 50px;
            margin-right: 10px;
            max-width: 100%;
        }

        nav .brand-logo:hover {
            text-decoration: none;
        }

        @media (max-width: 600px) {
            nav .brand-logo {
                font-size: 1.2rem;
            }
            nav .brand-logo img {
                height: 35px; /* Adjust the height as desired */
            }
        }
    </style>
</head>
<body>
    <?php $urlProject = "http://localhost:5000/projetstage/projetphp"; ?>

    <header>
        <nav class="navbar-dark bg-dark">
            <div class="nav-wrapper container">
                <a href="<?= $urlProject ?>/index.php" class="brand-logo">
                    <img src="<?= $urlProject ?>/assets/images/images.png" alt="Logo" class="responsive-img">
                    Knowledge Hub
                </a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= $urlProject ?>/users/controllers/controller-home.php">Home</a></li>
                    <li><a href="<?= $urlProject ?>/users/views/view-about.php">About</a></li>
                    <li><a href="<?= $urlProject ?>/users/controllers/controller-historique.php">Historique</a></li>
                    <li><a href="<?= $urlProject ?>/admin/controllers/controller-signin.php">Admin-Hub</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="<?= $urlProject ?>/users/controllers/controller-home.php">Home</a></li>
        <li><a href="<?= $urlProject ?>/users/views/view-about.php">About</a></li>
        <li><a href="<?= $urlProject ?>/users/controllers/controller-historique.php">Historique</a></li>
        <li><a href="<?= $urlProject ?>/admin/controllers/controller-signin.php">Admin-Hub</a></li>
    </ul>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>
</body>
</html>