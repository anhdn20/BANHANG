<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <style>
        .container{
            width: 40%;
            border-radius: 10px;
            background-color: #F8F9F9;
            border: 1px solid grey;
        }
        input{
            width: 100%;
            padding: 15px 10px;
            border: 1px black solid;
            border-radius: 7px;
            background: white;
        }

    </style>
</head>
<body>
<div class="container mt-5 p-5" >
    <form action="index.php?ctrl=login&act=login" method="post">
    <div class="row p-2">

            <div class="col-md-12 ">
                <h5 class="display-4 text-center">Đăng Nhập</h5>
            </div>
            <div class="col-md-12 mt-5">
                <input type="text" name="user-name" id="" placeholder="Account" />

            </div>
            <div class="col-md-12 mt-2">

                <span class=" text-danger"><?php if(isset($tk) && $tk!="") echo $tk; ?></span>
            </div>

            <div class="col-md-12 mt-2">
                <input type="password" name="pass" id="" placeholder="Password" />

            </div>
            <div class="col-md-12 mt-2">
                <span class=" text-danger"><?php if(isset($cbnull) && $cbnull!="") echo $cbnull; ?></span>
                <span class=" text-danger"><?php if(isset($cbpass) && $cbpass!="") echo $cbpass; ?></span>
            </div>
            <div class="col-md-12 mt-2">
                <button type="submit" class="btn btn-warning" name="dangnhap" value="dangnhap">Sign in</button>
            </div>
            <div class="col-md-12 mt-2">
                <a href="" class="">Forgot the password ?</a>
            </div>
            <div class="col-md-12 mt-3">Don't Have an account? <a href="index.php?ctrl=formuser&page=register">Creat One</a></div>

    </div>
    </form>
</div>
</body>
</html>

<?php
