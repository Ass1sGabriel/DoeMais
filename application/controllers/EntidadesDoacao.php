<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EntidadesDoacao extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("entidades_doacao_model");
	}

	public function index()
	{
		$dados["entidades"]  = $this->entidades_doacao_model->index();
		$dados["title"] = "Fazer Doação - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/view_entidades_doacao', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function new()
	{
		$dados["title"] = "Nova Entidade - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/form-entidades', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function store()
	{

		$this->load->model("entidades_doacao_model");
		$entidade = array(
			"nome" => $_POST["nome"],
			"email" => $_POST["email"],
			"cidade" => $_POST["cidade"],
			"descricao" => $_POST["descricao"],
			"cnpj" => $_POST["cnpj"],
			"status" => $_POST["status"]
		);

		$this->entidades_doacao_model->store($entidade);
		redirect("entidades");
	}

	public function doar($id)
	{
		$dados["entidade"]  = $this->entidades_doacao_model->show($id);
		$dados["title"] = "Finalizar - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/view_fazer_doacao', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function update($id)
	{
		$entidade = $_POST;
		$this->entidades_doacao_model->update($id, $entidade);
		redirect("entidades");
	}

	public function show($id)
	{
		return $this->db->get_where("entidades", array(
			"id" => $id
		))->row_array();
	}

	public function destroy($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("entidades");
		redirect("entidades");
	}
}
