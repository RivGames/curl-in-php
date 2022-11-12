<?php
$url = 'http://curlphp.loc/';
$url1 = 'https://code.mu';
$url2 = 'http://curlphp.loc/file1.php';
$url3 = 'http://curlphp.loc/cookie.php';
$url4 = 'http://curlphp.loc/file.php';
function curl($url, $data = [])
{
    $curl = curl_init();

    $headers = [
        'Accept-Language: en-US',
        'Accept: text/html',
        'HTTP_X_TEST: hello',
    ];

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
//    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
//    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false);
//    curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)');
//    curl_setopt($curl, CURLOPT_POST, 1);
//    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//    curl_setopt($curl, CURLOPT_COOKIE, 'name=john; status=admin');
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $res = curl_exec($curl);
    if ($res == false) {
        echo 'error message: ' . curl_error($curl);
    } else {
        var_dump($res);
    }
}

//curl($url2,['field1' => 'value1','field2' => 'value2']);
//curl($url2, ['num1' => '10', 'num2' => '100']);
curl($url4);