<?php
@mysql_connect("localhost","root","148422")
or die("数据库服务器连接失败");
@mysql_select_db("xueji")
or die("数据库不存在或不可用");
if($_GET['infor']) 
{
$stu_num = $_GET['infor'];
$query=mysql_query("select* from mytable where stu_num =  '$stu_num' ");

}

$row=mysql_fetch_array($query);
//else die("获得学号错误");
echo "<table border=1>";
//$query = "SELECT * FROM  mytable WHERE stu_num =  '23' ";
//$query=mysql_query("select* from mytable where stu_num =  '23'");
$stu_num=$row['stu_num'];
$stu_name=$row['stu_name'];
$stu_sex=$row['stu_sex'];
$stu_age=$row['stu_age'];
$stu_dept=$row['stu_dept'];
echo"<tr>";
echo"<td>$stu_num</td>";
echo"<td>$stu_name</td>";
echo"<td>$stu_sex</td>";
echo"<td>$stu_age</td>";
echo"<td>$stu_dept</td>";
echo"</tr>";
echo "</table>";

?>