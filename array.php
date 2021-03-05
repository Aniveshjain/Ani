<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.m {
	font-weight: bold;
}
.m {
	font-weight: bold;
	text-align: center;
}
.m {
	font-size: medium;
}
.w {
	text-align: center;
	font-style: italic;
	font-weight: bold;
}
.l {
	text-align: center;
	font-weight: bold;
}
.p {
	text-align: center;
}
.p {
	text-align: center;
	font-weight: bold;
}
.p {
	color: #3A4A89;
	font-weight: bold;
	font-style: italic;
	font-size: large;
}
.a {
	color: #800040;
}
</style>
</head>

<body>
<table width="1000" height="506" border="1" align="center" bgcolor="#00CC00">
  <tr>
    <td colspan="4"><img src="2.jpg" width="1000" height="406" /></td>
  </tr>
  <tr>
    <td width="209" rowspan="10" bgcolor="#CCFF66" class="p">php<span class="p"></span></td>
    <td colspan="2" class="w" bgcolor="#FF6600"><h1>Working on array in php</h1></td>
    <td width="194" rowspan="10" bgcolor="#CCFF66" class="p">php</td>
  </tr>
  <tr>
    <td width="249" class="m">my subject</td>
    <td width="330">
      <?php
	$sub = array("java",".net","php","python");
	echo"".$sub[0].",   ".$sub[1].",  ".$sub[2].",  ".$sub[3];
	
	
	
	?>
      
      
      
      
      
    &nbsp;</td>
  </tr>
  <tr>
    <td class="m">my marks</td>
    <td><?php
	$marks = array('35','45','47','35');
	echo "total:200/   ".array_sum($marks);
	
	?>
      
      
      
      
      
    &nbsp;</td>
  </tr>
  <tr>
    <td class="m" style="font-weight: bold; text-align: center;">merge Array</td>
    <td>
      <?php
	$a1=array("red","green");
	$a2=array("blue","yellow","orange");
	print_r(array_merge($a1,$a2));
	?>
      
      
      
    &nbsp;</td>
  </tr>
  <tr>
    <td class="l">While Loop in php</td>
    <td>
      <?php
	$x = 1;
	
	while($x <= 5) {
		echo"the number is : $x<br>";
		$x++;
		}
		?>
      
    &nbsp;</td>
  </tr>
  <tr>
    <td class="l">For loop in php</td>
    <td><p class="a">Age:</p>
      <p>
  <?php 
	$age = array("anivesh"=>'21',   "chatan"=>'22');
	
	foreach($age as $x => $val)
	{
		echo "$x = $val<br>";
		}
	
	?>
      </p>
      <p>&nbsp;
        
    </p></td>
  </tr>
  <tr>
    <td class="l"><p>Sum</p>
    <p>(5,6,8,3,9)</p></td>
    <td>
<?php
$a=array(5,6,8,3,9);
echo array_sum($a);



?>    
    
    
    &nbsp;</td>
  </tr>
  <tr>
    <td class="l"><p>Subtraction</p>
    <p>(50,25)</p></td>
    <td>
  <?php
  $arr = array(50,25);
  $result = $arr[0];
  for ($i =1;  $i < count($arr); $i++)  {
	  $result-= $arr[$i];
	  }
  echo $result;
  ?>

    
    
    &nbsp;</td>
  </tr>
  <tr>
    <td class="l"><p>multiply</p>
    <p>(65,25)</p></td>
    <td><?php
$a=array(65,25);
echo array_product($a);
?>
    
    
    &nbsp;</td>
  </tr>
  <tr>
    <td class="l"><p>Division</p>
    <p>(50,25)</p></td>
    <td>
      <p>
        <?php
  $arr = array(50,25);
  $result = $arr[0];
  for ($i =1;  $i < count($arr); $i++)  {
	  $result/= $arr[$i];
	  }
  echo $result;
  ?>

        
        
    &nbsp;</p></td>
  </tr>
</table>
</body>
</html>