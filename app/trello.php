<?php
$query = array(
  'key' => env('TRELLO_APP_KEY'),
  'token' => env('TRELLO_APP_TOKEN'),
  'idList' => '5abbe4b7ddc1b351ef961414'
);

$response = Unirest\Request::post(
  'https://api.trello.com/1/cards',
  $query
);

var_dump($response)
?>