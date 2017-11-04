<?php


//BOT
function processMessage($message) {
    $kanal = '@channel-name'; //channel id
    $admins = array(123456, 092); // admins id
    // process incoming message
    $message_id = $message['message_id'];
    $chat_id = $message['chat']['id'];
    if (isset($message['text'])) {
        // incoming text message
        $text = $message['text'];

        if (strpos($text, "/start") === 0) {
            apiRequestJson("sendMessage", array('chat_id' => $chat_id, "text" => 'Hello! Send /coin(coin symbol) to see the price and info of the coin (Example /coinbtc).'));
        } else if (strpos($text, "/coinbtc") === 0) {
            //BITCOIN
$tickbtc = file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoin/');
$pbtc = json_decode($tickbtc,TRUE)[0]["price_usd"];
$namebtc =json_decode($tickbtc,TRUE)[0]["name"];
$symbtc = json_decode($tickbtc,TRUE)[0]["symbol"];
$rbtc = json_decode($tickbtc,TRUE)[0]["rank"];
$percent24btc = json_decode($tickbtc,TRUE)[0]["percent_change_24h"];
$percent7dbtc = json_decode($tickbtc,TRUE)[0]["percent_change_7d"];
$vbtc = json_decode($tickbtc,TRUE)[0]["24h_volume_usd"];
$supbtc = json_decode($tickbtc,TRUE)[0]["total_supply"];
$btc = "Name: $namebtc \n Symbol: $symbtc \n Rank: $rbtc \n Price USD: $$pbtc \n Percent change 24h: $percent24btc \n Percent change 7d: $percent7dbtc \n 24h Volume: $vbtc \n Total supply: $supbtc";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$btc"));
            }else if (strpos($text, "/coineth") === 0) {
                $tick2 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/ethereum/');
$p2 = json_decode($tick2,TRUE)[0]["price_usd"];
$pb2 = json_decode($tick2,TRUE)[0]["price_btc"];
$name2 =json_decode($tick2,TRUE)[0]["name"];
$sym2 = json_decode($tick2,TRUE)[0]["symbol"];
$r2 = json_decode($tick2,TRUE)[0]["rank"];
$percent242 = json_decode($tick2,TRUE)[0]["percent_change_24h"];
$percent7d2 = json_decode($tick2,TRUE)[0]["percent_change_7d"];
$v2 = json_decode($tick2,TRUE)[0]["24h_volume_usd"];
$sup2 = json_decode($tick2,TRUE)[0]["total_supply"];
$eth = "Name: $name2 \n Symbol: $sym2 \n Rank: $r2 \n Price USD: $$p2 \n Price BTC: $pb2 BTC \n Percent change 24h: $percent242 \n Percent change: 7d $percent7d2 \n 24h Volume: $v2 \n Total supply: $sup2";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$eth"));
        } else if (strpos($text, "/coinxrp") === 0) {
                $tick3 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/ripple/');
$p3 = json_decode($tick3,TRUE)[0]["price_usd"];
$pb3 = json_decode($tick3,TRUE)[0]["price_btc"];
$name3 =json_decode($tick3,TRUE)[0]["name"];
$sym3 = json_decode($tick3,TRUE)[0]["symbol"];
$r3 = json_decode($tick3,TRUE)[0]["rank"];
$percent243 = json_decode($tick3,TRUE)[0]["percent_change_24h"];
$percent7d3 = json_decode($tick3,TRUE)[0]["percent_change_7d"];
$v3 = json_decode($tick3,TRUE)[0]["24h_volume_usd"];
$sup3 = json_decode($tick3,TRUE)[0]["total_supply"];
$xrp = "Name: $name3 \n Symbol: $sym3 \n Rank: $r3 \n Price USD: $$p3 \n Price BTC: $pb3 BTC \n Percent change 24h: $percent243 \n Percent change: 7d $percent7d3 \n 24h Volume: $v3 \n Total supply: $sup3";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$xrp"));
        } else if (strpos($text, "/coinbch") === 0) {
                $tick4 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoin-cash/');
$p4 = json_decode($tick4,TRUE)[0]["price_usd"];
$pb4 = json_decode($tick4,TRUE)[0]["price_btc"];
$name4 =json_decode($tick4,TRUE)[0]["name"];
$sym4 = json_decode($tick4,TRUE)[0]["symbol"];
$r4 = json_decode($tick4,TRUE)[0]["rank"];
$percent244 = json_decode($tick4,TRUE)[0]["percent_change_24h"];
$percent7d4 = json_decode($tick4,TRUE)[0]["percent_change_7d"];
$v4 = json_decode($tick4,TRUE)[0]["24h_volume_usd"];
$sup4 = json_decode($tick4,TRUE)[0]["total_supply"];
$bch = "Name: $name4 \n Symbol: $sym4 \n Rank: $r4 \n Price USD: $$p4 \n Price BTC: $pb4 BTC \n  Percent change 24h: $percent244 \n Percent change: 7d $percent7d4 \n 24h Volume: $v4 \n Total supply: $sup4";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$bch"));
        } else if (strpos($text, "/coinltc") === 0) {
                $tick5 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/litecoin/');
$p5 = json_decode($tick5,TRUE)[0]["price_usd"];
$pb5 = json_decode($tick5,TRUE)[0]["price_btc"];
$name5 =json_decode($tick5,TRUE)[0]["name"];
$sym5 = json_decode($tick5,TRUE)[0]["symbol"];
$r5 = json_decode($tick5,TRUE)[0]["rank"];
$percent245 = json_decode($tick5,TRUE)[0]["percent_change_24h"];
$percent7d5 = json_decode($tick5,TRUE)[0]["percent_change_7d"];
$v5 = json_decode($tick5,TRUE)[0]["24h_volume_usd"];
$sup5 = json_decode($tick5,TRUE)[0]["total_supply"];
$ltc = "Name: $name5 \n Symbol: $sym5 \n Rank: $r5 \n Price USD: $$p5 \n Price BTC: $pb5 BTC \n  Percent change 24h: $percent245 \n Percent change: 7d $percent7d5 \n 24h Volume: $v5 \n Total supply: $sup5";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$ltc"));
        }else if (strpos($text, "/coindash") === 0) {
                $tick6 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/dash/');
$p6 = json_decode($tick6,TRUE)[0]["price_usd"];
$pb6 = json_decode($tick6,TRUE)[0]["price_btc"];
$name6 =json_decode($tick6,TRUE)[0]["name"];
$sym6 = json_decode($tick6,TRUE)[0]["symbol"];
$r6 = json_decode($tick6,TRUE)[0]["rank"];
$percent246 = json_decode($tick6,TRUE)[0]["percent_change_24h"];
$percent7d6 = json_decode($tick6,TRUE)[0]["percent_change_7d"];
$v6 = json_decode($tick6,TRUE)[0]["24h_volume_usd"];
$sup6 = json_decode($tick6,TRUE)[0]["total_supply"];
$dash = "Name: $name6 \n Symbol: $sym6 \n Rank: $r6 \n Price USD: $$p6 \n Price BTC: $pb6 BTC \n  Percent change 24h: $percent246 \n Percent change: 7d $percent7d6 \n 24h Volume: $v6 \n Total supply: $sup6";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$dash"));
        } else if (strpos($text, "/coinneo") === 0) {
                $tick7 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/neo/');
$p7 = json_decode($tick7,TRUE)[0]["price_usd"];
$pb7 = json_decode($tick7,TRUE)[0]["price_btc"];
$name7 =json_decode($tick7,TRUE)[0]["name"];
$sym7 = json_decode($tick7,TRUE)[0]["symbol"];
$r7 = json_decode($tick7,TRUE)[0]["rank"];
$percent247 = json_decode($tick7,TRUE)[0]["percent_change_24h"];
$percent7d7 = json_decode($tick7,TRUE)[0]["percent_change_7d"];
$v7 = json_decode($tick7,TRUE)[0]["24h_volume_usd"];
$sup7 = json_decode($tick7,TRUE)[0]["total_supply"];
$neo = "Name: $name7 \n Symbol: $sym7 \n Rank: $r7 \n Price USD: $$p7 \n Price BTC: $pb7 BTC \n  Percent change 24h: $percent247 \n Percent change: 7d $percent7d7 \n 24h Volume: $v7 \n Total supply: $sup7";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$neo"));
        }else if (strpos($text, "/coinnem") === 0) {
                $tick8 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/nem/');
$p8 = json_decode($tick8,TRUE)[0]["price_usd"];
$pb8 = json_decode($tick8,TRUE)[0]["price_btc"];
$name8 =json_decode($tick8,TRUE)[0]["name"];
$sym8 = json_decode($tick8,TRUE)[0]["symbol"];
$r8 = json_decode($tick8,TRUE)[0]["rank"];
$percent248 = json_decode($tick8,TRUE)[0]["percent_change_24h"];
$percent7d8 = json_decode($tick8,TRUE)[0]["percent_change_7d"];
$v8 = json_decode($tick8,TRUE)[0]["24h_volume_usd"];
$sup8 = json_decode($tick8,TRUE)[0]["total_supply"];
$nem = "Name: $name8 \n Symbol: $sym8 \n Rank: $r8 \n Price USD: $$p8 \n Price BTC: $pb8 BTC \n  Percent change 24h: $percent248 \n Percent change: 7d $percent7d8 \n 24h Volume: $v8 \n Total supply: $sup8";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$nem"));
        }else if (strpos($text, "/coinxmr") === 0) {
                $tick9 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/monero/');
$p9 = json_decode($tick9,TRUE)[0]["price_usd"];
$pb9 = json_decode($tick9,TRUE)[0]["price_btc"];
$name9 =json_decode($tick9,TRUE)[0]["name"];
$sym9 = json_decode($tick9,TRUE)[0]["symbol"];
$r9 = json_decode($tick9,TRUE)[0]["rank"];
$percent249 = json_decode($tick9,TRUE)[0]["percent_change_24h"];
$percent7d9 = json_decode($tick9,TRUE)[0]["percent_change_7d"];
$v9 = json_decode($tick9,TRUE)[0]["24h_volume_usd"];
$sup9 = json_decode($tick9,TRUE)[0]["total_supply"];
$xmr = "Name: $name9 \n Symbol: $sym9 \n Rank: $r9 \n Price USD: $$p9 \n Price BTC: $pb9 BTC \n  Percent change 24h: $percent249 \n Percent change: 7d $percent7d9 \n 24h Volume: $v9 \n Total supply: $sup9";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$xmr"));
        }else if (strpos($text, "/coinetc") === 0) {
                $tick10 = file_get_contents('https://api.coinmarketcap.com/v1/ticker/ethereum-classic/');
$p10 = json_decode($tick10,TRUE)[0]["price_usd"];
$pb10 = json_decode($tick10,TRUE)[0]["price_btc"];
$name10 =json_decode($tick10,TRUE)[0]["name"];
$sym10 = json_decode($tick10,TRUE)[0]["symbol"];
$r10 = json_decode($tick10,TRUE)[0]["rank"];
$percent2410 = json_decode($tick10,TRUE)[0]["percent_change_24h"];
$percent7d10 = json_decode($tick10,TRUE)[0]["percent_change_7d"];
$v10 = json_decode($tick10,TRUE)[0]["24h_volume_usd"];
$sup10 = json_decode($tick10,TRUE)[0]["total_supply"];
$etc = "Name: $name10 \n Symbol: $sym10 \n Rank: $r10 \n Price USD: $$p10 \n Price BTC: $pb10 BTC \n  Percent change 24h: $percent2410 \n Percent change: 7d $percent7d10 \n 24h Volume: $v10 \n Total supply: $sup10";
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "$etc"));
        }else if (strpos($text, "/kanal") === 0){
//            apiRequestWebhook("sendMessage", array('chat_id' => $chat_id, "parse_mode" => "HTML", "reply_to_message_id" => $message_id, "text" => $text));
            if (in_array($message['chat']['id'], $admins)) {
                
              
            } else {
                apiRequest("sendMessage", array('chat_id' => $chat_id, "reply_to_message_id" => $message_id, "text" => 'You have no access to sending messages to channel'));
            }
        } else {
            apiRequest("sendMessage", array('chat_id' => $chat_id, "parse_mode" => "HTML", "text" =>  'Sorry, The command you sent is not valid for me.'));
        }
    } else {
        apiRequest("sendMessage", array('chat_id' => $chat_id, "reply_to_message_id" => $message_id, "text" => 'Hello! Thanks fo adding me to your group! Send /coin(coin symbol) to see the price and info of the coin (Example /coinbtc).'));
    }

}

?>

