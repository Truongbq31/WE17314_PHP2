<?php
namespace App\Controllers;
use App\Models\Products;

class ProductsController extends BaseController {
    public $product;
    public function __construct()
    {
        $this->product = new Products();
    }
    public function index(){
        $products = $this->product->getProduct();
        //Đổ dữ liệu sang Blade
        return $this->render("products.index", compact("products"));
    }
    public function delete(){
        $id = $_GET['id_prd'];
        $result = $this->product->deleteProduct($id);
        if ($result){
            $_SESSION['delete'] = "Xóa thành công";
            header("location: product?done");
        }
    }

    public function addProduct(){
//        //test route
//        echo 123;
        $this->render('products.add');
    }
    public function postProduct(){
       if(isset($_POST['btn_add'])){
           //Hủy section mỗi khi chạy
//           deleteSection();

           //Khởi tạo 1 mảng lỗi = rỗng
           $error = [];
           //Nếu bỏ trống tên sp
           if(empty($_POST['ten_sp'])){
               $error[] = "Bạn không được để trống tên sản phầm!";
           }
           if (empty($_POST['gia'])){
               $error[] = "Bạn không được để trống đơn giá!";
           }

           if (count($error) > 0){
//               $_SESSION['errors'] = $error;
//               //Nhảy về trang add
//               header("location: add-prd");
//               die();
                rediriect("errors", $error, "add-prd");
           }else{
                $id = null;
                $ten_san_pham = $_POST['ten_sp'];
                $gia = $_POST['gia'];
                $result = $this->product->addProduct($id,$ten_san_pham,$gia);

                if ($result){
////                    $_SESSION['success'] = "Thêm thành công";
//                    header("location: add-prd?done");
//                    die();
                    rediriect("success", "Thêm sản phẩm thành công", "add-prd");
                }
           }
       }
    }

    public function editProduct($id){
        $product_detail = $this->product->getDetailProducts($id);
        return $this->render('products.edit', compact('product_detail'));
    }
    public function postEditProduct($id){
        if(isset($_POST['btn_save'])){
            $ten_sp = $_POST['ten_sp'];
            $gia = $_POST['gia'];
            $result = $this->product->editProduct($id, $ten_sp, $gia);
            if ($result){
                rediriect("success", "Sửa thành công", "product");
            }
        }
    }
}
