<?php
//Hàm: có 2 loại
//Có trả về
//Không trả về
//function hienThi($a, $b, $c = 9){
//    //Tất cả những gì nằm trong ngoặc tròn được gọi là tham số
//    echo $a + $b +$c;
//}
//hienThi(7, 8, 10);

//Tạo 1 hàm có tham số truyền vào tên, năm sinh, địa chỉ. Hiển thị ra thông tin tên + tuổi + địa chỉ
//Tuổi = Năm hiện tại - năm sinh

//function tinhTuoi($namsinh){
//    return date("Y") - $namsinh;
//}

//function thongTin ($ten, $nam_sinh, $dia_chi){
//    echo "Họ tên " .$ten;
//    echo "</br>";
//    echo "Tuổi: " .tinhTuoi($nam_sinh);
//    echo "</br>";
//    echo "Địa chỉ: " .$dia_chi;
//}
//thongTin("Nguyễn Văn A",2003,"Hà Nội");


//Xây dựng hàm không trả về hiển thị ttsv gồm những tham số: mssv, tên_sv, nam_sinh, diem_mon1, diem_mon2, dia_chi
//Xây dựng hàm tính tuổi có trả về
//Xây dựng hàm xếp loại có trả về
//Điểm TB = (diem_mon1 + diem_mon2) /2 ==> DTB >= 5 -> Đạt
//Hiển thị tên, mssv, dtb, xeploai, dia_Chi, tuoi
function tinhTuoi($namsinh){
    return date("Y") - $namsinh;
}
function dtb ($diem1, $diem2){
    $DTB = ($diem1 + $diem2)/2;
    return $DTB;
}
function xeploai($dtb){
    if($dtb >=5){
        return "Đạt";
    }else{
        return "Không đạt";
    }
}

function ttsv ($ten_sv, $mssv, $nam_sinh, $diem1, $diem2, $dia_chi){
    return "Tên: " .$ten_sv ."</br>" ."MSSV: " .$mssv ."</br>" ."DTB: " .dtb($diem1,$diem2) ."</br>" ."Địa chỉ: " .$dia_chi ."</br>" ."Tuổi: " .tinhTuoi($nam_sinh) ."</br>" ."Xếp loại: " .xeploai(dtb($diem1,$diem2));
}
//echo ttsv("Trường", "PH25857", 2003, 8,9, "HN");

function thamNien($namvao){
    return date("Y") - $namvao ." năm";
}
function tongLuong($luongCB, $sogioday){
    return number_format($luongCB*$sogioday) ." VNĐ";
}
function ttgv($magv, $tengv, $namvao, $luongCB, $sogioday){
    return "Mã GV: " .$magv ."</br>" ."Tên GV: " .$tengv ."</br>" ."Tổng lương: ".tongLuong($luongCB,$sogioday) ."</br>" ."Thâm niên: " .thamNien($namvao);
}
echo ttgv("GV234", "Hoàng Thắng", 2010, 10000000, 12);

?>
