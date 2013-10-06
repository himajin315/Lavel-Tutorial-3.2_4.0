<?php

class AuthorsController extends BaseController {

  protected $layout = 'layout';
 
  public $restful = true;

  public function getIndex()
  {
    
    // laravel 4.0

    $view = View::make('authors', array('name'=>'Andrew Perkins'))
      ->with('age','28');
    $view->location='California';
    $view['specialty']= 'PHP';
    $this->layout->content = $view;


    // laravel 3.2

    /*
    $view = View::make('authors.index', array('name'=>'Andrew Perkins'))
      ->with('age','28');
    $view->location='California';
    $view['specialty']= 'PHP';
    return $view;
    */
  }
}