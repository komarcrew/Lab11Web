<?php
namespace App\models;
use CodeIgniter\Model;
class UserModel extends model
{
	protected $table = 'user';
	protected $primarykey = 'id';
	protected $useAutoIncrement = true;
	protected $allowedFields = ['username', 'useremail', 'userpassword'];
}