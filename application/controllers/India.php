<?php

class India extends CI_Controller
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
		// The following should be a relative link to your image file above
		$source = '../data/cool.jpg'; 
		// note that we could have referenced an image anywhere on our system

		// set the mime type for that image (jpeg, png, etc)
		header("Content-type: image/jpeg"); 
		header('Content-Disposition: inline');
		readfile($source); // dish it
	}

}