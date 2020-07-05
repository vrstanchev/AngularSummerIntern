<?php
require 'vendor/autoload.php';
use SQLiteConnection;
$pdo=(new SQLiteConnection)->connect();
if($pdo!=null){
echo 'Connection Successful';
}
else {  echo 'There is a error';         }








?>
