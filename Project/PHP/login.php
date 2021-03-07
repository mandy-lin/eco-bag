<?php
        include 'mssql_connect.php';
        $sqlSelect = "SELECT * FROM Account;";  
        $test = sqlsrv_query($conn,$sqlSelect);
        $account = $password = $suc = "";
        unset($_SESSION['account']);
        $_SESSION['login'] = False;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["account"]) || empty($_POST["password"])) {
            $suc = "帳號或密碼不可為空值";
          } else {
            $account = test_input($_POST["account"]);
            $password = test_input($_POST["password"]);
            $sqlSelect = "SELECT * FROM Account where account = '$account';";
            $test = sqlsrv_query($conn,$sqlSelect);
            $row = sqlsrv_fetch_array( $test, SQLSRV_FETCH_ASSOC);
                if (($row['account'] == $account) && ($row['password'] == $password)){
                    $_SESSION['account'] = $account;
                    $_SESSION['login'] = True;
                    header("Location: indexHTML.php");
                }else{
                    $suc = "帳號密碼錯誤";
                }
          
            }
        }

    ?>