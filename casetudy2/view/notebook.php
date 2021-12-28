<?php
include_once "product.php";
use Product\Product;
$note_Ami                = new Product;
$note_Ami->name          = "vở 4 ô ly Ami";
$note_Ami->image         = "https://bizweb.dktcdn.net/thumb/1024x1024/100/334/874/products/0371-5.jpg?v=1587527683363";
$note_Ami->price         = 12.000;
$note_Ami->note          = "Vở 4 Ô Ly 96 Trang Hồng Hà Class Ami 0371 " ;
$note_Hapus              = new Product;
$note_Hapus->name        = "Vở Hapus";
$note_Hapus->image       = "https://salt.tikicdn.com/cache/400x400/ts/product/d2/06/28/bd9022ebb668698d13a8a5262a511367.jpg";
$note_Hapus->note        = "Lốc Vở kẻ ngang Haplus fuit(80->200trang)";
$note_Hapus->price       = 71.000;
$note_pokemon            = new Product;
$note_pokemon->name      = "vở pokemon";
$note_pokemon->image     = "https://salt.tikicdn.com/ts/product/bb/b2/e5/598000060ab68976aad878d42971a8c8.jpg";
$note_pokemon->note      = "Lốc 10 vở Pokemon Go ( 48, 80 trang )";
$note_pokemon->price     = 70.000đ;
$note_Pink_ha            = new Product ;
$note_Pink_ha->name      = "Vở hồng hà" ;
$note_Pink_ha->image     = "http://corpgmax.com.vn/images/product/7119V%E1%BB%9F%20H%E1%BB%93ng%20H%C3%A0%20200tr.jpg" ;
$note_Pink_ha->price     = 200.000;
$note_Pink_ha->note      = "Vở Hồng Hà 200tr";
$note_Cocjk_Tail         = new Product ;
$note_Cocjk_Tail->name   = "Vở CocjkTail ";
$note_Cocjk_Tail->image  = "https://bizweb.dktcdn.net/100/255/723/products/40-2bd8d9f3-d25f-402f-837c-29dfe51f978b.jpg?v=1586918855650 ";
$note_Cocjk_Tail->note   = "Vở kẻ ngang Cocktail Hồng Hà 120T ";
$note_Cocjk_Tail->price  = 10.000 ;
$notebooks               = [];
$notebooks[]             = $note_Cocjk_Tail;
$notebooks[]             = $note_Pink_ha;
$notebooks[]             = $note_pokemon;
$notebooks[]             = $note_Hapus;
$notebooks[]             = $note_Ami;
echo "<pre>";
print_r($notebooks);
echo "</pre>";




