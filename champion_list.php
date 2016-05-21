<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miralis
 * Date: 4/15/2016
 * Time: 7:10 PM
 */

function get_data($url)
{
    try {
        $ch = curl_init();

        if (FALSE === $ch)
            throw new Exception('failed to initialize');

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 'false');
        // curl_setopt(/* ... */);

        $content = curl_exec($ch);

        if (FALSE === $content)
            throw new Exception(curl_error($ch), curl_errno($ch));

        return $content;

        // ...process $content now
    } catch (Exception $e) {

        trigger_error(sprintf(
            'Curl failed with error #%d: %s',
            $e->getCode(), $e->getMessage()),
            E_USER_ERROR);

    }
}
$url='https://global.api.pvp.net/api/lol/static-data/na/v1.2/champion?dataById=true&api_key=bd9cbfef-5a84-4523-a8fa-5a5e33eb56a9';
//$data=get_data($url);
$data=get_data($url);

$data=json_decode($data,true);
$a=$data['data'];
ksort($a);
$values="";
foreach ($a as $k => $v) {
    $values.="(".$a[$k]['id'].",'".$a[$k]['key']."'),";

    //var_dump();
    //break;
}
echo $values;
//var_dump($data);