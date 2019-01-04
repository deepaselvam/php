<html><head><title></title></head>
<body>
<?php

  function add_subt($val1,$val2)
{
  $add=$val1+$val2;
   $sub=$val1-$val2;
  return array($add,$sub);
}
$result_array=add_subt(4,3);
echo "Add:".$result_array[0]."<br/>";
echo "Sub:".$result_array[1];
echo "<br/>";
list($a_resul,$s_resul)=add_subt(10,3);
echo "Add:".$a_resul."<br/>";
echo "Sub:".$s_resul;
 ?>
</body></html>
