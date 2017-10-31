<?php

/**
 *  Get list of pages
 */
class GetList {
  public $list = array();

  public function __construct()
    {
      $this->list = $this->getlist();
    }

  public function getlist()
  {
      $all = R::getCol('SELECT name FROM site');
      return $all;
    }
}
