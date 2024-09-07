<?php

namespace App\Services\Product;

use LaravelEasyRepository\BaseService;

interface ProductService extends BaseService{

    public function table();

    public function export_csv();

    public function read_file($filename);
}
