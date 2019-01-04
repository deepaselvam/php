syntax:
function name($arg1,$arg2)
{
statement;
}

<html><head><title></title></head>
<body>
<?php
  function hello(){
  echo "Hello World";
}
hello();
echo "<br/>";
 function hello_to($word){
    echo "Hello {$word}";
}
hello_to("Deepa");
echo "<br/>";
hello_loud();
function hello_loud(){
  echo "hello";
}
  ?>
</body></html>
