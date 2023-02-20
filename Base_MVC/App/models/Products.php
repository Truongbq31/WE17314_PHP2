<?php
namespace App\Models;
class Products extends BaseModel {
    protected $table = "product";
    //Xây dựng function lấy danh sách sản phẩm
    public function getProduct(){
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function deleteProduct($id){
        $sql = "delete from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function addProduct($id, $ten_san_pham, $gia){
        $sql = "insert into $this->table values(?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $ten_san_pham, $gia]);
    }

    //Lấy chi tiết sản phầm
    public function getDetailProducts($id){
        $sql = "select * from $this->table where id=?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    //Xây dựng hàm update sp
    public function editProduct($id, $ten_sp, $gia){
        $sql = "update $this->table set ten_san_pham = ?, gia=? where id=?";
        $this->setQuery($sql);
        return $this->execute([$ten_sp, $gia, $id]);
    }

}
