<?php
        include 'mssql_connect.php';
        $name = $Phone = $email = $account = $password = $suc = "";
        $account = $_SESSION['account'];

        
        $sqlSelect = "SELECT * FROM Account where account = '$account';";
        $test = sqlsrv_query($conn,$sqlSelect);
        $row = sqlsrv_fetch_array( $test, SQLSRV_FETCH_ASSOC);
        
        $name = $row['name'];
        $Phone = $row['number'];
        $email = $row['email'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
          if (empty($_POST["RecPassword"])) {
            $suc = "密碼不可為空值";
            } else {
                $password = test_input($_POST["RecPassword"]);
                $name = test_input($_POST["name"]);
                $Phone = test_input($_POST["Phone"]);
                $email = test_input($_POST["email"]);
                if($_POST["RecPassword"] == $_POST["PwCheck"]){
                    $sqlAddMen = "UPDATE Account SET name='$name',number='$Phone',email='$email',password='$password'  WHERE account = '$account';";
                    $test = sqlsrv_query($conn,$sqlAddMen);
                    $suc = "修改成功!!";
                }else{
                    $suc = "兩次數入密碼不同!!";
                }
            }
        }

        
    ?>