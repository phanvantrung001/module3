<?php
class Application {
    private $name;
    public static $count = 0;
    public function __construct($name) {
        $this->name = $name;
        self::$count++;
    } 
    public function __toString()
    {
        return $this->name;
    
       
    }
}
echo  "<br/>".Application::$count ;
$app1 = new Application('App One');
echo  "<br/>".Application::$count ;
$app2 = new Application('App Two');
echo "<br/>". Application::$count ;
echo $app1 .'<br/>';
echo $app2 .'<br/>';
?>