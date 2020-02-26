<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    
    <div class = "container">        
        <div class = "col-xs-6">
            <h1>Đăng nhập</h1>
            <form action="?route=getform" method="post">
                <div class="form-group">
                    <label for="user">Name</label>
                    <input class = "form-control" type="text" name="user" id="user" >
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input class = "form-control" type="password" name="pass" id="pass">
                </div>
                <?php if(isset($_SESSION['login_err'])):?>
                <p class= ""><?php echo $_SESSION['login_err']; ?></p>
                <?php $_SESSION['login_err'] = null; endif; ?>
                <div class="form-group">
                    <button type= "submit" class = "btn btn-danger" > Login </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>