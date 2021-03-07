<?php session_start(); ?>
<?php
    $serverName="163.17.9.68";
    $connectionInfo=array("Database"=>"DB2_35",
                          "UID"=>"DB2_35",
                          "PWD"=>"DB2_35",
                          "CharacterSet" => "utf-8");
    $conn=sqlsrv_connect($serverName,$connectionInfo);
    if($conn === false){
        echo "Error!!!<br/>";
        die( print_r( sqlsrv_errors(), true));
    }

    function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
    }
?>