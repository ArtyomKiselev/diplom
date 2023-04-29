<?php 

$db = mysqli_connect('localhost','root', '');
if (!$db)
{echo 'Ошибка соединения с базой данных';
exit;
}
mysqli_select_db($db,'odontology');

mysqli_query($db,"SET CHARACTER SET utf8");
mysqli_query($db,"SET NAMES utf8");
echo '<br>';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$comment=$_POST['comment'];
$specialist=$_POST['specialist'];

$res=mysqli_query($db,"INSERT INTO clients(name, email, phone, date, comment, specialist) VALUES('".$name."','".$email."','".$phone."','".$date."','".$comment."','".$specialist."')");
if($res)
echo '<p align=center> Запись успешно добавлена</p>
<table height=50 align=center rules=cols>
<tr><br>
?>
</td>
</tr>
<table>
 
 ?>