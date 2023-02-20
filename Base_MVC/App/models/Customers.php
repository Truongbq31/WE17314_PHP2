<?php
namespace App\Models;
class Customers extends BaseModel{
    protected $table = 'customer';
    function getCustomer(){
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
