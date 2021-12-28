<?php
include_once "./class/class_product.php";
use product\Product;
        $exeiter_120cc                       = new Product;
        $exeiter_120cc->id                   = 1;
        $exeiter_120cc->name                 = "exeiter_120cc";
        $exeiter_120cc->price                = 1000000;
        $exeiter_120cc->image                = "https://lopxemay.vn/images/2018/08/20180824_cad193c7fcc36c2201786802c2dbfd89_1535096012.jpg";
        $exeiter_120cc->product_type         = "motobike";
        $I_Phone_X                           = new Product;
        $I_Phone_X->id                       = 2;
        $I_Phone_X->name                     = "I Phone X";
        $I_Phone_X->image                    = "https://24hstore.vn/images/products/2020/04/19/large/iphone-x-silver_1587275960_1.jpg";
        $I_Phone_X->price                    =  200;
        $I_Phone_X->product_type             = "smart phone";
        $asscus_laptop                       = new Product;
        $asscus_laptop->name                 = "Assus_CMSXAA201";
        $asscus_laptop->price                = 25000000;
        $asscus_laptop->image                = "https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/3/1/637502180353670464_asus-vivobook-x515-print-bac-1.jpg";
        $asscus_laptop->id                   = 3;
        $asscus_laptop->product_type         = "notebook_laptop";
        $TOYATA_newbi                        = new Product;    
        $TOYATA_newbi->name                  = "TOYATA-2019_newbi";    
        $TOYATA_newbi->price                 = 7000000;    
        $TOYATA_newbi->id                    = 4;    
        $TOYATA_newbi->product_type          = "car";    
        $TOYATA_newbi->image                 = "https://www.toyota-club.eu/graphics/owners/full/1343-1553-img-20200115-095741.jpg";    
        $lamboghini                          = new Product; 
        $lamboghini->name                    = "LamBoghini AvenTaDor";
        $lamboghini->price                   = 222222222;
        $lamboghini->image                   = "https://www.carscoops.com/wp-content/uploads/2020/10/lamborghini-aventador-svj-0-1.jpg";
        $lamboghini->id                      = 6;
        $lamboghini->product_type            = "car";
        $DELL_2012                           = new Product;
        $DELL_2012->name                     = "DELL 2018";
        $DELL_2012->id                       = 5;
        $DELL_2012->price                    = 300000;
        $DELL_2012->image                    = "https://hc.com.vn/i/ecommerce/media/GS.003984_FEATURE_61240.jpg";
        $DELL_2012->product_type             = "notebook_laptop";
        $Hp_2019_GK                          = new Product;
        $Hp_2019_GK->id                      = 7;
        $Hp_2019_GK->price                   = 2000000;
        $Hp_2019_GK->name                    = "Hp-2019-GK";
        $Hp_2019_GK->image                   = "https://hanoicomputercdn.com/media/product/60277_laptop_hp_pavilion_15_gold_9.jpg";
        $Hp_2019_GK->product_type            = "notebook_laptop";
        $Acuss_SSXMAL201                     = new Product;
        $Acuss_SSXMAL201->name               = "Acuss-SSXMAL201";
        $Acuss_SSXMAL201->image              = "https://salt.tikicdn.com/cache/280x280/ts/product/72/5f/4d/0839a0593b21b69ed09215ff478e0391.jpg";
        $Acuss_SSXMAL201->price              = 10000000;
        $Acuss_SSXMAL201->id                 = 8;
        $Acuss_SSXMAL201->product_type       = "note_laptop";
        $SH_mode_2020                        = new Product;
        $SH_mode_2020->name                  = "SH-mode-2020";
        $SH_mode_2020->id                    = 9;
        $SH_mode_2020->image                 = "https://muaxegiatot.vn/wp-content/uploads/2020/07/Thiet-ke-moi-cua-Honda-SH-Mode-2020-2021-muaxegiatot-vn.jpg";
        $SH_mode_2020->price                 = 2000000;
        $SH_mode_2020->product_type          = "motobike";
        $taurus_yamaha                       = new Product;
        $taurus_yamaha->name                 = "taurus Yamaha";
        $taurus_yamaha->image                = "https://imgwebikevn-8743.kxcdn.com/_bxNbXPKkhH3EsQOeU0aegXMZuE=/master/series/590_taurus-ls.jpg";
        $taurus_yamaha->id                   = 10;
        $taurus_yamaha->price                = 22432111;
        $taurus_yamaha->product_type         = "motobike";
        $objects                             = [];
        $objects[]                           = $exeiter_120cc;
        $objects[]                           = $I_Phone_X;
        $objects[]                           = $asscus_laptop;
        $objects[]                           = $TOYATA_newbi;
        $objects[]                           = $DELL_2012;
        $objects[]                           = $lamboghini;
        $objects[]                           = $Hp_2019_GK;
        $objects[]                           =  $Acuss_SSXMAL201;
        $objects[]                           = $SH_mode_2020;
        $objects[]                           = $taurus_yamaha;
        // echo "<pre>";
        // print_r($objects);
        // echo "</pre>";
        $objectSmart_phones                      = [];
        $objectSmart_phones[]                    = $I_Phone_X;
        $objectMotobikes[]                       = $SH_mode_2020;
        $objectMotobikes[]                       = $taurus_yamaha;
        $objectMotobikes[]                       = $exeiter_120cc;
        $object_laptops                          = []; 
        $object_laptops[]                        = $Acuss_SSXMAL201; 
        $object_laptops[]                        = $Hp_2019_GK; 
        $object_laptops[]                        = $asscus_laptop; 
        $object_laptops[]                        = $DELL_2012; 
        $objectCars                              = [];
        $objectCars[]                            = $lamboghini;
        $objectCars[]                            = $TOYATA_newbi;
        ?>
        <?php include_once "./view/headeer.php"; ?>
<?php include_once "./view/body_product.php"; ?>
<?php include_once "./view/foooter.php"; ?>





