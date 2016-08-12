<?php

$_ENV = include __DIR__ . '/../../env.php';
require_once '../db_connect.php';
CREATE DATABASE the_league_db;



$dbc->exec('DROP DATABASE IF EXISTS adlister_db');
USE adlister_db;

$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);