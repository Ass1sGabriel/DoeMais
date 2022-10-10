<?php

	class Entidades_model extends CI_model
	{
		public function index()
		{
			return $this->db->get("entidades")->result_array();
		}

		public function dashboard_index()
		{
			return $this->db->count_all_results("entidades");
		}

		public function principal_index()
		{
			$this->db->where("status", "ativo");
			$this->db->order_by("nome", "ASC");
			return $this->db->get("entidades", 4)->result_array();
		}

		public function store($user)
		{
			$this->db->insert("entidades", $user);
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
