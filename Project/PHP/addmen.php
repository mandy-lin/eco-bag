<?php
        include 'mssql_connect.php';
        $name = $Phone = $email = $account = $password = $suc = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["account"]) || empty($_POST["Password"])) {
            $suc = "電話或密碼不可為空值";
            } else {
                $name = test_input($_POST["name"]);
                $Phone = test_input($_POST["Phone"]);
                $email = test_input($_POST["email"]);
                $account = test_input($_POST["account"]);
                $password = test_input($_POST["Password"]);
              if (strlen($Phone) == 10){
                  $sqlSelect = "SELECT * FROM Account where account = '$account';";
                  $test = sqlsrv_query($conn,$sqlSelect);
                  $row = sqlsrv_fetch_array( $test, SQLSRV_FETCH_ASSOC);
                  if ($row['account'] != $account){
                      if($_POST["Password"] == $_POST["PwCheck"]){
                        $sqlAddMen = "INSERT INTO Account(name,number,email,account,password) VALUES('".$name."','".$Phone."','".$email."','".$account."','".$password."');";
                        $test = sqlsrv_query($conn,$sqlAddMen);
                        $name = $Phone = $email = $account = "";
                        $suc = "註冊成功!! 跳轉中..";
                        sleep(1); 
                        header(" Location: loginHTML.php");
                      }else{
                        $suc = "兩次數入密碼不同!!";
                      }
                  }else{
                      $suc = "此帳號已存在";
                  }
                }else{
                  $suc = "請輸入10位電話號碼";
              }
            }
        }


    ?>