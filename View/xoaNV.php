<html>
    <head>
        <meta charset="UTF-8"/>
    </head> 
    <body>
        <h2 align="center"> Danh sách nhân viên </h2>
        <?php
            echo '<table border="1" width="100%"';
            echo '<tr> <th>IDNV</th> <th>Họ tên</th> <th>IDPB</th> <th>Địa chỉ</th> <th>Xóa nhân viên</th> </tr>';
            for ($i=0; $i<sizeof($staffList ); $i++)
            {
            echo '<tr>
            <td>'.$staffList[$i]->IDNV."</td>
            <td>".$staffList[$i]->name.'</td>
            <td>'.$staffList[$i]->IDPB.'</td>
            <td>'.$staffList[$i]->DiaChi.'</td>
            <td align="center"><a  href="../Controller/Controller.php?xoaNV=1&idnv='.$staffList[$i]->IDNV.'"> Xóa </a></td>
            </tr>';
            }
            echo '</table>';
        ?>
            <br>
    <p><a href="../index.php">Home page</a></p>
    </body>
</html>