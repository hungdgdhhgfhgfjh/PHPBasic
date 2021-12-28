<?php
    $username = 'root'; //tên đăng nhập CSDL
    $password = ''; // mật khẩu
    $options  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    //kết nối tới CSDL
    $connect = new PDO('mysql:host=localhost;dbname=staff_list',$username, $password);
  

    //Lấy tất cả từ bảng thể loại
    $sql    = "SELECT * FROM staff1";
//     //thực hiện truy vấn
//     $stmt  = $connect->query( $sql );
//     //tùy chọn kiểu trả về
//     $stmt->setFetchMode(PDO::FETCH_OBJ);
//     //lấy tất cả kết quả
//     $rows   = $stmt->fetchAll();
// ​
// ​
// //     // lấy 1 kết quả duy nhất từ thể loại dựa vào id_danh_muc
// //     $sql    = "SELECT * FROM theloai WHERE ID_danh_muc = 1";
// //     $stmt   = $connect->query( $sql );
// //     $stmt->setFetchMode(PDO::FETCH_OBJ);
// //     $row    = $stmt->fetch();
// // ​
// // //     //chèn dữ liệu vào
// //     $sql    = " INSERT INTO theloai ( Ten_danh_muc  ) VALUES ( 'Sinh Học' ) ";
// //     //$stmt   = $connect->query( $sql );
// // ​
// //    cập nhật dữ liệu
//      $sql    = " UPDATE theloai SET Ten_danh_muc = 'Sinh Lý Học' WHERE ID_danh_muc = 9 ";
//     $stmt   = $connect->query( $sql );
// ​
//  // xóa dữ liệu
//     $sql    = " DELETE FROM theloai WHERE ID_danh_muc = 9";
//      $stmt   = $connect->query( $sql );

// ​
    