<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index()
	{
		$dados["title"] = "DoeMais - Início";

		$this->load->view('pages/landing_page', $dados);
	}

}