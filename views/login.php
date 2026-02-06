<?php 
    session_start();
    if(isset($_SESSION['username']))
    {
        header("Location: index.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <?php require '../includes/header.php' ?>
        </header>
        <main class="min-vh-100">
            <div class="container d-flex justify-content-center align-items-center mt-5">
                <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
                    
                    <h4 class="text-center mb-4 fw-bold">Login</h4>
                    <?php 
                        if(isset($_GET['success']) || isset($_GET['error']))
                        {
                            if(isset($_GET['success']))
                            {
                               echo "<div class='my-3 alert alert-success'>".$_GET['success']."</div>";
                            }
                            else
                            {
                                echo "<div class='my-3 alert alert-danger'>" .$_GET['error']. "</div>";
                            }
                        }
                    ?>
                    <form action="../controller/LoginController.php" method="post">
                        
                        <!-- Username -->
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input 
                                type="text" 
                                name="username" 
                                class="form-control" 
                                placeholder="Enter username" 
                                required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control" 
                                placeholder="Enter password" 
                                required>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>

                    </form>

                    <p class="text-center mt-3 small">
                        Don’t have an account? 
                        <a href="register.php" class="text-decoration-none">Register</a>
                    </p>

                </div>
            </div>
        </main>
        <footer>
            <?php require '../includes/footer.php' ?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>



