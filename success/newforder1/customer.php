<?php
include_once ("./class/class_customer.php");
use customer\Customer;
$hung                           = new Customer;
$hung->id                       = 1;
$hung->name                     = "Lê Quốc hưng";
$hung->email                    = "lequochung2001@gamil.com";
$hung->number_Phone             = "0905271011";
$hung->image                    = "https://vnresource.vn/hrmblog/wp-content/uploads/2018/09/13-can-benh-co-the-do-cong-viec-cua-nhan-vien-van-phong-gay-ra.jpg";
$hung->address                  = "09 chu mạnh trinh";
$ngoclan                        = new Customer;
$ngoclan->id                    = 2; 
$ngoclan->name                  = "Hoàng Ngọc Lan"; 
$ngoclan->email                 = "ngocthacam@gamil.com"; 
$ngoclan->number_Phone          = "0987987123"; 
$ngoclan->image                 = "https://timviec365.com.vn/upload/images/nhan-vien-van-phong-la-gi(1).jpeg"; 
$ngoclan->address               = "08 ngọc thạch cẩm"; 
$hoangLin                       = new Customer;
$hoangLin->id                   = 3;
$hoangLin->name                 = "Nguyễn Hoàng Linh";
$hoangLin->email                = "17 Lý Thường Kiệt";
$hoangLin->number_Phone         = "0321898911";
$hoangLin->image                = "https://i-raovat.vnecdn.net/2018/08/24/464fcb337cadf2d097fb24868d32f55c.jpeg?w=1280&h=768&q=100&dpr=1&rt=auto&g=no&s=aMUMy4bs8Icqs_-jXTe64Q";
$hoangLin->address              = "17 Lý Thường Kiệt";
$thach_thao                     = new Customer;
$thach_thao->id                 = 4;
$thach_thao->name               = 'Nguyễn Thạch Thảo';
$thach_thao->address            = '20 chu ngọc Bác';
$thach_thao->number_Phone       = '0916162892';
$thach_thao->email              = 'chungocbac2001@gmail.com';
$thach_thao->image              = 'https://kolo.vn/wp-content/uploads/2021/01/9ad389583243ccf79a89aada64380695-2697937480559691128.jpg';
$Le_bao_dam                     = new Customer ;
$Le_bao_dam->id                 = 5;  
$Le_bao_dam->name               = "Lê bảo đàm ";  
$Le_bao_dam->address            = "28 Hùng Vương";  
$Le_bao_dam->email              = "lebaodam2091@gamil.com";  
$Le_bao_dam->number_Phone       = "0569823412";  
$Le_bao_dam->image              = "https://thework.vn/wp-content/uploads/2020/10/hanh-chinh-3.jpg";  
$Le_Thach_Lan                   = new Customer ;
$Le_Thach_Lan->id               = 6 ;
$Le_Thach_Lan->name             = "Lê Thạch Lan" ;
$Le_Thach_Lan->address          = "01 Hoàng Gia Trang" ;
$Le_Thach_Lan->email            = "hoanggiatrang2001@gamil.com" ;
$Le_Thach_Lan->number_Phone     = "0987651029" ;
$Le_Thach_Lan->image            = "https://unia.vn/wp-content/uploads/2020/08/cach-hoc-tieng-Anh-giao-tiep-cuc-hieu-qua-cho-nhan-vien-van-phong-1-1.png" ;
$bao_khang                      = new Customer;
$bao_khang->id                  = 7;
$bao_khang->name                = "nguyễn lễ bảo khang";
$bao_khang->address             = "27 Ngọc Thật cẩm";
$bao_khang->email               = "hungbaobinh1898@gamil.com";
$bao_khang->image               = "https://img.lovepik.com/photo/50106/5883.jpg_wh860.jpg" ;
$bao_khang->number_Phone        = "0981918282" ;
$Le_Ho_Cuong                    = new Customer;
$Le_Ho_Cuong->name              = "Lê Hồ Cường";
$Le_Ho_Cuong->id                = 8;
$Le_Ho_Cuong->address           = "209 nguyễn ngọc bích";
$Le_Ho_Cuong->email             = "cuongxuanho2091@gamil.com";
$Le_Ho_Cuong->number_Phone      = "0912124252";
$Le_Ho_Cuong->image             = "https://media.alobacsi.com/Images/Uploaded/Share/2017/04/24/628Nhan-vien-van-phong-cham-soc-mat-the-nao-cho-tot.jpg";
$Le_Huong_Lan                   = new Customer;
$Le_Huong_Lan->name             = "19 chu ngọc lan";
$Le_Huong_Lan->email            = "10lequoshung@gmail.com";
$Le_Huong_Lan->address          = "19 chu ngọc lan";
$Le_Huong_Lan->number_Phone     = "0987182910";
$Le_Huong_Lan->id               = 9;       
$Le_Huong_Lan->image            = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXR8nfpgIvchi5haT72771qTHPEqPQS3wWJQ&usqp=CAU";       
$Le_Ba_Hoang                    = new Customer;  
$Le_Ba_Hoang->name              = "Lê Bá Hoàng";  
$Le_Ba_Hoang->address           = "21 hoàng hôn";  
$Le_Ba_Hoang->email             = "hoanghonvaygoi@gmail.com";  
$Le_Ba_Hoang->id                = 10;  
$Le_Ba_Hoang->number_Phone      = "0987281922";  
$Le_Ba_Hoang->image             = "https://doanhnhanplus.vn/wp-content/uploads/2017/10/DN729-duong-da-nam-Tvan-2017-5.jpg";  
$objects                        = []; 
$objects[]                      = $hung; 
$objects[]                      = $ngoclan; 
$objects[]                      = $hoangLin; 
$objects[]                      = $thach_thao; 
$objects[]                      = $Le_bao_dam; 
$objects[]                      = $Le_Thach_Lan; 
$objects[]                      = $bao_khang; 
$objects[]                      = $Le_Ho_Cuong; 
$objects[]                      = $Le_Huong_Lan; 
$objects[]                      = $Le_Ba_Hoang; 





?>

<?php include_once "./view/headeer.php"; ?>
<?php include_once "./view/body_customer.php"; ?>
<?php include_once "./view/foooter.php"; ?>
