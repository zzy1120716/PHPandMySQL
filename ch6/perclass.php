<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/30
 * Time: 21:25
 */

class Math
{
	const pi = 3.14159;
	static function squared($input) {
		return $input * $input;
	}
}
echo "<h1>Per-Class常量、静态方法</h1>";
echo " Math::pi = ".Math::pi."\n";
echo " Math::squared(8) -> ".Math::squared(8)."\n";

interface Displayable
{
	function display();
}

class webPage implements Displayable
{
	function display(){
		echo "这个类实现了接口Displayable<br/>";
	}
}

class animation implements Displayable
{
	function display(){
		echo "这个类以另一种方式实现了接口Displayable<br/>";
	}
}

echo "<h1>接口的实现</h1>";
$homePage = new webPage();
$homeAnimation = new animation();
$homePage -> display();
$homeAnimation -> display();
echo '$homePage instanceof webPage -> '.$homePage instanceof webPage."<br/>";
echo '$homeAnimation instanceof webPage -> '.$homeAnimation instanceof webPage."<br/>";
echo '$homePage instanceof Displayable -> '.$homePage instanceof Displayable."<br/>";

echo "<h1>PHP的类型提示</h1>";
function check_hint(webPage $a){
	echo "这个函数传入了一个类型为webPage的类类型的参数<br/>";
}

//check_hint($homeAnimation);  Catchable fatal error: Argument 1 passed to check_hint() must be an instance of webPage, instance of animation given

class A {
	public static function who(){
		echo __Class__;
	}
	public static function test(){
		static::who();  // Here comes Late Static Bindings
	}
}

class B extends A {
	public static function who(){
		echo __CLASS__;
	}
}
echo "<h1>延时静态绑定</h1>";
B::test();

echo "<h1>克隆对象</h1>";
$c = clone $homePage;

echo "<h1>使用抽象类</h1>";
abstract class MyAbstractClass
{
	abstract function operationX($param1, $param2);
}

echo "<h1>使用__call()重载方法</h1>";
/*class overload {

	public function _call($method, $p)
	{
		if($method == "display") {
			if(is_object($p[0])) {
				$this -> displayObject($p[0]);
			} else if(is_array($p[0])) {
				$this -> displayArray($p[0]);
			} else {
				$this -> displayScalar($p[0]);
			}
		}
	}

	public function displayObject(webPage $a){}
	public function displayArray(array $a){
		var_dump($a);
	}
	public function displayScalar($a){
		echo "$a<br/>";
	}

}

$ov = new overload;
$ov -> display(array(1,2,3));
$ov -> display('cat');*/

echo "<h1>迭代器</h1>";
class MyClassClass {
	public $a = "2";
	public $b = "5";
	public $c = "8";
}
$x = new MyClassClass;
foreach($x as $attribute) {
	echo $attribute."<br/>";
}






















