<?php
//自動呼叫函式__set與__get的應用
//當取用一個類別私有成員時，會自動呼叫set/get函式
$obj = new CTest();
$obj->firstName = "Jeremy";
$name = $obj->firstName;
echo "<hr>";
echo $name;

	

class CTest {

	private $_dataBag = array();
	public function __set($varName, $varValue)
	{
		echo "__set<br>";
		echo $varName, ": ", $varValue, "<br>";
		$this->_dataBag[$varName] = $varValue;
	}

	public function __get($varName)
	{
		echo "__get<br>";
		echo $varName, "<br>";
		return $this->_dataBag[$varName];
	}
		
}


?>
