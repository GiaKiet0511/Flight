<?php
namespace App\Models;

use App\Library\Database;

class Staff extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('staff'); //ntgk_staff
    }
    // Lấy danh sách Staff
    public function staff_list($args = array())
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
    public function staff_row($MaNhanVien)
    {
        $sql = "SELECT * FROM $this->table WHERE MaNhanVien='$MaNhanVien'";
        return $this->QueryOne($sql);
    }
    // Insert 1 mẫu tin
    public function staff_insert($data)
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
    public function staff_update($data, $MaNhanVien)
    {
        $strset = '';
        foreach ($data as $f => $v) {
            $strset .= $f . "='$v', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET  $strset WHERE MaNhanVien='$MaNhanVien'";
        $this->SetQuery($sql);
    }
    // Delete mẫu tin
    public function staff_delete($MaNhanVien)
    {
        $sql = "DELETE FROM $this->table WHERE MaNhanVien='$MaNhanVien'";
        $this->SetQuery($sql);
    }
}