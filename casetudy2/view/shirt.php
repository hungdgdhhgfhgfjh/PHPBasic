<?php
include_once "product.php";
use Product\Product;
$shirt_So_mi                = new Product;
$shirt_So_mi->name          = "Áo sơ mi tay ngắn";
$shirt_So_mi->image         = "https://media.canifa.com/catalog/product/cache_generated/500x/8th20w008-sa468-3-thumb-.jpg";
$shirt_So_mi->price         = "105.000đ";
$shirt_So_mi->note          = "ÁO SƠ MI NAM DÀI TAY 100% COTTON";
$shirt_Caro                 = new Product;
$shirt_Caro->name           = "Replay áo sơ mi";
$shirt_Caro->image          = "https://cdn.hoang-phuc.com/media/catalog/product/cache/911a4dad289f521f5a511212882e4276/m/4/m4012p_000_52144_010_1.jpg";
$shirt_Caro->price          = "130.000đ";
$shirt_Caro->note           = "Replay áo sơ mi tay dài nam <br> M4012P-52144_FW19 010";
$shirt_handLong             = new Product;
$shirt_handLong->name       = "ÁO SƠ MI TAY DÀI";
$shirt_handLong->image      = "https://aristino.com/Data/upload/images/Product-outlet/so-mi-dai-tay/ALS17BA40/ao-si-mi-aristino-ALS17BA40.png";
$shirt_handLong->price      = "150.000đ";
$shirt_handLong->note       = "ÁO SƠ MI TAY DÀI XANH DA TRỜI<br> ARISTINO ALS17-BA40";
$shirt_OXFORD               = new Product;
$shirt_OXFORD->name         = "áo OXFORD";
$shirt_OXFORD->price        = "300.000đ";
$shirt_OXFORD->image        = "https://dongphucunicorn.com/wp-content/uploads/2019/10/ao-so-mi-trang-tay-ngan-oxford.jpg";
$shirt_OXFORD->note         = "Áo sơ mi tay ngắn Oxford";
$shirt_White                = new Product;
$shirt_White->name          = " Áo Sơ Mi Trắng";
$shirt_White->image         = "https://cdn3.dhht.vn/wp-content/uploads/2017/11/phan-loai-ao-so-mi-trang-cong-so-nam-de-thay-su-da-dang-cover.jpg";
$shirt_White->note          = "Phân Loại Áo Sơ Mi Trắng Công Sở <br> Nam Đa Dạng Chi Tiết Nhất";
$shirt_White->price         = "400.000đ";
$shirts                     = [];
$shirts[]                   = $shirt_White;
$shirts[]                   = $shirt_OXFORD;
$shirts[]                   = $shirt_Caro;
$shirts[]                   = $shirt_handLong;
$shirts[]                   = $shirt_So_mi;
echo "<pre>";
print_r($shirts);
echo "</pre>";




