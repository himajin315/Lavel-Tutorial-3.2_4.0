<?php

class AuthorsController extends BaseController {
 
  public $restful = true;

  public function getIndex()
  {
    return View::make('authors.index')
      ->with('title', 'Authors and Books')
      ->with('authors', Author::orderBy('name')->get());
  }

  public function getView($id)
  {
    return View::make('authors.view')
      ->with('title', 'Author View Page')
      ->with('authors', Author::find($id));
  }

  public function getNew()
  {
    return View::make('authors.new')
      ->with('title', 'Add New Author');
  }

  public function postCreate()
  {
    $validation = Author::validate(Input::all());

    if ($validation->fails()){
      return Redirect::route('newAuthor')->withErrors($validation)->withInput();
    } else {
      Author::create(array(
        'name'=>Input::get('name'),
        'bio'=>Input::get('bio')
      ));
      return Redirect::route('authors')
        ->with('message','The author was created successfully!');
    }
  }

  public function getEdit($id)
  {
    return View::make('authors.edit')
      ->with('title', 'Edit Author')
      ->with('author', Author::find($id));
  }

  public function putUpdate()
  {
    $id = Input::get('id');
    $validation = Author::validate(Input::all());

    if ($validation->fails()){
      return Redirect::route('editAuthor', $id )->withErrors($validation);
    } else {
      $author = Author::find($id);
      $author->name = Input::get('name');
      $author->bio = Input::get('bio');
      $author->save();
      /*
      Author::update(array(
        'name'=>Input::get('name'),
        'bio'=>Input::get('bio')
      ));
      */
      return Redirect::route('author', $id)
        ->with('message', 'Auhthor updated sucessfully!');
    }
  }

  public function deleteDestroy()
  {
    //Author::find(Input::get('id'))->delete();
    Author::destroy(Input::get('id'));
    return Redirect::route('authors')
      ->with('message', 'The author was deleted successfully!');
  }


}

