<?php 
$_ENV = require __DIR__ . '/../../.env.php';
require("../db_connect.php");
require_once __DIR__ . '/../../models/Items.php';
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$list = "TRUNCATE items";
$dbc->exec($list);

$items = new items;
$items->name = 'Thor\'s Hammer';
$items->price = 100;
$items->description = 'Thor\'s hammer makes thunder I guess?';
$items->keywords = 'weapons';
$items->date_added = '2016-08-11';
$items->username = "finn_the_human";
$items->img_url = 'hammer.png';
$items->featured = 1;
$items->save();

$items = new items;
$items->name = 'Loki\'s Helmet';
$items->price = 150;
$items->description = 'Weird horn things. Looks kinda cool.';
$items->keywords = 'armor';
$items->date_added = '2016-08-11';
$items->username = "ice_king";
$items->img_url = 'lokis_helmet.png';
$items->featured = 1;
$items->save();

$items = new items;
$items->name = 'Iron Man\'s Suit';
$items->price = 250;
$items->description = 'Is it actually made of iron or is that just his name. Iron is a bit old school. Comes with all the cool but none of the cash.';
$items->keywords = 'armor';
$items->date_added = '2016-08-12';
$items->username = "jake_the_dog";
$items->img_url = 'iron_man.png';
$items->featured = 0;
$items->save();

$items = new items;
$items->name = 'Hawkeye\'s Bow';
$items->price = 150;
$items->description = 'Bows are really trendy now. You could be the next Katniss!';
$items->keywords = 'weapon';
$items->date_added = '2016-08-14';
$items->username = "ice_king";
$items->img_url = 'hawkeye_bow.png';
$items->featured = 0;
$items->save();

$items = new items;
$items->name = 'Blackwidow\'s Suit';
$items->price = 100;
$items->description = 'Could possibly be more dangerous than her guns.';
$items->keywords = 'armor';
$items->date_added = '2016-08-15';
$items->username = "jake_the_dog";
$items->img_url = 'blackwidow.png';
$items->featured = 0;
$items->save();