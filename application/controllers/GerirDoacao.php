<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GerirDoacao extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("entidades_doacao_model");
	}

	public function adm_index()
	{
		$dados["doacoes"]  = $this->entidades_doacao_model->gerir_adm_index();
		$dados["title"] = "Gerir Doações - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/view_gerir_doacao', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function usuario_index()
	{
		$dados["doacoes"]  = $this->entidades_doacao_model->gerir_usuario_index();
		$dados["title"] = "Minhas Doações - DoeMais";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/view_gerir_doacao', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function grava_doacao()
	{
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model("entidades_doacao_model");
		$entidade = array(
			"entidade" => $_POST["entidade"],
			"valor" => $_POST["valor"],
			"idUsuarioDoador" => $_SESSION["logged_user"]["id"],
			"data" => date("Y-m-d H:i:s") 
		);

		$this->entidades_doacao_model->grava_doacao($entidade);
		redirect("entidadesdoacao");
	}

	// public function doar($id)
	// {
	// 	$dados["entidade"]  = $this->entidades_doacao_model->show($id);
	// 	$dados["title"] = "Finalizar - DoeMais";

	// 	$this->load->view('templates/header', $dados);
	// 	$this->load->view('templates/nav-top', $dados);
	// 	$this->load->view('pages/view_fazer_doacao', $dados);
	// 	$this->load->view('templates/footer', $dados);
	// 	$this->load->view('templates/js', $dados);
	// }

	// public function update($id)
	// {
	// 	$entidade = $_POST;
	// 	$this->entidades_doacao_model->update($id, $entidade);
	// 	redirect("entidades");
	// }

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
