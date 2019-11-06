<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="padding-top: 4%">
    <h1>Hello EveryOne</h1>
    <div class="container">
        <div class="col-lg-4 col-lg-push-4">
            <form action="" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Admin Login</h1>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Username :</label>
                            <input type="text" class="form-control" name="uname">
                        </div>
                        <div class="form-group">
                            <label>Password :</label>
                            <input type="text" class="form-control" name="pass">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary btn-block">LOGIN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
    if(isset($_POST['submit']))
    {
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        include 'sql.php';
        $str="select * from login where username='$uname' and password='$pass' and ActiveFlag=1";
        $res=mysqli_query($sql,$str);
        if(mysqli_num_rows($res)>0)
            echo "<script>alert('Login Sucessfull');window.location.href='res.html';</script>";
        else
            echo "<script>alert('Login unsucessfull')</script>";
    }
?>
</body>
</html>
