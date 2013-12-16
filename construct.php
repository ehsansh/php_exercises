<?php

class Example{

	public function __construct($text){
		$this->saySomething($text);
	}

	public function saySomething($text){
		echo $text;
	}

}


$example = new Example('hello');






?>
