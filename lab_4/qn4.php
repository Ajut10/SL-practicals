<?php

class Robot
{
	public function greet()
	{
		return 'Hello! <br>';
	}
}

class Android extends Robot
{
	public function greet()
	{
		return 'Hi';
	}
}

$robot = new Robot();

echo $robot->greet(); // Hello

$android = new Android();
echo $android->greet(); // Hi!