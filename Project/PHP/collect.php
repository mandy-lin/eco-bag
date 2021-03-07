<?php
        include 'index.php';
        $PlasNumber = $PlasName = $PlasUseful = $PlasSize = $PlasMaterials = $PlasPicPicture = $search = "";

        $serh = "SELECT * FROM PlasticBag ;";
        $serhtest = sqlsrv_query($conn,$serh);
        while ($row = sqlsrv_fetch_array( $serhtest, SQLSRV_FETCH_ASSOC)){
        $search.= '<tr><td>'.$row['PlasNumber'].'</td>'.
             '<td>'.$row['PlasName'].'</td>'.
             '<td>'.$row['PlasUseful'].'</td>'.
             '<td>'.$row['PlasSize'].'</td>'.
             '<td>'.$row['PlasMaterials'].'</td>'.
             '<td><img src="'.$row['PlasPicPicture'].'"></td>';
    }

    ?>