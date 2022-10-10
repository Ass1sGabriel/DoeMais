<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model("entidades_model");
	}

    public function index()
	{
		$dados["entidades"]  = $this->entidades_model->principal_index();
		$dados["title"] = "DoeMais - Início";

		$this->load->view('pages/publico/view_landing_page', $dados);
	}

}