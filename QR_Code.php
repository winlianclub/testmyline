<html>
    8
<title>@ME</title>

<h1 align = 'center'>@ME</h1>
    <P align=center>
        <img src="http://qr-official.line.me/L/oUypr1a-r8.png">
    </P>
    <div align=center>line@ffon</div>


<?php
    function qr_code(){
        $proxy = 'http://fixie:f15Ug5dvUX8MX7F@velodrome.usefixie.com:80';
        $proxyauth = 'http://fixie:f15Ug5dvUX8MX7F@velodrome.usefixie.com:80';
        $strAccessToken = "f9/uoIUNEP1kL2paNPKAH+EGLrCz2VYyDLRzADLiG6cUM838OEmvwuLDaHOX8Y8gQPMU/R+dN8JPUEl4UZ3VdcnPVwB3VGFVHPu6HhvSBcssXN77lyH4cRgzSRe+ubJT6jlMGO8SmAXXZaS0FNIeAQdB04t89/1O/w1cDnyilFU=";
        
        $content = file_get_contents('php://input');
        $arrJson = json_decode($content, true);
        $strUrl = "https://api.line.me/v2/bot/message/reply";
    
        $arrHeader = array();
        $arrHeader[] = "Content-Type: application/json";
        $arrHeader[] = "Authorization: Bearer {$strAccessToken}";

        $arrPostData = array();
        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
        $arrPostData['messages'][0]['type'] = "text";
        $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
        $get_mid =  $arrJson['events'][0]['source']['userId'];
        
        if ($arrJson['events'][0]['message']['text'] == "a") {
            $arrPostData = array();
            $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
            $arrPostData['messages'][0]['type'] = "text";
            $arrPostData['messages'][0]['text'] = "สวัสดี ".$arrJson['events'][0]['source']['userId'];
           
//             $ch = curl_init();
//             curl_setopt($ch,CURLOPT_URL, 'http://uat.dxplace.com/dxtms/testem?mid='.$get_mid.'&addby=ffon');
//             curl_setopt($ch,CURLOPT_CUSTOMREQUEST , 'GET');
//             curl_setopt($ch,CURLOPT_RETURNTRANSFER , true);
//             //curl_setopt($ch,CURLOPT_POSTFIELDS, 'http://uat.dxplace.com/dxtms/testem?mid=U8c4eb5ebbd3493b74c6d17a77d3e6cd3');
//             curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//             "Content-Type: application/json",
//                                                         )
//              );
//     $result = curl_exec($ch);
//     $err    = curl_error($ch);
//     curl_close($ch);
        }
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
        $result = curl_exec($ch);
        curl_close ($ch);
        var_dump($result);
        //echo '<script>window.open("https://mighty-inlet-38627.herokuapp.com/pushMsg2.php?mid=Ub5fea2ff169cba24b2179fd33e59e454", "_blank")</script>'
        //setcookie('test', 'kkkkkkkkkk' , time() + (86400 * 30), "/");
    }
    qr_code();
    
            
    
    ?>
    
    </html>

