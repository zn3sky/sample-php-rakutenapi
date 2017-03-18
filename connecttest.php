<?php
// 接続情報定義
require_once("Define.php");
// "Define.php"には下記を設定
//define("RAKUTEN_DEVELOPERID", "楽天ディベロッパーID");
//define("RAKUTEN_AFFILIATEID", "楽天アフィリエイトID");

require_once ("vendor/autoload.php");

$client = new RakutenRws_Client();
$client->setApplicationId(RAKUTEN_DEVELOPERID);
$client->setAffiliateId(RAKUTEN_AFFILIATEID);

// IchibaItem/Search API から、keyword=トレンチコート を検索します
$response = $client->execute(
	"IchibaItemSearch",
	array(
		"keyword" => "トレンチコート"
	)
);

if ($response->isOk()) {
	echo "Success:",  $response["hits"];
	//var_dump($response);
} else {
	echo "Error:".$response->getMessage();
}
?>