<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillBridge Rwanda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</head>

<body>
   

    <div class="container py-5 py-sm-7">
        <div class="mx-auto" style="max-width: 30rem;">
            <div class="card card-lg mb-5">
                <div class="card-body">
                    <form method="POST" action="../submit.php">
                        <div class="text-center">
                            <div class="mb-5">
                                <h1 class="h3">Welcome to SkillBridge </h1>
                                <p>register to own an account.</p>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="names" name="names" required>
                            <label for="names">Names</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" placeholder="email"  name="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" placeholder="password"  name="password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-primary btn-lg" name="register">
                                Register Now
                            </button>
                        </div>
                        <div class="text-center">
                            <p>already have an account? <a class="link" href="login.php">login here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-md-2 mx-auto">
                <a href="/skillbridge" class="btn  btn-outline-dark">Home</a>
            </div>
        </div>
    </div>

</body>

</html>