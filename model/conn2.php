<?php

$conn = new mysqli("localhost","root","","srms");
if(!$conn){
    die("Could not connect to DB");
}