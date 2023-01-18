<html>
    <head>
        <meta charset="UTF-8"/>
    </head> 
    <body>
        <h2 align="center"> Danh sách nhân viên: </h2>
        <?php
            if (sizeof($staffList) == 1)
            {
                echo "Ko co ket qua";
            }
            else
            {
                echo '<table border="1" width="100%"';
                echo '<caption> Dữ liệu bảng nhân viên <caption>';
                echo '<tr> <th>IDNV</th> <th>Họ tên</th> <th>IDPB</th> <th>Địa chỉ</th> </tr>';
                for ($i=1; $i<sizeof($staffList); $i++)
                {
                    echo '<tr align="center"> <td>'.$staffList[$i]->IDNV.'</td>'.
                           '<td>'.$staffList[$i]->name.'</td>'.
                           '<td>'.$staffList[$i]->IDPB.'</td>'.
                           '<td>'.$staffList[$i]->DiaChi.'</td>'.
                    '</tr>';
                }
                echo '</table>';
            }
        ?>
        <br>
        <p><a href="../index.php"> Home page </a></p>
        <p><a href="javascript:history.back()"> Back </a></p>
    </body>
</html>