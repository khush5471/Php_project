<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" href="../style.css"/>
    </head>
    <body>
        <?php
        require('../conn.php');
        session_start();
        $objDatabase = new Database();
        $conn = $objDatabase->getDbConnection();
        // When form submitted, check and create user session.
        if (isset($_POST['email'])) {
//        $username = stripslashes($_REQUEST['username']);    // removes backslashes
//        $username = mysqli_real_escape_string($con, $username);
//        $password = stripslashes($_REQUEST['password']);
//        $password = mysqli_real_escape_string($con, $password);
//        // Check user is exist in the database
//        $query    = "SELECT * FROM `users` WHERE username='$username'
//                     AND password='" . md5($password) . "'";
//        $result = mysqli_query($con, $query) or die(mysql_error());
//        $rows = mysqli_num_rows($result);

            $url = 'http://localhost/API/login/loginapi.php';

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $data = array('email' => $email, 'password' => $password);
            $str = http_build_query($data);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);

            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//        curl_exec($ch);
            $output = curl_exec($ch);   //executes the API request
//            echo 'hello @@@@@@@@' . $output;//prints the output in json formay
            curl_close($ch);
//            echo 'hello ****@@@@@@@@' . json_decode($output, true);
            $response = json_decode($output, true); //returns the array

            $resultStatus = $response['status'];
            $resultMessage = $response['message'];


            if ($resultStatus == "1") {
//            $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: ../dashboard.php");
            } else {
                echo "<div class='form'>
                  <h3>$resultMessage</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
            }
        } else {
            ?>
            <form class="form" method="post" name="login">
                <h1 class="login-title">Login</h1>
                <input type="text" class="login-input" name="email" placeholder="Email" autofocus="true"/>
                <input type="password" class="login-input" name="password" placeholder="Password"/>
                <input type="submit" value="Login" name="submit" class="login-button"/>
                <p class="link">Don't have an account? <a href="../signup/registration.php">Registration Now</a></p>
            </form>
            <?php
        }
        ?>
    </body>
</html>
