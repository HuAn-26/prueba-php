<?php 
class AutenticationService{

	private sessionData;

	public function __construct(array $sessionData = array())
	{
		$this->sessionData = $sessionData;
	}

	public function NewUser()
	{
		return new User($this->sessionData);
	}
}
