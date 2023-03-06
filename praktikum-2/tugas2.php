<?php
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_uts =  $_POST['uts'];
    $_uas = $_POST['uas'];
    $_tugas = $_POST['tugas'];
    $_jumlah = ($_uts * 30 / 100) + ($_uas * 35 / 100) + ($_tugas * 35 / 100);
    echo '<br> Nama Mahasiswa : ' .$_nama;
    echo '<br> Mata Kuliah : ' .$_matkul;
    echo '<br> Nilai UTS : ' .$_uts;
    echo '<br> Nilai UAS : ' .$_uas;
    echo '<br> Nilai Tugas : ' .$_tugas;
?>


<?php
    if($_jumlah > 55){
        $grade  = "LULUS";
    } else {
        $grade = "TIDAK LULUS";
    }
    echo '<br> <br>   Persentase Nilai : ' .$_jumlah  ,"%";
    echo '<br> Kamu  Dinyatakan : '  .$grade;
?>


<?php
    if($_uts && $_uas && $_tugas >= 85 && $_uts && $_uas && $_tugas <= 100){
        $grade = "A";
    }elseif($_uts && $_uas && $_tugas >=70 && $_uts && $_uas && $_tugas <= 84){
        $grade = "B";
    }elseif($_uts && $_uas && $_tugas >= 56 && $_uts && $_uas && $_tugas <= 69){
        $grade = "C";
    }elseif($_uts && $_uas && $_tugas >= 36 && $_uts && $_uas && $_tugas <= 55){
        $grade = "D";
    }elseif($_uts && $_uas && $_tugas >= 0 && $_uts && $_uas && $_tugas <=35){
        $grade = "E";
    }elseif($_uts && $_uas && $_tugas < 0 && $_uts && $_uas && $_tugas >100){
        $grade = "I";
    }else{
        $grade = "Input tidak sesuai";
    }
    echo '<br>Grade Nilai :   '   .$grade;
?>

<?php
    if($grade == "A"){
        $predikat = "Sangat Memuaskan";
    }elseif($grade == "B"){
        $predikat = "Memuaskan";
    }elseif($grade == "C"){
        $predikat = "Cukup";
    }elseif($grade == "D"){
        $predikat = "Kurang";
    }elseif($grade == "E"){
        $predikat = "Sangat Kurang";
    }elseif($grade == "I"){
        $predikat = "Tidak Ada Grade";
    }else{
        $predikat = "Tidak Ada";
    }
    echo '<br/> Predikat Nilai : ' .$predikat;
?>