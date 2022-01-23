<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.bootstrap.min.css">
<title>student Info</title>
</head>
<body>
    <form action="insert.php" method="post">
        <div class="col-md-6">
        <p>Name : <input type="text" placeholder="Enter your name" name="name" class="form-control"></p>
        </div>

        <div class="col-md-6">
        <p>Mobile : <input type="text" placeholder="Enter your mobile no" name="mobile" class="form-control"></p>
        </div>

        <div class="col-md-6">
        <p>Email : <input type="text" placeholder="Enter your Email" name="email" class="form-control"></p>
        </div>

        <div class="col-md-6">
        <p>password : <input type="text" placeholder="Enter your password" name="password" class="form-control"></p>
        </div>

        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>
    </body>
</html>