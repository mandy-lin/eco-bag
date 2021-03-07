<?php
        include 'mssql_connect.php';
        $sqlSelect = "SELECT * FROM Account;";  
        $test = sqlsrv_query($conn,$sqlSelect);
        $name = $Phone = $email = $account = $password = $suc = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["account"])) {
            $suc = "帳號不可為空值";
          } else {
            $account = test_input($_POST["account"]);
            $serh = "SELECT * FROM Account where account = '$account';";
            $serhtest = sqlsrv_query($conn,$serh);
            $row = sqlsrv_fetch_array( $serhtest, SQLSRV_FETCH_ASSOC);
              
            if ($row['account'] == $account){
                $del = "delete from Account where account='$account'";
                sqlsrv_query($conn,$del);
                $suc = "移除成功!!";
                sleep(1);
                header("Location: deleteNumHTML.php");
            }else{
                $suc ="沒有此會員!!";
            }
            
          }
        }
    
    ?>