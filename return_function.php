<html><head><title></title></head>
<body>
<?php

  function add($val1,$val2)
{
  $sum=$val1+$val2;
  return $sum;
}
$result1=add(4,3);
$result2=add(5,$result1);
echo $result2;
 ?>
</body></html>
