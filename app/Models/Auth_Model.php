<?php namespace App\Models;

use CodeIgniter\Model;

class Auth_Model extends Model
{
  protected $table = 'member';
  protected $returnType = 'array';
  protected $allowedFields = ['member_nama', 'member_email', 'member_password', 'create_at', 'delete_at'];
  protected $primaryKey = 'member_id';
}
