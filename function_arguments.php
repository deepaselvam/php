<html><head><title></title></head>
<body>
<?php

 function hello_to($word){
    echo "Hello {$word}";
}
$name="John";
hello_to($name);
echo "<br/>";
function hello_loud($greeting,$target,$punct){
  echo $greeting." ".$target.$punct;
}
hello_loud("HEllo",$name,"!"."<br/>");
hello_loud("HEllo",$name,"!!!"."<br/>");
hello_loud("HEllo",$name,null);
  ?>
</body></html>
