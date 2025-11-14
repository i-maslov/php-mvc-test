<?php

class Page
{
  private $pages = [
    'home' => [
      'title' => 'Main page',
      'content' => 'Welcome!'
    ],
    'github' => [
      'title' => 'MVC project',
      'url' => 'https://github.com/i-maslov/php-mvc-test'
    ],
    'contacts' => [
      'title'=> 'Contacts',
      'contacts' => [
        'email' => 'someemail@email.com',
        'phone' => 'Some phone number',
        'address' => 'Some address'
      ]
    ]
  ];

  public function getPageData($page)
  {
    return $this->pages[$page] ?? null;
  }
}
