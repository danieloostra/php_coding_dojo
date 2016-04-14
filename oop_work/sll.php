<?php

class Node{
	public $value;
	public $next;

	function __contruct($val) {
		$this->value = $val;
	}
}
class SLL {
	public $head;

	function add($val){
	if(!isset($this->head)){
		$this->head = new Node($val);
		return $this;
	}
	$temp = $this->head;
		while (isset($temp->next)) {
		$temp = $temp->next;
	}
	$temp->next = new Node($val);
	return $this;
	}
}


$mySLL = new SLL();
$myADDSLL = new SLL(50);
$mySLL = $myADDSLL;
var_dump($mySLL);

?>