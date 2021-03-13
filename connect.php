<?php

$db_host='10.100.1.4';
$db_user='admin';
$db_pass='ATomitech_0120#';
$db_name='otsuka';

$link = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:".mysqli_connect_error()."\n");
} else {
    echo "データベースの接続に成功しました。\n";
}

mysqli_select_db($link,$db_name);

$query = 'select * from test';

$result = mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result)){
	printf("'%s'@'%s'\n",$row['id'],$row['name']);
}

mysqli_close($link);

?>

<?php
foreach($rows as $row){
?>


<html>
<head></head>
<body>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
</tr>

<?php
}
?>

</body>
</html>
