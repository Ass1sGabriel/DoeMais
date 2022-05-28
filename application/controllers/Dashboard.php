<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("entidades_model");
	}

	public function index()
	{
		$dados["entidades"]  = $this->entidades_model->dashboard_index();
		$dados["title"] = "Dashboard - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/dashboard', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}
