<html lang="en">

<head>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <title>HomeWorkPHP</title>
</head>

<body>
    <div class="section">
        <h1>Register</h1>
    </div>
    <div class="container">
        <form method="POST" action="registerconfirm.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" required />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name - Surname</label>
                <input type="text" class="form-control" name="name-surname" required />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" required />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="cf-password" required />
            </div>
            <div class="center">
                <button type="submit" class="btn btn-success">Confirm</button>
            </div>
        </form>

        <div class="center">
            <a name="" class="btn btn-light" href="index.html" role="button">Already have an account? Sign in</a>
        </div>

    </div>
</body>

</html>