<?php

	class Usuarios_model extends CI_model
	{
		public function index()
		{
			return $this->db->get("usuarios")->result_array();
		}

		public function dashboard_index()
		{
			return $this->db->count_all_results("usuarios");
		}

		public function store($user)
		{
			$this->db->insert("usuarios", $user);
		}

		public function show($id)
		{
			return $this->db->get_where("usuarios", array(
				"id" => $id
			))->row_array();
		}

		public function update($id, $user)
		{
			$this->db->where("id", $id);
			return $this->db->update("usuarios", $user);
		}
	
	}
