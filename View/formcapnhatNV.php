<html>
    <head>
        <script lang="Javascript">
            function load()
            {
                var idnv = '<?php echo $_GET['idnv'];?>'
                var hoten = '<?php echo $_GET['hoten'];?>'
                var idpb = '<?php echo $_GET['idpbb'];?>'
                var diachi = '<?php echo $_GET['diachi'];?>'

                document.form_capnhatnv.idnv.value = idnv
                document.form_capnhatnv.hoten.value = hoten
                document.form_capnhatnv.idpb.value = idpb
                document.form_capnhatnv.diachi.value = diachi
            }
        </script>
        <meta charset="UTF8">
    </head>
    <body onload="load()">
        <h3 align="center"> Form cập nhật nhân viên </h3>
        <form align="center" name="form_capnhatnv" action="../Controller/C.php?capnhatNV='1'&capnhat=1" method="post">
            IDNV: <input type="text" name="idnv" readonly> <br>
            Họ tên: <input type="text" name="hoten"> <br>
            IDPB: 
                <Select name = "idpb" >
                    <?php
                    for ($i=0; $i<sizeof($pbList); $i++)
                    {
                        echo "<option>".$pbList[$i]->idpb."</option>";
                    }
                    ?>
                </Select> <br>
            Địa chỉ: <input type="text" name="diachi"> <br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
        </form>
        <p><a href="../index.php"> Home Page </a></p>
    </body>
</html>