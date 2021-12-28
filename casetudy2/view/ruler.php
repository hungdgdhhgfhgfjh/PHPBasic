<?php
include_once "product.php";
use Product\Product;
$ruler_20cm                 =    new Product;
$ruler_20cm->name           = "thước thiên long" ;
$ruler_20cm->image          = "https://bizweb.dktcdn.net/100/334/874/products/3385.jpg?v=1591005651020" ;
$ruler_20cm->price          = 10000 ;
$ruler_20cm->note           = "thước kẻ 20 cm" ;
$ruler_50cm                 = new Product;
$ruler_50cm->name           = "thước sắt";
$ruler_50cm->image          = "https://officexinh.com/image/cache/data/image/data/Thuoc-compa/thuoc-sat-50cm-500x500_0.jpg";
$ruler_50cm->price          = 35000;
$ruler_50cm->note           = "thước sắt 50 cm";
$ruler_FleXi_ble            = new Product;
$ruler_FleXi_ble->name      = "Thước dẻo";
$ruler_FleXi_ble->image     = "https://salt.tikicdn.com/cache/400x400/media/catalog/product/4/4/440p-6208.jpg";
$ruler_FleXi_ble->price     = 12000;
$ruler_FleXi_ble->note      = "Thước Dẻo 20cm Deli 6208";
$ruler_keWen                = new Product;
$ruler_keWen->name          = "Thươc kẻ kewen";
$ruler_keWen->image         = "https://product.hstatic.net/1000362139/product/thuoc_20cm_tq_86b51bffc0e24d858736e3ca03166279.jpg";
$ruler_keWen->price         = 3000;
$ruler_keWen->note          = "Thước kẻ kewen 20cm";
$ruler_kep_co               = new Product;
$ruler_kep_co->name         = "Thước Kẹp cơ";
$ruler_kep_co->image        = "https://dungcusangtao.com/upload/sanpham/large/thuoc-kep-co-1595915173-db4d3f.png";
$ruler_kep_co->price        = 30000;
$ruler_kep_co->note         = "Thước kẹp cơ Phụ kiện kết nối đa năng";
$rulers                     = [];
$rulers[]                   = $ruler_kep_co;
$rulers[]                   = $ruler_keWen;
$rulers[]                   = $ruler_FleXi_ble;
$rulers[]                   = $ruler_50cm;
$rulers[]                   = $ruler_20cm;
echo "<pre>";
print_r($rulers );
echo "</pre>";






