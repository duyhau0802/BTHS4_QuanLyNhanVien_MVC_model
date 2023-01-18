<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Danh sách nhân viên</h2>
    <?php
        echo '<table border="1" width="100%">';
        echo '<TR><TH>IDNV</TH><TH>Họ và tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH></TR>';
        for ($i=0 ; $i <sizeof($staffList) ; $i++)
            {
        echo '<TR>
            <TD>'.$staffList[$i]->IDNV."</TD>
            <TD>".$staffList[$i]->name.'</TD>
            <TD>'.$staffList[$i]->IDPB.'</TD>
            <TD>'.$staffList[$i]->DiaChi.'</TD></TR>';
            }
        echo '</table>';
    ?>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>