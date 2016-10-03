<?php
namespace App\Controller;

use App\Controller\AppController;

class UserController extends AppController{
	
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('requestHandler');
	}

	public function index(){}

	public function view($id){}

	public function add(){}

	public function edit($id){}

	public function delete($id){}	

}