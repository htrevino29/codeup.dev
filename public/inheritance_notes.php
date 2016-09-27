<?php

class Person
{
	public $firstName;
	public $lastName;

	public function __construct($firstName, $lastName)
	{
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }
}

$person = new Person('Cameron', 'Holland');
$person->capeColor = 'black';
$person->psudonym = 'Super Cameron';
echo 'Hello'.$person->alterEgo().PHP_EOL;
echo 'Hello '.$person->fullName().PHP_EOL;

