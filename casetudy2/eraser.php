<?php
include_once "product.php";
use Product\Product;
$eraserblack                  = new Product;
$eraserblack->name            = "cục tẩy đen";
$eraserblack->image           = "https://hanggiadungviet.com/thumb/520x440/1/upload/product/tay-but-chi-deli-304513331.jpg";
$eraserblack->price           = 20.000;
$eraserblack->note            = "combo 6 cục Gôm- Tẩy Đen E-011 |";   
$eraserColor                  = new Product;
$eraserColor->name            =  " cục tẩy nhiều màu";
$eraserColor->note            =  "Bộ 4 Cục Gôm Tẩy Mini Nhiều Màu Cho";
$eraserColor->image           =  "https://hanggiadungviet.com/thumb/520x440/1/upload/product/tay-but-chi-deli-304513331.jpg";
$eraserColor->price           =  25000;
$eraser_hiPolyMer             = new Product;   
$eraser_hiPolyMer->name       = "cục tẩy hiPolyMer";   
$eraser_hiPolyMer->image      = "https://lh3.googleusercontent.com/proxy/svKkD7vA098-tIixsVM5-9mw03kuyih00VuQoydUhCxuX5yFZwZJJGfStADvAcviDUB_jyTa5ER9tBZcogjeUBFCykIQYNZBRHDA1l8lUZ9Rcw-BAHaSK3QJvCtmJqGSug7pz6q-4y6UKUf-8wf1IBk00mDTFmPU4rNgGMPjaIQagdc";   
$eraser_hiPolyMer->price      = 10000;   
$eraser_hiPolyMer->note       = "cục gôm hiPolyMer siêu chất";
$eraser_Hinh_vien             = new Product;   
$eraser_Hinh_vien->name       = "cục tẩy hình viên";   
$eraser_Hinh_vien->image      = 'https://vn-live-05.slatic.net/p/5deaccde2bf466d0483d561cdf6820bd.png_720x720q80.jpg_.webp' ;
$eraser_Hinh_vien->note       = "[COMBO 2 Chiếc] Cục Tẩy Hình Viên Kẹo <br> Chữ Nhật Độc Đáo ";   
$eraser_Hinh_vien->price      = 13500;
$eraser_PinkBeaty             = new Product; 
$eraser_PinkBeaty->name       = "cục tẩy sạch đẹp thời trang"; 
$eraser_PinkBeaty->image      = "https://cf.shopee.vn/file/d250cc69f6e4a5c1257abf8d66ee521b_tn"; 
$eraser_PinkBeaty->price      = 26000; 
$eraser_PinkBeaty->note       = "Cục tẩy gôm học sinh dễ thương <br> _ tẩy siêu sạch"; 
$erasers                      = [];
$erasers[]                    = $eraser_PinkBeaty ;
$erasers[]                    = $eraser_Hinh_vien ;
$erasers[]                    = $eraser_hiPolyMer ;
$erasers[]                    = $eraserColor ;
$erasers[]                    = $eraserblack ;
echo "<pre>";
print_r($erasers);
echo "</pre>";

