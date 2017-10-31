<?php

/**
 *  Add / Update db record
 */
class DispenseRecord {
  public $dispense = array();

  public function __construct($dispense)
    {
      $this->dispense = $this->record($dispense);
    }

  public function record($dispense)
  {
    $record = R::dispense('site');
    $record->name = $dispense;
    $record->audit   = date("Y-m-d H:i:s");
    $id = R::store($record);
      return $dispense;
    }
}

