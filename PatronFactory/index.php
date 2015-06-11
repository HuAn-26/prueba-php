<?php 

require('User.php');
require('coffee.php');
require('AutenticationService.php');
require('coffeemaker.php');
require('BarTender.php');

interface BeverageMaker{

	public function make();
}

class Controller 
{
	private $auth;

	public function __construct(AutenticationService $auth)
	{
		$this->auth = $auth;
	}
	
	public function action(BeverageMaker $BeverageMaker)
	{
		$user = $this->auth->NewUser();
		$Beverage = $BeverageMaker->Make();

		$message = $user->drink($Beverage);

		require 'view.php';
	}	
}

$autenticacion = new AutenticationService(array('name' => 'Hugo'));

$Controller = new Controller($autenticacion);
$Controller->action(new BarTender());