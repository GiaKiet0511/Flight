<?php
namespace App\Models;

use App\Library\Database;

class Flightroute extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('flightroute'); //ntgk_flightroute
    }
    // Lấy danh sách Flightroute
    public function flightroute_list($args = array())
    {
        $strwhere = '';
        if (array_key_exists('status', $args)) {
            if ($args['status'] == 'index') {
                $strwhere .= "status!='0'";
            } else {
                $strwhere .= "status='" . $args['status'] . "'";
            }

        }
        // kiểm tra biến strwhere
        if ($strwhere != '') {
            $strwhere = "WHERE " . $strwhere;
        }
        $sql = "SELECT*FROM $this->table $strwhere";
        //echo $sql;
        return $this->QueryAll($sql);
    }
    // Lấy ra một mẫu tin
    public function flightroute_row($MaTuyenBay)
    {
        $sql = "SELECT * FROM $this->table WHERE MaTuyenBay='$MaTuyenBay'";
        return $this->QueryOne($sql);
    }
    // Insert 1 mẫu tin
    public function flightroute_insert($data)
    {
        $strf = '';
        $strv = '';
        foreach ($data as $f => $v) {
            $strf .= $f . ", ";
            $strv .= "'$v', ";
        }
        $strf = rtrim(rtrim($strf), ',');
        $strv = rtrim(rtrim($strv), ',');


        $sql = "INSERT INTO $this->table($strf) VALUES ($strv)";
        $this->SetQuery($sql);
    }
    // Update mẫu tin
    public function flightroute_update($data, $MaTuyenBay)
    {
        $strset = '';
        foreach ($data as $f => $v) {
            $strset .= $f . "='$v', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET  $strset WHERE MaTuyenBay='$MaTuyenBay'";
        $this->SetQuery($sql);
    }
    // Delete mẫu tin
    public function flightroute_delete($MaTuyenBay)
    {
        $sql = "DELETE FROM $this->table WHERE MaTuyenBay='$MaTuyenBay'";
        $this->SetQuery($sql);
    }
}