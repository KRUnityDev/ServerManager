<?php

class Server
{
	public $id;
	public $name;
	public $status;
	public $pid;
	public $description;

	function __construct($n_id)
	{
		$this->id = $n_id;
		$this->UpdateData();
	}
	function UpdateData()
	{
		$file = fopen("data/".$this->id.".txt",'r');
	    flock($file, 1);
	    while(!feof($file)) 
	    { 
	      $line = fgets($file, 2048);

	      $data[] = $line;
	    }

	    flock($file, 3);
		fclose($file);

		$this->name = $data[0];
		$this->status = $data[1];
		$this->pid = $data[2];
		$this->description = $data[3];

	}
}

function GetDataFromFile($src)
{
	global $Servers;
	global $i;
	
	$file = fopen($src,'r');
    flock($file, 1);
    $i = 0;
    while(!feof($file)) 
    { 
      $line = fgets($file, 2048);

      $srv = new Server($line);
      $Servers[] = $srv;

      $i++;
    }

    flock($file, 3);
	fclose($file);

}
GetDataFromFile("data.txt");

?>