<html>
    <head>
    </head>
    <body>
        <h3 align = "center"> Tìm kiếm nhân viên </h3>
        <form align = "center" action="../Controller/Controller.php?tkNV=1&timkiem=1" method="post"> 
            <input name="tk" type="radio" value="idnv" checked> IDNV
            <input name="tk" type="radio" value="hoten"> Họ tên
            <input name="tk" type="radio" value="diachi"> Địa chỉ <br>
            <input type="text" name="t1" value=""> <br>
            <input type="submit" name="sub" value="Submit">
            <input type="reset" name="rs" value="Reset"> 
        </form>
    </body>
</html>