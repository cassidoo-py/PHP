<?php
function my_sort($array)
{
	for($i=0;$i<count($array);$j++)
	{
		for($j=$i+1;$j<count($array);$j++)
		{
			if($array[$i]>$array[$j])
			{
				$tmp=$array[$j];
				$array[$j]=$array[$i];
				$array[$i]=$tmp;
			}
		}
	}
	return $array;
}
echo "请输入需要排序的数据:<br/>";
echo "<form method=post>";
for($i=1;$i<6;$i++)
{
	echo "<input type='text' name='stu[]' size='5'>";
	if($i<5)
	echo "-";
}
echo "<input type='submit' name='bt' value='提交'>";
echo "</form>";
if(isset($_POST['bt']))
{
	$stu=$_POST['stu'];
	$arr_stu=my_sort($stu);
	echo "排序后的数据如下所示:<br/>";
	while(list($key,$value)=each($arr_stu))
	{
		echo $value."<br/>";
	}
}
?>