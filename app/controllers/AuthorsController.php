<?php

class AuthorsController extends BaseController {
 
  public $restful = true;
  public $layout = 'layouts.default';

  public function getIndex()
  {
    $view = View::make('authors.index', array('name'=>'Andrew Perkins'))
      ->with('age','28');
    $view->location = 'California';
    $view['specialty'] = 'PHP';
    $this->layout->title = 'Authors and Books from Controller';
    $this->layout->content = $view;
  }
}