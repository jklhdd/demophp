<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <form action="getsignup.php" method = "post">
                <div class="form-group">
                    <label for="username">Name</label>
                    <input class = "form-control" type="text" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class = "form-control" type="text" name="email" id="email" required>
                </div>              
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class = "form-control" type="password" name="password" id="password" required>
                </div>

                <div class="form-group">
                    <label for="cpass">Confirm Password</label>
                    <input class = "form-control" type="password" name="cpass" id="cpass" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input class = "form-control" type="number" name="age" id="age" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class = "form-control" type="text" name="address" id="address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input class = "form-control" type="text" name="phone" id="phone" required>
                </div>
                <div class="form-group">
                    <button type= "submit" class = "btn btn-danger" > Sign up </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>