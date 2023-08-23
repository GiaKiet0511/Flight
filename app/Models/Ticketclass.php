<?php
namespace App\Models;

use App\Library\Database;

class Ticketclass extends Database
{
    private $table = 1;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('ticketclass'); //ntgk_ticketclass
    }
    // Lấy danh sách Ticketclass
    public function ticketclass_list($args = array())
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
    public function ticketclass_row($MaHangVe)
    {
        $sql = "SELECT * FROM $this->table WHERE MaHangVe='$MaHangVe'";
        return $this->QueryOne($sql);
    }
    // Insert 1 mẫu tin
    public function ticketclass_insert($data)
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
    public function ticketclass_update($data, $MaHangVe)
    {
        $strset = '';
        foreach ($data as $f => $v) {
            $strset .= $f . "='$v', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET  $strset WHERE MaHangVe='$MaHangVe'";
        $this->SetQuery($sql);
    }
    // Delete mẫu tin
    public function ticketclass_delete($MaHangVe)
    {
        $sql = "DELETE FROM $this->table WHERE MaHangVe='$MaHangVe'";
        $this->SetQuery($sql);
    }
}