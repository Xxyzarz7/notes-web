<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pplg_1_notes');
$konek = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) 
or die("Gagal menampilkan databases . mysqli_error"($konek));

function kuery($kueri)
{
    global $konek;
    $result = mysqli_query($konek, $kueri);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function inputdata($inputdata){
    global $konek;
    $sql=mysqli_query($konek,$inputdata);
    return $sql;
}

function Editdata($tablename,$id){
    global $konek;
    $hasil=mysqli_query($konek,"select * from $tablename where id='$id'");
    return $hasil;
}

function update($table, $data, $id){
    global $konek;
    $sql = "UPDATE $table SET note = '$data' WHERE id = '$id'";
    $hasil=mysqli_query($konek, $sql);
    return $hasil;
}

function cek_login($username, $password){
    global $konek;
    $uname = $username;
    $upass = $password;

    $hasil = mysqli_query($konek, "select * from user where
    username ='$uname' and password=md5($upass)");
    $cek = mysqli_num_rows($hasil);

    if($cek > 0){
        return true;
    } else{
        return false;
    }
}
// function delete($tablename,$id){
//     global $konek;
//     $hasil=mysqli_query($konek,"delete form $tablename where id='$id'");
//     return $hasil;
// }

?>
