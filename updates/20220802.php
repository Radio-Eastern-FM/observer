<?php

class OBUpdate20220802 extends OBUpdate {

  public function items () 
  {
    $updates   = array();
    $updates[] = 'Add approved_on field to media model';
    return $updates;
  }

  public function run ()
  {
    $this->db->query('ALTER TABLE media ADD approved_on INT UNSIGNED NULL AFTER is_approved;');
    $this->db->query('ALTER TABLE media ADD approver INT NULL AFTER approved_on;');
    return true;
  }
}
