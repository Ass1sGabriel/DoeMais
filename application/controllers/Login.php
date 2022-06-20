<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$dados["title"] = "DoeMais - Login";
		$this->load->view('pages/view_login', $dados);
	}

	public function store()
	{
		$email  = $_POST["email"];
		$senha 	= md5($_POST["senha"]);
		$user   = $this->login_model->store($email, $senha);

		if ($user['status'] == "inativo") {
			$this->session->set_flashdata(
				'usuario_inativo',
				'<div class="error">Usuário inativo, favor entrar em contato com o suporte!</div>'
			);
			redirect('login');
		} else {
			if ($user) {
				$this->session->set_userdata("logged_user", $user);
				redirect("dashboard");
			} else {
				$this->session->set_flashdata(
					'usuario_incorreto',
					'<div class="error">Email e (ou) senha incorretos, informe seus dados e tente novamente!</div>'
				);
				redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("logged_user");
		redirect('login');
	}
}
