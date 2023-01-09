<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/15375f512b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 cdn Link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: rgb(156, 156, 156);
            display: flex;
            flex-direction: column;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .login-area {


            width: 400px;
            height: 600px;
            background-color: rgb(196, 194, 194);
            box-shadow: -5px -5px 20px rgb(255, 255, 255),
                5px 5px 20px rgb(85, 84, 84);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .login-area .logo {
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            top: -10%;
            position: relative;
            border-radius: 50%;
            box-shadow: -5px -5px 20px rgb(255, 255, 255),
                5px 5px 20px rgb(85, 84, 84);
        }

        .login-area .logo i {
            font-size: 40px;
        }

        .login-area .title {
            font-size: 35px;
            font-weight: 600;
            position: relative;
            top: -5%;
        }

        input {
            height: 35px;
            width: 300px;
            max-width: 350px;
            border: none;
            color: rgb(0, 0, 0);

            border-radius: 10px;
            background-color: rgb(196, 194, 194);
            box-shadow: inset 2px 2px 10px #6d6d6d,
                inset -5px -5px 10px white;
            padding: 5px;
            font-size: 20px;
        }

        .btn {
            width: 300px;
            height: 40px;
            border: none;
            background-color: rgb(196, 194, 194);
            color: rgb(0, 0, 0);
            border-radius: 10px;
            box-shadow: -5px -5px 20px rgb(255, 255, 255),
                5px 5px 20px rgb(85, 84, 84);
            font-size: 22px;
        }

        .btn:hover {
            background-color: rgb(0, 0, 0);
            color: #ffff;
        }

        a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 40px;
            margin-bottom: 20px;
            text-decoration: none;
            border: none;
            background-color: rgb(196, 194, 194);
            color: rgb(0, 0, 0);
            border-radius: 10px;
            box-shadow: -5px -5px 20px rgb(255, 255, 255),
                5px 5px 20px rgb(85, 84, 84);
            font-size: 23px;
        }

        a:hover {
            background-color: rgb(0, 0, 0);
            color: #ffff;

        }

        .text-warning {
            position: absolute;
            top: 10%;
            left: 40%;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $userEmail = $_POST['userEmail'];
        $userPass = $_POST['userPass'];

        $connection = mysqli_connect("localhost", "root", "", "createaccount");
        $sql = "SELECT * FROM newuser WHERE userEmail ='$userEmail' AND userPass = '$userPass'";
        $query = $connection->query($sql);
        if (mysqli_num_rows($query) > 0) {
            header("Location: index.html");
        } else {
            if (empty($userEmail && $userPass)) {
                echo '<span class="text-warning">Please Fill Up Your Feild</span>';
            } else {
                echo '<span class="text-warning">Your information is wrong!</span>';
            }

        }

    }
    ?>

    <form action="loginHome.php" method="POST" class="login-area">
        <div class="logo"><i class="fa-solid fa-right-to-bracket"></i></div>
        <div class="title">Login</div>
        <input type="text" name="userEmail" placeholder="Enter Your Email" id="loginEmail"><br>
        <input type="password" name="userPass" placeholder="Enter Your Password" id="loginPass"><br>
        <input type="submit" value="Login" class="btn" name="submit"> <br>
        <a href="CreateID.php">Sign Up New Account</a>
        <a href="index.html">Go back to Home</a>

    </form>


</body>

</html>