<?php

class DingWaring
{
    public static function send($module, $msg = '汽车人，出发吧！') {
        $dingConf = config('custom.ding');
        $conf = array_get($dingConf, $module, []);

        if (!empty($conf)) {
            $tokenId = $conf['token_id'];

            $url = "https://oapi.dingtalk.com/robot/send?access_token=" . $tokenId;
            $header = array('Content-Type:application/json;charset=utf-8');

            $data = array ('msgtype' => 'text','text' => array ('content' => $msg));
            $data_string = json_encode($data);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

            $output = curl_exec($ch);
            curl_close($ch);
            return $output;
        }


    }
}
