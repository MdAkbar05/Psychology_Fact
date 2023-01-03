<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/15375f512b.js" crossorigin="anonymous"></script>
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


            width: 450px;
            height: 700px;
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

        input[type=text],
        input[type=password] {
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

        input[type=checkbox],
        label {
            display: inline;

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
    </style>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $userName = $_POST['fullName'];
        $userNumber = $_POST['number'];
        $userEmail = $_POST['userEmail'];
        $userPass = $_POST['userPass'];
        if ($userEmail && $userPass && $userName && $userNumber) {
            $connection = mysqli_connect("localhost", "root", "", "createaccount");

            $query = "INSERT INTO newuser(userName,userNumber,userEmail,userPass) VALUES('$userName','$userNumber','$userEmail','$userPass')";
            $exportResult = mysqli_query($connection, $query);


        } else {
            echo "<h1>Please! Fill Your Feild!</h1>";
        }


    }
    ?>

    <form action="createID.php" method="post" class="login-area">
        <div class="logo"><i class="fa-solid fa-right-to-bracket"></i></div>
        <div class="title">Sign In to Your Account</div>
        <input type="text" name="fullName" placeholder="Enter Your Full Name" id="fullName"><br>
        <input type="text" name="number" placeholder="Enter Your Number" id="number"><br>
        <input type="text" name="userEmail" placeholder="Enter Your Email" id="loginEmail"><br>
        <input type="password" name="userPass" placeholder="Enter a strong Password" id="loginPass"><br>
        <label for="checkbox">I accept terms of Service and Privacy Policy</label>
        <input type="checkbox" name="checkbox" required>
        <br>
        <input type="submit" value="Create Account" class="btn" name="submit"> <br>
        <a href="index.html">Go back to Home</a>

    </form>


</body>

</html>