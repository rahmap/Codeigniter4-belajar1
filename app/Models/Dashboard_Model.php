<?php namespace App\Models;

use CodeIgniter\Model;

class Dashboard_Model extends Model
{

  protected $db;

  public function __construct()
  {
    $this->db = \Config\Database::connect();
  }

}
