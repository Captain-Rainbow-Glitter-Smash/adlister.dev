<?php

require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->username = "thecollector";
$user->profileImgSrc = "../../css/img/profileImg/the-collector.jpg";
$user->bannerImgSrc = "../../css/img/bannerImg/collector-background.jpg";
$user->attrOne = "Passionate Antiquer";
$user->attrTwo = "Curious Explorer";
$user->attrThree = "Superhero Geek";
$user->save();