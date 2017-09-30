<?php

class Juliet extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$record = $this->quotes->get(1);
		header("Content-type: application/json");
		echo json_encode($record);
	}

}