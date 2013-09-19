<?php
if (!defined('IN_GGGT')) { die(); }

$config = array(

	'page'   => array(
		'date_format'     => 'M j, Y G:i A',
		'time_offset'     => 0,
	),
	
	'mysql'  => array(
		'host'            => '',
		'username'        => '',
		'password'        => '',
		'db_name'         => '',
		'pconnect'        => false,
	),

	'cron' => array(
		'secret'          => '',
	),
	
	'poe' => array(
		'forum_timezone'  => '',
		'forum_sessid'    => '',
		'news_forum_id'   => 54,
		'forum_posters'   => array(
			'Chris', 'Jonathan', 'Erik', 'Mark_GGG', 'Samantha', 'Rory', 'Rhys',
			'Qarl', 'Andrew_GGG', 'Damien_GGG', 'Russell', 'Joel_GGG', 'Ari', 'Thomas',
			'BrianWeissman', 'Edwin_GGG', 'Support', 'Dylan', 'MaxS', 'Ammon_GGG', 
			'Jess_GGG', 'Robbie_GGG', 'GGG_Neon', 'Jason_GGG', 'Henry_GGG', 'Luca_GGG',
			'Michael_GGG', 'Bex_GGG', 'Cagan_GGG',
		),
		'twitter_name'    => 'pathofexile',
	),
	
	'twitter' => array(
		'consumer_key'    => '',
		'consumer_secret' => '',
		'access_token'    => '',
		'access_secret'   => '',
	),
);

$local = @include('local_config.inc.php');

return $local ? array_replace_recursive($config, $local) : $config;
?>