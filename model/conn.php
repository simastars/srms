<?php

$conn = new PDO("mysql:host=localhost;dbname=srms;user=root;password=");
if(!$conn){
    die("Could not connect to DB");
}