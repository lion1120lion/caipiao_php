<?php
error_reporting(E_ALL ^ E_NOTICE); 
date_default_timezone_set('PRC');

//ÉèÖÃ½Ó¿Ú²ÎÊý
$name = '';
$uid = '';
$token = '';

//ÉèÖÃ»º´æÎÄ¼þ
$cache_url = "".$name.".txt";

//»º´æÎÄ¼þ£¨×îºó¸üÐÂÊ±¼ä£©
$filemtime = filemtime($cache_url);

//»º´æÎÄ¼þ£¨¸üÐÂÆµÂÊÉèÖÃ£©
$second = '10';

if ( time() - $filemtime > $second ) {

    //ÉèÖÃ²ÎÊý
    $data = file_get_contents("http://api.caipiaokong.com/lottery/?name=".$name."&format=json&uid=".$uid."&token=".$token."");

    //$data»º´æ
    $array = json_decode($data,true);//转成数组填写进去
    if(is_array($array)) {  
        file_put_contents($cache_url,$data,LOCK_EX);
    }

}

//¶ÁÈ¡»º´æ
$data = file_get_contents($cache_url);
$array = json_decode($data,true);

//Êä³öÊý×é
//print_r($array);

foreach($array as $key => $value) {

    $html .= "<table>";
    $html .= "<tr>";

    $html .= "<td>".$key."</td>";

    //¿ª½±ºÅÂë·Ö½â
    $number = explode(",",$array[$key]['number']);
    foreach($number as $k => $v) {
        $html .= "<td><strong>".$v."</strong></td>";
    }

    $html .= "<td><em>".$array[$key]['dateline']."</em></td>";

    $html .= "</tr>";
    $html .= "</table>";

}

echo $html;

?>