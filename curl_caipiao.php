<?php
    header('content-type:text/html;charset=utf-8');
    // $host = "http://www.cwl.gov.cn";
    // $path = "/caipiao/query";
    // $method = "GET";
    // $appcode = "你自己的AppCode";
    // $headers = array();
    // array_push($headers, "Authorization:APPCODE " . $appcode);
    // $querys = "caipiaoid=13&issueno=2016080";
    // $bodys = "";
    // $url = "http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=ssq&issueCount=30";//$host . $path . "?" . $querys;

    // $curl = curl_init();
    // curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    // curl_setopt($curl, CURLOPT_URL, $url);
    // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    // curl_setopt($curl, CURLOPT_FAILONERROR, false);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($curl, CURLOPT_HEADER, true);
    // // if (1 == strpos("$".$host, "https://"))
    // // {
    // //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    // //     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    // // }
    // var_dump(curl_exec($curl));

    // //初始化
    // $curl = curl_init();
    // //设置抓取的url
    // curl_setopt($curl, CURLOPT_URL, 'http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=ssq&issueCount=30');
    // //设置头文件的信息作为数据流输出
    // curl_setopt($curl, CURLOPT_HEADER, 1);
    // //设置获取的信息以文件流的形式返回，而不是直接输出。
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // //执行命令
    // $data = curl_exec($curl);
    // //关闭URL请求
    // curl_close($curl);
    // //显示获得的数据
    // print_r($data);

  
// header("Content-type:text/html;Charset=utf8");  
// $ch =curl_init();  
// curl_setopt($ch,CURLOPT_URL,'http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=ssq&issueCount=30');  
  
// $header = array();  
// //curl_setopt($ch,CURLOPT_POST,true);  
// //curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);  
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  
// curl_setopt($ch,CURLOPT_HEADER,true);  
// curl_setopt($ch,CURLOPT_HTTPHEADER,$header);  
// curl_setopt($ch,CURLOPT_COOKIE,'21_vq=12;');   
  
  
// $content = curl_exec($ch);  
  
// echo "<pre>";print_r(curl_error($ch));echo "</pre>";  
// echo "<pre>";print_r(curl_getinfo($ch));echo "</pre>";  
// echo "<pre>";print_r($header);echo "</pre>";  
// echo "</br>",$content; 


// create curl resource  
   // $ch = curl_init();  
 
   // // set url  
   // curl_setopt($ch, CURLOPT_URL, "http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=ssq&issueCount=30");  
 
   // //return the transfer as a string  
   // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
 
   // // $output contains the output string  
   // $output = curl_exec($ch);  
 
   //  //echo output 
   //  echo $output; 
 
   // // close curl resource to free up system resources  
   // curl_close($ch); 


  //我们学校的链接。直接出现错误，将被重定向到错误页面。这个就没必要跟着它重定向啦，一定有某个地方不对。
// $url = "http://210.38.207.15:169/web/search.aspx";

//深圳大学这个链接就很乖。数据直接就出来。
// $url = "http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=ssq&issueCount=30";
// $curl = curl_init(); 
// //header
// curl_setopt($curl, CURLOPT_URL, $url);  
// curl_setopt($curl,CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate','Cookie:21_vq=12'));//'Cookie:21_vq=12', 
// // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); 
// curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);  
// curl_setopt($curl, CURLOPT_HEADER,0); 
// curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.146 Safari/537.36");
// curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1);
// $data = curl_exec($curl); 
// curl_close($curl);
// print_r($data);

//获取彩票数据接口。。
$array = array(
        'ssq'=>'http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=ssq&issueCount=30',//双色球
        '3d'=>'http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=3d&issueCount=30',//福彩3D
        'qlc'=>'http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=qlc&issueCount=30',//七色彩
);
$testHeader = array(  
            "Accept: */*",
            "Accept-Encoding: gzip, deflate",
            "Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3",
            "Connection: keep-alive",
            "Content-Type: application/x-www-form-urlencoded; charset=utf-8",
            "Host: www.cwl.gov.cn",
            "Referer: http://www.cwl.gov.cn/kjxx/ssq/kjgg/",
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.146 Safari/537.36"
        );
        $testUrl = $array['qlc'];//'http://www.cwl.gov.cn/cwl_admin/kjxx/findDrawNotice?name=ssq&issueCount=1';
        $cookieSuccess = '21_vq=12'; 
        print(getMoreInfo($testUrl,'', $testHeader, $cookieSuccess));
        
 function getMoreInfo($url, $postData, $header, $cookieSuccess){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    // curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieSuccess);
    // curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieSuccess);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $rs = curl_exec($ch);
    curl_close($ch);
    // if (curl_errno($ch)) {
    //     echo 'Errno ' . curl_error($ch) . ' ';
    // }
    return $rs;

}




?>