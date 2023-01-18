<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
        <h2 align="center"> Danh sách nhân viên theo phòng ban </h2>
        <?php
            echo '<table border="1" width="100%"';
            echo '<tr> <th>IDNV</th> <th>Họ tên</th> <th>IDPB</th> <th>Địa chỉ</th> </tr>';
            for ($i=0; $i<sizeof($staffList); $i++)
            {
                echo '<tr align="center"> <td>'.$staffList[$i]->IDNV.'</td>'.
                           '<td>'.$staffList[$i]->name.'</td>'.
                           '<td>'.$staffList[$i]->IDPB.'</td>'.
                           '<td>'.$staffList[$i]->DiaChi.'</td>'.
                    '</tr>';
            }
            echo '</table>';
        ?>
            <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>