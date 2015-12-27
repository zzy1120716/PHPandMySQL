<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/30
 * Time: 22:53
 */
class myException extends Exception {
	function __toString(){
		return "<table border='1'>
							<tr>
								<td><strong>Exception ".$this->getCode()."</strong>: ".$this->getMessage()."<br/> in ".$this->getFile()." on line ".$this->getLine()."</td>
							</tr>
						</table><br/>";
	}
}

try {

	throw new myException("A terrible error has occurred", 42);

} catch (myException $m) {

	echo $m;

}