<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Registration</title>
        <link rel="stylesheet" href="../style.css"/>
    </head>
    <body>
        <?php
        require('../conn.php');
        $objDatabase = new Database();
        $conn = $objDatabase->getDbConnection();

        // When form submitted, insert values into the database.
        if (isset($_REQUEST['name'])) {

            $url = 'http://localhost/API/signup/signupapi.php';

            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $data = array('name' => $name, 'email' => $email, 'password' => $password);
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
                echo "<div class='form'>
                  <h3>$resultMessage</h3><br/>
                  <p class='link'>Click here to <a href='../login/login.php'>Login</a></p>
                  </div>";
            } else {
                echo "<div class='form'>
                  <h3>$resultMessage</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
            }
        } else {
            ?>
            <form class="form" action="" method="post">
                <h1 class="login-title">Registration</h1>
                <input type="text" class="login-input" name="name" placeholder="Name" required />
                <input type="text" class="login-input" name="email" placeholder="Email Adress">
                <input type="password" class="login-input" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Register" class="login-button">
                <p class="link">Already have an account? <a href="../login/login.php">Login here</a></p>
            </form>
            <?php
        }
        ?>
    </body>
</html>
