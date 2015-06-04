<?php 
class CoffeeMaker implements BeverageMaker{

	public function Make()
	{
		return new Coffee();
	}
	
}