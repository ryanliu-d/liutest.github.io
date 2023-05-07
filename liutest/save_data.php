
<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

// 創建一個MySQL數據庫連接
$servername = "127.0.0.1";
$username = "root";
$password = "pass5678";
$dbname = "liusql";


$conn = mysqli_connect($servername, $username, $password, $dbname);


// 檢查連接是否成功
if (!$conn) {
    die("連接失敗: " . mysqli_connect_error());
}

// 獲取表單提交的數據
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// 插入數據到數據庫
$sql = "INSERT INTO customers (name, phone, address) VALUES ('$name', '$phone', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "數據插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// 關閉數據庫連接
mysqli_close($conn);
?>
