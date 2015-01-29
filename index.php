<?php 
abstract class Hello{    
    private $you_ip="192";
    private $txt;
    public function Hello($txt){
        $this->txt=$txt;
        $this->get_ip();
    }
    private function get_ip(){
        // direct IP address
        if (isset($_SERVER['REMOTE_ADDR'])) {
            $this->you_ip=$_SERVER['REMOTE_ADDR'];
        }
    }
    public function sey(){
        return $this->txt;
    }
    protected function seyHello(){        
        $this->get_ip();
        return $this->you_ip;
    }
}
class HelloYo extends Hello{
    private $sisu="See on proovi koduleht kasutades PHP abstraktset klassi!";
    
    private $inputSubmit="Saada";
    public function sisu(){
        return $this->sisu;
    }
    public function inputName(){
        return $this->inputSubmit;
    }
}
class title extends Hello{

}
$title1=new title("Pealkiri");
$user1=new HelloYo("Hello World!");
?>

<script language="javascript" type="text/javascript">

var txt="lisatud text peale clicki";

function queryMy(xUrl){
    var xmlHttp = null;
    if (window.XMLHttpRequest){ xmlHttp = new XMLHttpRequest();}
    else{xmlHttp=xmlHttp = new ActiveXObject("Microsoft.XMLHttp"); }             
    xmlHttp.open( "GET", xUrl, false );   
    xmlHttp.send( null );
    return xmlHttp.responseText;// xmlHttp.getResponseHeader("Content-Type");//outCarEncoded;
}

function sisu(tekst,menyy){
    document.getElementById('divSisu').innerHTML=tekst;
    var ur="q6u.php?txt="+tekst+"&menyy="+menyy;
    //document.getElementById('head1').innerHTML=ur;
    var qrTo=queryMy(ur);
    document.getElementById('divSisu').innerHTML=qrTo;
}

</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="melise" />

	<title><?php echo $title1->sey(); ?></title>
</head>

<body>

<div><?php echo $user1->sey(); ?></div>

<input type="submit" onclick="javascript:sisu('txt','menu')" value="<?php echo $user1->inputName();?>"/>

<div id="divSisu" class="sisu" > <?php echo $user1->sisu(); ?> </div>


</body>
</html>
