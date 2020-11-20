<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './conn.php';
        require './queries.php';
        // put your code here
//        echo 'Hello world';

        $objDatabase = new Database();
        $conn = $objDatabase->getDbConnection();

        $objQueries = new FetchQueries($conn);
        $objQueries->readDataFromDb();

        $url = 'http://localhost/API/restapi.php';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);

        //this code prints the hole object
//        echo curl_exec($ch);

        $response = json_decode(curl_exec($ch), true); //because of true, it's in an array
//       
        foreach ($response['data_view'] as $item) {
            $data=$item['name'];
//            echo $data, "\n";
            echo '<p style="color:red;"><b>'.$data.'</b></p>';
        }
//        echo $response['data_view'][1]['name'];
        curl_close($ch);
        ?>
    </body>
</html>
