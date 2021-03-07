<?php
        include 'index.php';
        $PlasNumber = $PlasName = $PlasUseful = $PlasSize = $PlasMaterials = $PlasPicPicture = $search = "";
        $serh = "SELECT * FROM PlasticBag;";
        $serhtest = sqlsrv_query($conn,$serh);
        while ($row = sqlsrv_fetch_array( $serhtest, SQLSRV_FETCH_ASSOC)){
            $search .= '<tr>'.'<td>'.$row['PlasNumber'].'</td>'.
                       '<td>'.$row['PlasName'].'</td>'.
                       '<td>'.$row['PlasUseful'].'</td>'.
                       '<td>'.$row['PlasSize'].'</td>'.
                       '<td>'.$row['PlasMaterials'].'</td>'.
                       '<td><img src="'.$row['PlasPicPicture'].'"></td>';
        }
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = '';
            if (empty($_POST["keyword"])) {         
                    $serh = "SELECT * FROM PlasticBag;";
                    $serhtest = sqlsrv_query($conn,$serh);
                    while ($row = sqlsrv_fetch_array( $serhtest, SQLSRV_FETCH_ASSOC)){
                        $search .= '<tr>'.'<td>'.$row['PlasNumber'].'</td>'.
                                   '<td>'.$row['PlasName'].'</td>'.
                                   '<td>'.$row['PlasUseful'].'</td>'.
                                   '<td>'.$row['PlasSize'].'</td>'.
                                   '<td>'.$row['PlasMaterials'].'</td>'.
                                   '<td><img src="'.$row['PlasPicPicture'].'"></td>';
                    }
                    
                
            }else{
                $coun = true;
                $keyword = $_POST["keyword"];
                $serh = "select * from PlasticBag where (PlasName LIKE '%".$keyword.
                        "%' or PlasUseful LIKE '%".$keyword.
                        "%' or PlasSize LIKE '%".$keyword.
                        "%' or PlasMaterials LIKE '%".$keyword."%') ;";
                $serhtest = sqlsrv_query($conn,$serh);
                while ($row = sqlsrv_fetch_array( $serhtest, SQLSRV_FETCH_ASSOC)){
                    $coun = false;
                    $search .= '<tr>'.'<td>'.$row['PlasNumber'].'</td>'.
                               '<td>'.$row['PlasName'].'</td>'.
                               '<td>'.$row['PlasUseful'].'</td>'.
                               '<td>'.$row['PlasSize'].'</td>'.
                               '<td>'.$row['PlasMaterials'].'</td>'.
                               '<td><img src="'.$row['PlasPicPicture'].'"></td>';
                }
                if ($coun){
                    $search = '<h2>查無資料</h2>';
                }
                    
                
                
            }
        }

    ?>