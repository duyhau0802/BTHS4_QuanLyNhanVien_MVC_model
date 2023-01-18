<?php 
include_once ("../Model/Model.php");
include_once('../Model/Entity.php');
class Controller {
    public function invoke(){
        if (isset($_GET['xemNV'])){
            $modelStaff = new Model_Staff();
            $staffList = $modelStaff->xemNV();
            include_once("../View/xemNV.php");
        }
        else if(isset($_GET['xemNVPB']))
        {
            $modelStaff = new Model_Staff();
            $staffList = $modelStaff->xemNV_PB($_GET['xemNVPB']);
            include_once("../View/xemNV_PB.php");
        }
        else if(isset($_GET['xemPB']))
        {
            $modelPB = new Model_Phongban();
            $pbList = $modelPB->xemPB();
            include_once("../View/xemPB.php");
        }
        else if(isset($_GET['xoaNV']))
        {
            if (isset($_GET['idnv']))
                {
                    $modelStaff = new Model_Staff();
                    $modelStaff->xoaNV($_GET['idnv']);
                    $staffList = $modelStaff->xemNV();
                    include_once("../View/xoaNV.php");
                }
                else
                {
                    $modelStaff = new Model_Staff();
                    $staffList = $modelStaff->xemNV();
                    include_once("../View/xoaNV.php");
                }
        }
        
        else if(isset($_GET['addNV']))
        {
            if(isset($_GET['themNV']))
                {   
                    $IDNV = $_REQUEST['txtIDNV'];
                    $name = $_REQUEST['txtHoTen'];
                    $IDPB = $_REQUEST['txtIDPB'];
                    $DiaChi = $_REQUEST['txtDiaChi'];
                    $modelStaff = new Model_Staff();
                    $modelStaff->themNV($IDNV,$name,$IDPB,$DiaChi);
                    $staffList = $modelStaff->xemNV();
                    include_once("../View/xemNV.php");
                }
            else {
                include_once("../View/themNV.php");
            }
        }
        else if(isset($_GET['capnhatNV']))
        {
            if (isset($_GET['idnv']))
            {
                $modelPB = new Model_Phongban();
                $pbList = $modelPB->xemPB();
                include_once("../View/formcapnhatNV.php");
            }
            else if (isset($_GET['capnhat']))
            {
                $modelStaff = new Model_Staff();
                $modelStaff->capnhatNV($_REQUEST['idnv'], $_REQUEST['hoten'], $_REQUEST['idpb'], $_REQUEST['diachi']);
                $staffList = $modelStaff->xemNV();
                include_once("../View/capnhatNV.php");
            }
            else
            {
                $modelStaff = new Model_Staff();
                $staffList = $modelStaff->xemNV();
                include_once("../View/capnhatNV.php");
            }
        }
        else if (isset($_GET['tkNV']))
            {
                if (isset($_GET['timkiem']))
                {
                    $modelStaff = new Model_Staff();
                    $timkiem = $_REQUEST['tk'];
                    $text = $_REQUEST['t1'];
                    if ($timkiem == "idnv")
                        $staffList = $modelStaff->timkiemNV(1, $text);
                    else if ($timkiem == "hoten")
                        $staffList = $modelStaff->timkiemNV(2, $text);
                    else
                        $staffList = $modelStaff->timkiemNV(3, $text);
                    include_once("../View/xemNV_TimKiem.php");
                }
                else
                {
                    include_once("../View/timkiemNV.php"); 
                }
            }
        else {
            echo "Không thể thực hiện code";
        }
            
    }

};
$C = new Controller();
$C->invoke();
?>