<?php

require_once __DIR__ . '/../models/Page.php';

class PageController
{
  private $model;

  public function __construct()
  {
    $this->model = new Page();
  }

  public function home()
  {
    $data = $this->model->getPageData('home');
    $title = $data['title'];
    $content = $data['content'];
    include __DIR__ . '/../views/home.php';
  }

  public function github()
  {
    $data = $this->model->getPageData('github');
    $title = $data['title'];
    $githubUrl = $data['url'];
    include __DIR__ . '/../views/github.php';
  }

  public function contacts()
  {
    $data = $this->model->getPageData('contacts');
    $title = $data['title'];
    $contacts = $data['contacts'];
    include __DIR__ . '/../views/contacts.php';
  }
}
