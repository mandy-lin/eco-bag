
<?php
        include 'mssql_connect.php';
        $out = $rec = $admin = $who = "";
        $who = "訪客";
        $out = "<li><a href='loginHTML.php'>會員登入</a></li>";

        if ($_SESSION['login'] == True){
            $out = "<li><a href='loginHTML.php'>登出</a></li>";
            $rec = "<li><a href='recUserHTML.php'>修改會員資料</a></li>";
            $who = $_SESSION['account'];
            if ($_SESSION['account'] == "admin123"){
                $admin = "<li><a href='deleteNumHTML.php'>管理員介面</a></li>";
            }
        }

    ?>