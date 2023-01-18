<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>
<form name="form_themnv" action="../Controller/Controller.php?addNV='1'&themNV=1" method="post">
        <table width="100%" border="0" >
            <tr>
                <td>Mã nhân viên</td>
                <td>
                    <input type="text" size="20" name="txtIDNV" >
                </td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td>
                    <input type="text" size="20"  name="txtHoTen" >
                </td>
            </tr>
            <tr>
                <td>Mã phòng ban</td>
                <td>
                    <input type="text" size="20" name="txtIDPB" >
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <input type="text" size="20" name="txtDiaChi" >
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="OK">
                    <input type="reset" value="Reset">
                    <a>
                        <input type="button" value="Xem Nhân Viên">    
                    </a>
                </td>
            </tr>
            
        </table>
    </form>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>