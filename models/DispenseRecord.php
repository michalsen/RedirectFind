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
    $record = R::dispense('history');
    $record->gnl_lead = $dispense[0];
    $record->sf_lead  = $dispense[1];
    $record->response = $dispense[2];
    $record->status   = $dispense[3];
    $record->audit   = date("Y-m-d H:i:s");
    $id = R::store($record);
      return $dispense;
    }
}

