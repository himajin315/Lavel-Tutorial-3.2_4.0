<?php

class AuthorsController extends BaseController {
<<<<<<< HEAD
=======

  protected $layout = 'layout';
>>>>>>> parent of 2901a89... fix authors.index
 
  public $restful = true;
  public $layout = 'layouts.default';

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
<<<<<<< HEAD
    $view->location = 'California';
    $view['specialty'] = 'PHP';
    $this->layout->title = 'Authors and Books from Controller';
    $this->layout->content = $view;
=======
    $view->location='California';
    $view['specialty']= 'PHP';
    return $view;
    */
>>>>>>> parent of 2901a89... fix authors.index
  }
}