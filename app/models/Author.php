<?php

class Author extends Eloquent {

  //public static $table = 'authors';
  protected $table = 'authors';
  protected $fillable = array('name','bio');
  protected $accessible = array('name','bio');

  public static $rules = array(
    'name'=>'required|min:2',
    'bio'=>'required|min:10'
  );

  public static function validate($data){
    return Validator::make($data, static::$rules);
  }

}