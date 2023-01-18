<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Danh sách phòng ban</h2>
    <?php
        echo '<table border="1" width="100%">';
        echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><TH>Xem nhân viên</TH></TR>';
        for ($i=0 ; $i <sizeof($pbList) ; $i++)
            {
        echo '<TR>
            <TD>'.$pbList[$i]->idpb."</TD>
            <TD>".$pbList[$i]->tenpb.'</TD>
            <TD>'.$pbList[$i]->mota.'</TD>
            <TD align="center"><A HREF="../Controller/Controller.php?xemNVPB='.$pbList[$i]->idpb.'">xxx</A></TD></TR>';
            }
        echo '</table>';
    ?>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>