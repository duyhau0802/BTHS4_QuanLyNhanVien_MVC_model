<html>
    <head>
        <meta charset="UTF-8"/>
    </head> 
    <body>
        <h2 align="center"> Cập nhật sinh viên </h2>
        <?php
            echo '<table border="1" width="100%"';
            echo '<tr> <th>IDNV</th> <th>Họ tên</th> <th>IDPB</th> <th>Địa chỉ</th> <th> Cập nhật </th> </tr>';
            for ($i=0; $i<sizeof($staffList); $i++)
            {
                echo '<tr align="center"> <td>'.$staffList[$i]->IDNV.'</td>'.
                           '<td>'.$staffList[$i]->name.'</td>'.
                           '<td>'.$staffList[$i]->IDPB.'</td>'.
                           '<td>'.$staffList[$i]->DiaChi.'</td>'.
                           '<td><a href="../Controller/Controller.php?capnhatNV=1&idnv='.$staffList[$i]->IDNV.
                           '&hoten='.$staffList[$i]->name.
                           '&idpbb='.$staffList[$i]->IDPB.
                           '&diachi='.$staffList[$i]->DiaChi.
                           '"> xxx </a></td>'.
                    '</tr>';
            }
            echo '</table>';
        ?>
        <br>
        <p><a href="../index.php"> Home page </a></p>
    </body>
</html>