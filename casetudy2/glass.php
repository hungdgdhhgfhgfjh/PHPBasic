<?php
include_once "product.php";
use Product\Product;
$glass_VIen_Color               = new  Product;     
$glass_VIen_Color->name         = "Ly viền màu";     
$glass_VIen_Color->image        = "https://royalceramic.com.vn/wp-content/uploads/2019/08/ly-su-bat-trang-24.jpg"; 
$glass_VIen_Color->price        = 46.000;     
$glass_VIen_Color->note         = "Ly sứ Quai chữ C Màu Bát Tràng 0.36L"; 
$glass_cup                      = new Product;   
$glass_cup->name                = "ly thủy tinh";   
$glass_cup->image               = "http://thuytinhcamdat.com/wp-content/uploads/2014/06/Ly-thuy-tinh-quai-tron-PCD10007.png";  
$glass_cup->price               = 200.000;   
$glass_cup->note                = "Ly Thủy Tinh Có Quai 375ml – PCD10007";   
$glass_cup_CaoCap               = new Product;               
$glass_cup_CaoCap->name         = "ly thủy tinh cao cấp";               
$glass_cup_CaoCap->image        = "https://cdn.tgdd.vn/Products/Images/5225/112101/bhx/ly-thuy-tinh-luminarc-britannia-570ml-202104260029533206_300x300.jpg";               
$glass_cup_CaoCap->price        = 360.000;               
$glass_cup_CaoCap->note         = "Ly thủy tinh cao cấp giá rẽ chất lượng";
$glass_OCean                    = new Product;               
$glass_OCean->name              = "Ly thủy tinh Ocean";               
$glass_OCean->image             = "https://thuytinhgiare.com/wp-content/uploads/2020/03/Ly-poco-grande-200k.jpg";
$glass_OCean->price             = 300.000;               
$glass_OCean->note              = "Thủy tinh giá rẻ <br> Ly thủy tinh Ocean POCO GRANDE-350ML";     
$glass_Madison                  = new Product;          
$glass_Madison->name            = "ly Madison";          
$glass_Madison->image           = "https://storage.googleapis.com/cdn.nhanh.vn/store/9106/ps/20160727/2725201662540_Bo_6_Ly_Madison_Water_Goblet_15G15__425_ml__800x800_thumb_600x600.jpg";          
$glass_Madison->price           = 360.000;          
$glass_Madison->note            = "Bộ 6 Ly Madison Water 1015G15 - 425ml";   
$glasses                        = [];       
$glasses[]                      = $glass_Madison ;       
$glasses[]                      = $glass_OCean ;       
$glasses[]                      = $glass_cup_CaoCap  ;       
$glasses[]                      = $glass_cup  ;       
$glasses[]                      = $glass_VIen_Color  ;
echo "<pre>";
print_r($glasses);       
echo "</pre>";       



