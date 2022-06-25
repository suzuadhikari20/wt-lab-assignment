<?php
class Task
{
	//type lekhnu compulsory chaina
	public String $name;
	public Boolean $isComplete;

	public function setName($name)//:void
	{
		$this ->name = $name;
	}

	public function getName()//:String
	{
		return $this ->name;
	}
	public function markAsComplete()
	{
		$this ->isComplete = true;
	}

}
//Task $task=new Task();
$task=new Task;
?>