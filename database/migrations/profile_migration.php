<?php

$_ENV = include __DIR__ . '/../../env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS profile');

$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    profileImgSrc VARCHAR(200) NULL,
    bannerImgSrc VARCHAR(200) NULL,
    attrOne VARCHAR(35) NULL,
    attrTwo VARCHAR(35) NULL,
    attrThree VARCHAR(35) NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);