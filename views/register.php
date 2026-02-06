<!doctype html>
<html lang="en">
    <head>
        <title>Register Page</title>
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
                <div class="card shadow-sm p-4" style="max-width: 500px; width: 100%;">

                    <h4 class="text-center mb-4 fw-bold">Register</h4>
                    <?php 
                        if(isset($_GET['success']) || isset($_GET['error']))
                        {
                            if(isset($_GET['success']))
                            {
                               echo "<div class='my-3 alert alert-success'>User Registered Successfylly.</div>";
                            }
                            else
                            {
                                echo "<div class='my-3 alert alert-danger'>" .$_GET['error']. "</div>";
                            }
                        }
                    ?>
                    
                    <form action="../controller/RegisterController.php" method="post">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control" 
                                placeholder="Enter full name" 
                                required>
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input 
                                type="text" 
                                name="username" 
                                class="form-control" 
                                placeholder="Choose username" 
                                required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control" 
                                placeholder="Enter email" 
                                required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control" 
                                placeholder="Create password" 
                                required>
                        </div>

                        <!-- Gender -->
                        <div class="mb-3">
                            <label class="form-label d-block">Gender</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Male" required>
                                <label class="form-check-label">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Female">
                                <label class="form-check-label">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Other">
                                <label class="form-check-label">Other</label>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>

                    </form>

                    <p class="text-center mt-3 small">
                        Already have an account?
                        <a href="login.php" class="text-decoration-none">Login</a>
                    </p>

                </div>
            </div>
        </main>
        <footer>
            <?php require '../includes/footer.php' ?>
        </footer>
            
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



