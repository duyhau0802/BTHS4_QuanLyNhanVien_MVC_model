<?php
include_once("Entity.php");
class Model_Staff {
    public function __construct()
    {
        
    }
    public function xemNV() 
    {
        $link = mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link,"dulieu");
        $sql = "SELECT * FROM nhanvien";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while($row = mysqli_fetch_array($rs)){
            $IDNV = $row['IDNV'];
            $name = $row['Hoten'];
            $IDPB = $row['IDPB'];
            $diachi = $row['DiaChi'];
            $staffs[$i++] = new Entity_Staff($IDNV, $name, $IDPB, $diachi);
        }
        return $staffs;
    }
    public function xemNV_PB($idpb)
    {
        $link = mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link,"dulieu");
        $sql = "SELECT * FROM nhanvien WHERE IDPB='$idpb'";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while($row = mysqli_fetch_array($rs)){
            $IDNV = $row['IDNV'];
            $name = $row['Hoten'];
            $IDPB = $row['IDPB'];
            $diachi = $row['DiaChi'];
            $staffs[$i++] = new Entity_Staff($IDNV, $name, $IDPB, $diachi);
        }
        return $staffs;
    }
    public function timkiemNV($timkiem, $text)
        {   
            $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
            mysqli_select_db($link, "dulieu");
            if ($timkiem == 1)
            {
                $sql = "SELECT * FROM nhanvien WHERE IDNV = '$text'";
                $rs = mysqli_query($link, $sql);
            }
            else if ($timkiem == 2)
            {
                $sql = "SELECT * FROM nhanvien WHERE Hoten LIKE '%".$text."%'";
                $rs = mysqli_query($link, $sql);
            }
            else
            {
                $sql = "SELECT * FROM nhanvien WHERE Diachi LIKE '%".$text."%'";
                $rs = mysqli_query($link, $sql);
            }
            $dsnv[0] = new Entity_Staff("none", "none", "none", "none");
            $i = 1;
            while ($row = mysqli_fetch_array($rs))
            {
                $idnv = $row['IDNV'];
                $hoten = $row['Hoten'];
                $idpb = $row['IDPB'];
                $diachi = $row['DiaChi'];
                $dsnv[$i++] = new Entity_Staff($idnv, $hoten, $idpb, $diachi);
            }
            return $dsnv;
        }
    public function themNV($IDNV, $tennv, $IDPB, $DiaChi)
    {
        $link = mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link,"dulieu");
        $sql = "INSERT INTO nhanvien(IDNV,Hoten,IDPB,DiaChi) VALUES ('$IDNV','$tennv', '$IDPB', '$DiaChi' )";
        $rs = mysqli_query($link, $sql);
    }
    
    public function capnhatNV($idnv, $hoten, $idpb, $diachi)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "UPDATE nhanvien SET Hoten='$hoten', IDPB='$idpb', DiaChi='$diachi' WHERE IDNV='$idnv'";
        $rs = mysqli_query($link, $sql);
    }
    public function xoaNV($idnv)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        $sql = "DELETE FROM nhanvien WHERE IDNV= '$idnv'";
        $rs = mysqli_query($link, $sql);
    }
    public function searchStaff($timkiem, $text)
    {   
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "dulieu");
        if ($timkiem == 1)
        {
            $sql = "SELECT * FROM nhanvien WHERE IDNV = '$text'";
            $rs = mysqli_query($link, $sql);
        }
        else if ($timkiem == 2)
        {
            $sql = "SELECT * FROM nhanvien WHERE Hoten LIKE '%".$text."%'";
            $rs = mysqli_query($link, $sql);
        }
        else
        {
            $sql = "SELECT * FROM nhanvien WHERE DiaChi LIKE '%".$text."%'";
            $rs = mysqli_query($link, $sql);
        }
        $dsnv[0] = new Entity_Staff("none", "none", "none", "none");
        $i = 1;
        while ($row = mysqli_fetch_array($rs))
        {
            $idnv = $row['IDNV'];
            $hoten = $row['Hoten'];
            $idpb = $row['IDPB'];
            $diachi = $row['DiaChi'];
            $dsnv[$i++] = new Entity_Staff($idnv, $hoten, $idpb, $diachi);
        }
        return $dsnv;
    }
    
}
class Model_Phongban{
    public function __construct__() {}

    public function xemPB()
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi");
        mysqli_select_db($link, "dulieu");
        $sql = "select * from phongban";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($rs))
        {
            $idpb= $row['IDPB'];
            $tenpb = $row['tenPB'];
            $mota = $row['MoTa'];
            $dspb[$i++] = new Entity_Phongban($idpb, $tenpb, $mota);
        }
        return $dspb;
    }
}
?>