<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar extends CI_Controller
{

	public function index()
	{
		$dados["title"] = "Sign Up - DoeMais";
		$this->load->view('pages/view_cadastrar', $dados);
	}

	public function store()
	{
		$this->load->model("usuarios_model");
		$user = array(
			"nome" => $_POST["nome"],
			"email" => $_POST["email"],
			"cidade" => $_POST["cidade"],
			"senha" => md5($_POST["senha"])
		);

		$this->usuarios_model->store($user);
		redirect("login");
	}

}
