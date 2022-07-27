<?php

class Entidades_doacao_model extends CI_model
{
	public function index()
	{
		$this->db->where("status", "ativo");
		$this->db->order_by("cidade", "ASC");
		return $this->db->get("entidades")->result_array();
	}

	public function dashboard_index()
	{
		$sql = "SELECT sum(valor) as valor FROM doacoes WHERE status = 2";
		$result = $this->db->query($sql);
		return $result->row()->valor;
	}

	public function principal_index()
	{
		$this->db->where("status", "ativo");
		$this->db->order_by("nome", "ASC");
		return $this->db->get("entidades")->result_array();
	}

	public function gerir_adm_index()
	{
		$this->db->order_by("id", "DESC");
		return $this->db->get("doacoes")->result_array();
	}

	public function gerir_usuario_index()
	{
		$this->db->where("idUsuarioDoador", $_SESSION["logged_user"]["id"]);
		$this->db->order_by("id", "DESC");
		return $this->db->get("doacoes")->result_array();
	}

	public function store($user)
	{
		$this->db->insert("entidades", $user);
	}

	public function grava_doacao($user)
	{
		$this->db->insert("doacoes", $user);
	}

	public function show($id)
	{
		return $this->db->get_where("entidades", array(
			"id" => $id
		))->row_array();
	}

	public function update($id, $user)
	{
		$this->db->where("id", $id);
		return $this->db->update("entidades", $user);
	}
}
