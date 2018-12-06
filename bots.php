<?php

function useronline_get_bots() {
	$bots = array(

'360Spider' => '360Spider',
'AddThis' => 'AddThis',
'Ahrefs' => 'AhrefsBot',
'Alex' => 'ia_archiver',
'AllTheWeb' => 'fast-webcrawler',
'Altavista' => 'scooter',
'Amazon' => 'amazonaws.com',
'AndersPinkBot' => 'AndersPinkBot',
'Applebot' => 'Applebot',
'archive.org_bot' => 'archive.org_bot',
'Ask Jeeves' => 'jeeves',
'Baidu' => 'baidu',
'Become.com' => 'become.com',
'BingBot' => 'bingbot',
'BingPreview' => 'BingPreview',
'BLEXBot' => 'BLEXBot',
'Bloglines' => 'bloglines',
'BlogSearch' => 'blogsearch',
'BUbiNG' => 'BUbiNG',
'CCBot' => 'CCBot',
'CFNetwork' => 'CFNetwork',
'Cliqzbot' => 'Cliqzbot',
'crawl' => 'crawl',
'Curl' => 'Curl',
'DotBot' => 'DotBot', 
'DuckDuckBot' => 'DuckDuckBot',
'EveryoneSocialBot' => 'EveryoneSocialBot',
'Exabot' => 'Exabot',
'facebook' => 'facebook', 
'facebookexternalhit' => 'facebookexternalhit',
'facebot' => 'facebot',
'Feedfetcher' => 'Feedfetcher',
'Findexa' => 'findexa',
'FlipboardProxy' => 'FlipboardProxy',   
'Gais' => 'gaisbo',
'Gigabot' => 'gigabot',
'Gluten Free Crawler' => 'Gluten Free Crawler',
'Google Bot' => 'google',
'GridBot' => 'GridBot',
'GroupHigh' => 'GroupHigh',
'heritrix' => 'heritrix',
'ia_archiver' => 'ia_archiver',
'Inktomi' => 'slurp@inktomi',
'ips-agent' => 'ips-agent',
'James BOT' => 'James BOT',
'KomodiaBot' => 'KomodiaBot',
'Konqueror' => 'Konqueror',
'linkdexbot' => 'linkdexbot',
'linkfluence' => 'linkfluence',
'Lycos' => 'lycos',
'MauiBot' => 'MauiBot',
'Mediatoolkitbot' => 'Mediatoolkitbot',
'MetaURI' => 'MetaURI',
'MJ12bot' => 'MJ12bot',
'MojeekBot' => 'MojeekBot',
'Moreover' => 'Moreover',
'MSN' => 'msnbot',
'nbot' => 'nbot',
'oBot' => 'oBot',
'NextLinks' => 'findlinks',
'PaperLiBot' => 'PaperLiBot',
'PhantomJS' => 'PhantomJS',
'proximic' => 'proximic',
'PubSub' => 'pubsub',
'Qwantify' => 'Qwantify',
'radian6' => 'radian6',
'RadioUserland' => 'userland',
'rogerbot' => 'rogerbot',  
'SEOkicks-Robot' => 'SEOkicks-Robot',
'SemrushBot' => 'SemrushBot',
'Seznam' => 'Seznam',
'SiteExplorer' => 'SiteExplorer',
'Slurp' => 'Slurp',
'Sogou' => 'Sogou',
'spbot' => 'spbot',
'SurveyBot' => 'SurveyBot',
'Syndic8' => 'syndic8',
'Technorati' => 'technorati',
'TelegramBot' => 'TelegramBot',
'tracemyfile' => 'tracemyfile',
'Trendsmap' => 'Trendsmap',
'Turnitin.com' => 'turnitinbot',
'tweetedtimes' => 'tweetedtimes',
'TweetmemeBot' => 'TweetmemeBot',
'Twingly' => 'Twingly',
'Twitterbot' => 'Twitterbot',
'wget' => 'wget',
'Wget' => 'Wget',
'WhatsApp' => 'WhatsApp',
'WhoisSource' => 'surveybot',
'WiseNut' => 'zyborg',
'Xenu Link Sleuth' => 'Xenu Link Sleuth',
'XoviBot' => 'XoviBot',
'Yahoo' => 'yahoo',
'Yandex' => 'yandex',
'YisouSpider' => 'YisouSpider'

	);

	return apply_filters( 'useronline_bots', $bots );
}

