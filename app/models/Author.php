<?php

class Author extends Eloquent {

  //public static $table = 'authors';
  protected $table = 'authors';
  protected $fillable = array('name','bio');

}