<?php
        include 'index.php';
        $stop = $search = $boardtext = $boardname = "";
        
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["comment"]) || empty($_POST["name"])) {    
                $stop = '留言及姓名不得為空';
                $boardtext = $_POST["comment"];
                return false;
            }else{
                $boardtext = $_POST["comment"];
                $boardname = $_POST["name"];
                $sqlAddboard = "INSERT INTO board VALUES('".$boardname."',getdate(),'".$boardtext."');";
                $test = sqlsrv_query($conn,$sqlAddboard);
                header("Location: boardHTML.php");
            }
        }
        $serh = "SELECT * FROM board;";
        $serhtest = sqlsrv_query($conn,$serh);
        while ($row = sqlsrv_fetch_array( $serhtest, SQLSRV_FETCH_ASSOC)){
            $search .= '<h4>'.$row['boardname'].'</h4>'.
                       '<h6>'.$row['boardTime'].'</h6>'.
                       '<p>'.$row['boardText'].'</p><hr>';
        }


    ?>