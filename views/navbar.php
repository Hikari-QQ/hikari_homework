
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
   <!-- Content Here --> 

   <nav>
        <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 50px;">
            <div class="container">
                <a href="dashboard.php" class="navbar-brand">
                    <i class="fa-solid fa-house h3"></i>
                </a>
                <div class="navbar-nav">
                    <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
                    <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                        <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                    </form>
                </div>
            </div>
        </nav>
    </nav>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>