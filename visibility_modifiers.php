Visibilty Modifiers:
    * Public: Used anywhere
    * Private: Inside the class
    * Protected: It's used for parent class and it's subclass
    
    <html><head><title></title>
    <body>
    <?php
class student{
 
 public $fname;
 public $lname;
 public $country="None";
 protected $reg_id;
 private $tut=0.00;
 
 public function hello_world()
 {
    return $this->fname.",".$this->lname;

 }
public function hello()
{
  return "HEELLO"."<br/>";
}
protected function hello_family(){
return "HELLO FAMILY";
}
private function hello_me(){
return "HELLO JOHN";
}
}
class partTime extends student{
 
     public function hello_parent(){
      return $this->hello_family;
     }
}
$s1=new student;
$s1->fname="John";
$s1->lname="Doe";
echo $s1->hello();
echo $s1->hello_world();
?>
    </body></html>
