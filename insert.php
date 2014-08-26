<?php
@mysql_connect("localhost","root","148422")
or die("数据库服务器连接失败");
@mysql_select_db("xueji")
or die("数据库不存在或不可用");
$stu_num=$_POST['stu_num'];
$stu_name=$_POST['stu_name'];
$stu_sex=$_POST['stu_sex'];
$stu_age=$_POST['stu_age'];
$stu_dept=$_POST['stu_dept'];
$query=mysql_query("insert into mytable values('$stu_num','$stu_name','$stu_sex','$stu_age','$stu_dept')");
if($query)
echo "注册信息成功";
else 
echo "注册信息失败";
mysql_close();
?>
