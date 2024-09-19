<?php

include("connect.php");
$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];
$sql="INSERT INTO `member` (`id`, `username`, `password`, `name`, `created_at`) VALUES (NULL, '$username', '$name', '$password', current_timestamp());";
$res=$db->query($sql);
if($res){
   
echo "<script>
alert('เพิ่มข้อมูลสำเร็จ');
window.location='index.php';
</script>";
}else{
    echo "insert error";
}

