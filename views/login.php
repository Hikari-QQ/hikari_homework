<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOG IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-light">
    <!-- Content Here -->

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-4">
                <h1 class="fw-bold text-center">LOGIN</h1>

                <form action="../actions/login.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="username" id="username" class="form-control" required autofocus
                            placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" id="password" class="form-control" required
                            placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-2">Log in</button>
                </form>
                <p class="text-center mt-2 small"><a href="#register" data-bs-toggle="modal"
                        data-bs-target="#register">Create Account</a></p>
            </div>
        </div>
    </div>

    <!-- Create Account (register page) -->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                    <div class="container">
                        <div class="justify-content-center mt-4">
                            <h1 class="fw-bold text-center">REGISTER</h1>
                            <form action="../actions/register.php" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">First Name</label>
                                    <input type="text" name="first_name" id="first-name" class="form-control" required
                                        autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" id="last-name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success w-100 mt-2 mb-4"
                                    data-bs-dismiss="modal">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>