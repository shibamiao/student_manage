<?php
@mysql_connect("localhost","root","148422")
or die("���ݿ����������ʧ��");
@mysql_select_db("xueji")
or die("���ݿⲻ���ڻ򲻿���");
$stu_num=$_POST['stu_num'];
$stu_name=$_POST['stu_name'];
$stu_sex=$_POST['stu_sex'];
$stu_age=$_POST['stu_age'];
$stu_dept=$_POST['stu_dept'];
$query=mysql_query("insert into mytable values('$stu_num','$stu_name','$stu_sex','$stu_age','$stu_dept')");
if($query)
echo "ע����Ϣ�ɹ�";
else 
echo "ע����Ϣʧ��";
mysql_close();
?>
