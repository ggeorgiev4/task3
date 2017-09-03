class Animal{

	var $age;

	function set_age($new_age) {
		$this->age = $new_age;
	}

	function get_age() {
		return $this->age;
	}

	function eat(){
		echo "Num num num\n";
	}

	function sleep(){
		echo "Zzzzzzz\n";
	}
}

interface Predator{
	
	public function attack(){}

}

interface Flying{

	function fly(){}

}

class Dolphin extends Animal{
	
	function swim(){
		echo "Splah\n";
	}

}

class Lion extends Animal implements Predator{
	
	function roar(){
		echo "Rahhh!\n";
	}

	function attack(){
		echo "POW!\n";
	}

}

class Eagle extends Animal implements Flying, Predator {
	
	function attack(){
		echo "POW!\n";
	}

	function fly(){
		echo "whoo Hooo!\n";
	}

}

class Bee extends Animal implements Flying{
	
	function fly(){
		echo "whoo Hooo!\n";
	}

}