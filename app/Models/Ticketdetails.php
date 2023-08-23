<?php
namespace App\Models;

use App\Library\Database;

class Ticketdetails extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('ticketdetails'); //ntgk_ticketdetails
    }
    // Lấy danh sách Ticketdetails
    public function ticketdetails_list($args = array())
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
    public function ticketdetails_row($MaCTVe)
    {
        $sql = "SELECT * FROM $this->table WHERE MaCTVe='$MaCTVe'";
        return $this->QueryOne($sql);
    }
    // Insert 1 mẫu tin
    public function ticketdetails_insert($data)
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
    public function ticketdetails_update($data, $MaCTVe)
    {
        $strset = '';
        foreach ($data as $f => $v) {
            $strset .= $f . "='$v', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET  $strset WHERE MaCTVe='$MaCTVe'";
        $this->SetQuery($sql);
    }
    // Delete mẫu tin
    public function ticketdetails_delete($MaCTVe)
    {
        $sql = "DELETE FROM $this->table WHERE MaCTVe='$MaCTVe'";
        $this->SetQuery($sql);
    }
}