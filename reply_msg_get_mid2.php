<html>
    9
<title>@ME</title>

<h1 align = 'center'>@ME</h1>
    <P align=center>
        <img src="http://qr-official.line.me/L/oUypr1a-r8.png">
    </P>
    <div align=center>line@ffon</div>


<?php

function get_mid()
{
     $proxy = 'http://fixie:f15Ug5dvUX8MX7F@velodrome.usefixie.com:80';
    $proxyauth = 'http://fixie:f15Ug5dvUX8MX7F@velodrome.usefixie.com:80';
    $strAccessToken = "XDEio/U+1tLcglINRntoiWnm3xBRzApRnLm5FHhpqHGEtU21j01yqjlxr83equ5W6qVYXGI80LOObJe1H9EaoK4ZfSiSHwpUrRgQxlREc/aSZQavLqwyHsT1rDcxjzf9ekwtwN1VXkZsCGo9bRxI5AdB04t89/1O/w1cDnyilFU=";
        
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

    echo "get_mid";
    var_dump($get_mid);

    if ($arrJson['events'][0]['message']['text'] == "a") {
        $arrPostData = array();
        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
        $arrPostData['messages'][0]['type'] = "text";
        $arrPostData['messages'][0]['text'] = "สวัสดี ".$arrJson['events'][0]['source']['userId'];

        $chAdd = curl_init();
        curl_setopt($chAdd, CURLOPT_URL, 'http://uat.dxplace.com/dxtms/line_member?mid='.$_get_mid.'&line_name=ffon_test'.'&image=image'.'&add_by=ffon3');
        curl_setopt($chAdd, CURLOPT_CUSTOMREQUEST, 'GET');
    // curl_setopt($chAdd, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($chAdd, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
                                )
        );
        $result = curl_exec($chAdd);
        $err    = curl_error($chAdd);
        curl_close($chAdd);
        echo "result return : ";
        var_dump($result);
    }
       
        
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $strUrl);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    $result = curl_exec($ch);
    curl_close ($ch);
        
    echo "result";
    var_dump($result);
}
    get_mid();
    
            
    
    ?>
    
    </html>
