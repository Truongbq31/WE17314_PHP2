<?php
namespace App\Controllers;
use App\Models\Customers;

class CustomersController extends BaseController{
    public $customer;
    public function __construct()
    {
        $this->customer = new Customers();
    }
    public function index(){
        $customers = $this->customer->getCustomer();
        return $this->render("customers.index", compact("customers"));
    }
}
