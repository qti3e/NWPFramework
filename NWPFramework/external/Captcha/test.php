<?php
/**
 *NWP Framework
 *URL:HTTP://WWW.NWPIR.COM
 *By:ALIREZA GHADIMI
 *Prg.:PHP Storm V.7.1.3
 */
include("captcha.php");
Captcha_Start();
if(isset($_GET["code"])){
    ReCaptcha("1",$_GET["code"],"1");
    if(ReCaptcha("1",$_GET["code"],"0") == "1"){
        echo "Horra";
    }
}else{
    Captcha("","1");
}