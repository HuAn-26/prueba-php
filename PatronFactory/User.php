<?php 

class User{

	/**
	 * undocumented class variable
	 *
	 * @var string
	 **/
	private $properties;

	public function __construct(array $properties = array())
	{
		$this->properties = $properties;
	}

	public function __toString()
	{
		return $this->getName();
	}

	public function getName()
	{
		if (
			isset ($this->properties['name'])
			) 
		{
			return $this->properties['name'];
		}
		
		return 'Usuario';
	}

	public function drink($bebida)
	{
		return $this->getName() .' toma '. $bebida;
	}
}

