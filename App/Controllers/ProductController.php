<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'products.index';
        // data view cần biến $name và $price
        $data = [
        ];

        return $this->render($viewName, $data);
    }
    public function getDashboard(){
        $viewName='dashboard.index';
        $data = [
        ];

        return $this->render($viewName,$data);
    }
    public function getCreate(){
        $viewName='products.create_product';
        $data = [
        ];

        return $this->render($viewName,$data);
    }
    public function getDetail(){
        $viewName='products.product_detail';
        $data = [
        ];

        return $this->render($viewName,$data);
    }
}