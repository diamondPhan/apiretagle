<?php


require 'restful_api.php';

class api extends restful_api {

    function __construct(){
        parent::__construct();
    }

    function checkyear(){
        if ($this->method == 'GET'){
            $this->response(200, $this->getyear($this->params));
        }
    }

    function checkloaitamgiac()
    {
        if($this->method == 'GET')
        {
            $this->response(200,$this->getloaitamgiac($this->params));
        }
    }

    function getloaitamgiac($params)
    {
        if(empty($params[0])||empty($params[1])||empty($params[2])||!empty($params[3]))
        {
            return array("status" => false, "data" => array());
        }
        else{
            $a=(double)$params[0];
            $b=(double)$params[1];
            $c=(double)$params[2];
            if(($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b)
            {
               return $data="Day la tam giac thuong";
            }
            elseif($a == $b && $b == $c)
            {
                return $data = "Day la tam giac deu";
            }
            elseif($a == $b || $a == $c || $c == $b)
            {
                if($a * $a == $b * $b + $c * $c || $b * $b == $a * $a + $c * $c || $c * $c == $a * $a + $b *$b)
                {
                    return $data = "Day la tam giac vuong can";
                }
                else
                {
                    return $data = "Day la tam giac can";
                }
            }
            elseif($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2)
            {
                return $data = "Day la tam giac vuong";
            }
            else
            {
                return $data = "Day la tam giac thuong";
            }
        }
    }

    function getyear($params)
    {
        if(empty($params[0])||!empty($params[1]))
        {
            $data = array("status" => false, "data" => array());
            return $data;
        }elseif((double)$params[0]-(int)$params[0]!=0||!(int)$params[0]>0)
        {
            $data = array("status" => false, "data" => array());
            return $data;
        }
        else
        {
            $x = (int)$params[0];
            if ($x % 400 == 0 || $x % 4 == 0 && $x % 100 != 0) {
                $data = array("status" => true, "data" => array("result" => "Nam " . $x . " la nam nhuan"));

            } else {
                $data = array("status" => true, "data" => array("result" => "Nam " . $x . " khong phai la nam nhuan"));
            }
            return $data;
        }
    }
}

$user_api = new api();
