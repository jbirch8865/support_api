<?php

class trello
{
  private string $title;
  private array $query = [];
  private array $types = [
    2 => '5f5950fafee1aa64d24de0fe',
    3 => '5f5950ec45acc257462b1e11',
    1 => '5de013aeb8c0e9773f522fc1',
    4 => '5f5950dadc19e5321c8f9a23',
    5 => '5f5aaa2aec5c58140be719ff'
  ];
  public function __construct(string $title, string $username, int $type)
  {
    $this->title = $title;
    $this->query['key'] = env('TRELLO_APP_KEY');
    $this->query['token'] = env('TRELLO_APP_TOKEN');
    $this->query['idList'] = '5dd44627d679f586e550fc76';
    $this->query['idLabels'] = [$this->types[$type]];
    $this->query['name'] = $this->title;
    $this->query['desc'] = $username;
    $this->query['pos'] = 'top';
    $this->query['due'] = date('Y-m-d', strtotime("+1 days"));
  }
  function Create_Card()
  {
    return Unirest\Request::post(
      'https://api.trello.com/1/cards',
      [],
      http_build_query($this->query)
    );
  }
}
