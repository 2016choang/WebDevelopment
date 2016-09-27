<?php
require_once('TwitterAPIExchange.php');

$settings = array(
	'oauth_access_token' => "421194446-UupAHjYM03kHRamXvkGnb4fyoBUPvGGQyS9PjCQ7",
	'oauth_access_token_secret' => "gOJh1R3u3aJViRv6zSszfgiRr5Ysh6bP1Uc8jbAYrCI31",
	'consumer_key' => "aPr58TWyuMCVUuxsYWi3IgY9X",
	'consumer_secret' => "u0NUA6kZQ7fASPH5pcVfaMoqKQTmArYWBdWZUpTwNZznDqT9rF" 
);

$url = "https://api.twitter.com/1.1/search/tweets.json";
$requestMethod = "GET";
$query = $_GET['ticker'];
$getfield = '?query=%24'.$query.'&count=5';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(), $assoc = TRUE);

foreach($string as $items)
{
	echo $items['media_url']."<br />";
	echo "Tweeted at: ".$items['created_at']."<br />";
	echo "Tweet: ".$items['text']."<br />";
	echo "Tweeted by: ".$items['user']['name']."<br />";
	echo "Followers: ".$items['friends_count']."<br />";
	echo "Retweets: ".$items['retweet_count']."<br />";
}

?>