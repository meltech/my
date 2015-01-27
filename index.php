<?php 
abstract class Hello{
    private $txt="Hello World";
    private $you_ip="192";
    private function get_ip(){
        // direct IP address
        if (isset($_SERVER['REMOTE_ADDR'])) {
            $this->you_ip=$_SERVER['REMOTE_ADDR'];
        }
    }
    protected function seyHello(){
        $this->get_ip();
        return $this->txt." ".$this->you_ip;
    }
}
class HelloYo extends Hello{
    public function HelloYo(){
        ;
    }
    public function sey(){
        return $this->seyHello();
    }
}
?>

Visit my Page

<?php
    $user=new HelloYo();
    echo "\r\n</br>";
    echo $user->sey();
?>
