<?php 
class Teams_model extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}
	/*
	public function get_teams($slug = FALSE)
	{
		
		if($slug === FALSE)
		{
			$query = $this->db->get('teams');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('teams',array('slug' => $slug));
		return $query->row_array();
	}
	*/
	
	public function get_teams() //to fetch all teams data
	{
		$query = $this->db->get('teams');
		return $query->result_array();
	}
	
	public function get_teams_slug($slug) //to fetch specific teams data by slug
	{
		$this->db->select('*');
		$this->db->from('teams');
		$this->db->where('slug', $slug);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function create_team()
	{
		$this->load->helper('url');
		//$this->load->helper('string');
		
		$slug = url_title($this->input->post('name'),'dash',TRUE);
		//$random_string = random_string('numeric', 4);
		
		$data = array(
			//'id' => $this->input->post($random_string),
			'name' => $this->input->post('name'),
			'city' => $this->input->post('city'),
			'homeBase' => $this->input->post('homeBase'),
			'slug' => $slug,
			'homeKitColor' => $this->input->post('homeKitColor'),
			'awayKitColor' => $this->input->post('awayKitColor'),
			'description' => $this->input->post('description'),
			'awards' => $this->input->post('awards'),
			'sponsor' => $this->input->post('sponsor'),
			'sponsorWebsite' => $this->input->post('sponsorWebsite')
		);
		
		return $this->db->insert('teams', $data);
	}
	
	public function update_team($data)
	{
		$this->load->helper('url');
		//$this->load->helper('string');
		
		//$slug = url_title($this->input->post('name'),'dash',TRUE);
		//$random_string = random_string('numeric', 4);
		
		$this->db->where('slug', $slug);
		$this->db->update('teams', $data);
		
		
		return $this->db->affected_rows();
		
	}

}

