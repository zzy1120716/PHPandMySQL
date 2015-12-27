<?php

/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/29
 * Time: 22:44
 */
class MyClass
{
	//构造函数
	function __construct($param){
		echo "Constructor called with parameter ".$param.".<br/>";
	}

	public $attribute;

	/**
	 * @return mixed
	 */
	public function getAttribute()
	{
		return $this->attribute;
	}

	/**
	 * @param mixed $attribute
	 */
	public function setAttribute($attribute)
	{
		$this->attribute = $attribute;
	}

	function operation(){
		$this -> attribute;
		echo $this -> attribute;
	}
}
echo "构造函数<br/>";
$a = new MyClass("First");
$b = new MyClass("Second");
$c = new MyClass("Third");

$a->attribute = "value";//赋值
echo $a->attribute."<br/>";

class A
{
	public $lila;

	function say_something(){
		echo "blah blah blah......<br/>";
	}

	private function operation1(){
		echo "operation1 called<br/>";
	}
	protected function operation2(){
		echo "operation2 called<br/>";
	}
	public function operation3(){
		echo "operation3 called<br/>";
	}
}

class B extends A
{
	function __construct(){
		//$this -> operation1();  Fatal error: Call to private method A::operation1() from context 'B'
		$this -> operation2();
		$this -> operation3();
	}

	public $lilb;
	function do_something(){
		echo "roam roam roam......<br/>";
	}
}

echo "类的继承<br/>";
$b = new B();
//$b -> operation2();  Fatal error: Call to protected method A::operation2() from context ''
$b -> say_something();
$b -> lila = 10;
$b -> do_something();
$b -> lilb = 10;

class C
{
	public $attribute = "default value";
	function operation(){
		echo "Something<br/>";
		echo "The value of \$attribute is ". $this -> attribute. "<br/>";
	}
}

class D
{
	public $attribute = "different value";
	function operation(){
		echo "Something else<br/>";
		echo "The value of \$attribute is ". $this -> attribute. "<br/>";
	}
}
echo "方法与属性的重载<br/>";
$c = new C();
$c -> operation();
$d = new D();
$d -> operation();
//parent::operation();
