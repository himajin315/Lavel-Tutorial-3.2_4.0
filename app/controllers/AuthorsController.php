<?php

class AuthorsController extends BaseController {

 
  public $restful = true;

  public function getIndex()
  {
    $view = View::make('authors.index', array('name'=>'Andrew Perkins'))
      ->with('age','28');
    $view->location='California';
    $view['specialty']= 'PHP';
    return $view;
  }
}