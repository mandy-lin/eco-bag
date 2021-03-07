<?php
    include 'mssql_connect.php';
    $stmt = sqlsrv_query($conn,$sqlSelect);
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
          echo $row['number'].".......".$row['password']."<br>";
    }

?>