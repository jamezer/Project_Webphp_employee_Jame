<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="login.css"></script>
    <script src="login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
}

.form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}

.form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}

.form button:hover,
.form button:active,
.form button:focus {
    background: #43A047;
}

.form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
}

.form .message a {
    color: #4CAF50;
    text-decoration: none;
}

.form .register-form {
    display: none;
}

.container {
    position: relative;
    z-index: 1;
    max-width: 300px;
    margin: 0 auto;
}

.container:before,
.container:after {
    content: "";
    display: block;
    clear: both;
}

.container .info {
    margin: 50px auto;
    text-align: center;
}

.container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: #1a1a1a;
}

.container .info span {
    color: #4d4d4d;
    font-size: 12px;
}

.container .info span a {
    color: #000000;
    text-decoration: none;
}

.container .info span .fa {
    color: #EF3B3A;
}

body {
    background: #76b852;
    /* fallback for old browsers */
    background: rgb(141, 194, 111);
    background: linear-gradient(90deg, rgba(141, 194, 111, 1) 0%, rgba(118, 184, 82, 1) 50%);
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>Please Sign in</b></a>
                <div id="alertinfo" style="display: none";><p style="color:red"> username or password ไม่ถูกต้อง!!</p></div>
                <?php
                    $msg = '';
                    
                    if (isset($_POST['login']) && !empty($_POST['username']) 
                    && !empty($_POST['password'])) {
                        
                        // if ($_POST['username'] == 'Jamezer' && $_POST['password'] == '1234') {
                        //     $_SESSION['valid'] = true;
                        //     // $_SESSION['timeout'] = time();
                        //     $_SESSION['username'] = 'LoginSuccess';
                            
                        //     // echo 'You have entered valid use name and password';
                        //     header('Location: http://localhost/Project_Employee/');
                        // }else {
                        //     $msg = 'username or password ไม่ถูกต้อง!!';
                        // }
                    }
         ?>
            </div>
            <div class="card-body">
                <!-- <p class="login-box-msg">Sign in to start your session</p>  -->

                <!-- <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post"> -->
                    <!-- <h4 class="form-signin-heading"><?php echo $msg; ?></h4> -->
                    <input type="text" class="form-control" id="Logusername" name="username" value="Watcharin" placeholder="username = Jamezer" required
                        autofocus></br>
                    <input type="password" class="form-control" id="Logpassword" name="password" value="1234567" placeholder="password = 1234" required></br>
                    <button class="btn btn-lg btn-warning btn-block" id="btnCLLSLogin" type="submit" name="login">Login</button>
                <!-- </form> -->

                <!-- <form id="formLogin" action="actionLogin" method="post">
                    <input type="hidden" name="logintype" id="logintype">
                    <div class="input-group mb-3">
                        <input type="text" id="Logusername" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="Logpassword" name="password" class="form-control"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-center" style="text-align: center">
                            <button id="btnCLLSLogin" type="button" class="btn btn-warning btn-block">Login</button>
                        </div>
                    </div>
                </form> -->

                <br>


                <p class="login-box-msg" style="color:red;" th:text="${error}"></p>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
</body>
<script>
$("#btnCLLSLogin").click(function() {
    CheckLogin();
});
</script>

</html>