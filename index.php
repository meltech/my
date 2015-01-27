<?php 
abstract class Hello{
    private $txt="Hello World";
    private $you_ip;
    private function get_ip(){
        // direct IP address
        if (isset($_SERVER['REMOTE_ADDR'])) {
            $txt=$_SERVER['REMOTE_ADDR'];
        }
        return $this->you_ip;
        }
    protected function seyHello(){
        return $this->txt.$this->get_ip();
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
