<?php
namespace App\Library;

class Route
{
    function __construct($page = 'site')
    {
        if ($page == 'site') {
            $this->url_site(); //Gọi hàm trong lớp
        } else {
            $this->url_admin();
        }
    }
    //Hàm truyền biến url của trang người dùng
    function url_site()
    {
        $pathView = "./views/frontend/";
        //TH1: không có option trong url = index.php
        if (!isset($_REQUEST["option"])) {
            $pathView .= 'home.php';
        } else {
            $pathView .= $_REQUEST["option"];
            // TH2: có tham số option trong url= index.php?option=.....
            // TH2-1 có option và có id
            if (isset($_REQUEST["id"])) {
                $pathView .= '-detail.php';
            } else {
                // TH2-2 có option và có cat
                if (isset($_REQUEST["cat"])) {
                    $pathView .= '-flight.php';
                } else {
                    // TH2-3 có option và không có cat, id
                    $pathView .= '.php';
                }
            }
        }
        // Kiểm tra pathView có tồn tại không
        // if(file_exists($pathView)){
        require_once($pathView);
        // }
        // else{
        //     die('Lỗi trang');
        // }
    }
    // Hàm tùy biến trang quản lý
    function url_admin()
    {
        $pathView = "../views/backend/";
        //TH1: url không chứa option
        if (!isset($_REQUEST["option"])) {
            $pathView .= 'dashboard/index.php'; //dashboard -> thư mục
        } else {
            $pathView .= $_REQUEST["option"] . '/';
            //TH2: url có chứa option
            //index.php?option=product&cat=insert -->Thêm
            //index.php?option=product&cat=update -->Cập nhật
            //index.php?option=product&cat=delete -->Xóa
            //index.php?option=product&cat=deltrash -->Xóa vào thùng rác
            //index.php?option=product&cat=retrash -->Khôi phục mẫu tin
            //index.php?option=product&cat=trash -->Quản lý mẫu tin rác
            //index.php?option=product&cat=status -->trạng thái

            if (isset($_REQUEST["cat"])) {
                $pathView .= $_REQUEST["cat"] . '.php';
            } else {
                //TH3: url có chứa option và chứa cat
                $pathView .= 'index.php';
            }
        }
        // Kiểm tra pathView có tồn tại không
        // if(file_exists($pathView)){
        require_once($pathView);
        // }
        // else{
        //     die('Lỗi trang');
        // }
    }
}