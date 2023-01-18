<?php 
class Entity_Staff
    {
        public $IDNV;
        public $name;
        public $IDPB;
        public $DiaChi;
        public function __construct($_IDNV, $_name, $_IDPB, $_DiaChi)
        {
            $this->IDNV = $_IDNV;
            $this->name = $_name;
            $this->IDPB = $_IDPB;
            $this->DiaChi = $_DiaChi;
        }
    }
class Entity_PhongBan
    {
        public $idpb;
        public $tenpb;
        public $mota;

        public function __construct($_idpb, $_tenpb, $_mota)
        {
            $this->idpb = $_idpb;
            $this->tenpb = $_tenpb;
            $this->mota = $_mota;
        }
    }

?>