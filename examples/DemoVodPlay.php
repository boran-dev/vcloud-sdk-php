<?php
require('../vendor/autoload.php');
use Vcloud\Service\Vod;
use Vcloud\Service\Tos;

$vid = "your vid";

echo "\nstaging 获取播放地址\n";
$response = Vod::getInstance()->request('GetPlayInfo', ['query' => ['video_id' => $vid]]);
echo (string)$response->getBody();

echo "\n获取签名以后的openAPI连接\n";
$response = Vod::getInstance()->getRequestUrl('GetPlayInfo', ['query' => ['video_id' => $vid]]);
echo (string)$response;
