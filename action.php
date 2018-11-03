<?php
$conn = mysqli_connect("localhost","root","","php-ai");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$fullname = $_POST['fullname'];
$sql_insert= "INSERT INTO users VALUES ('$id','$username','$password','$level','$fullname')";
mysqli_query($conn, $sql_insert)or die(mysqli_error($conn));
echo '<script>
alert("Data Berhasil Disimpan");
location="index.php?"
</script>';
?>