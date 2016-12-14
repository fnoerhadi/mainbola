<?php
//teams CI controller
class Teams extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Teams_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['teams'] = $this->Teams_model->get_teams();
		$data['title'] = 'Teams';
		
		//$this->load->view('templates/header', $data);
        $this->load->view('teams/index', $data);
		//$this->load->view('templates/footer');
	}

	public function view($slug = NULL)
	{
		$data['teams_profile'] = $this->Teams_model->get_teams_slug($slug);
		
		if (empty($data['teams_profile']))
        {
                show_404();
        }
		
		$data['name'] = $data['teams_profile']['name'];
		
		//$this->load->view('templates/header', $data);
        $this->load->view('teams/view', $data);
        //$this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a team profile';
		
		$this->form_validation->set_rules('name', 'Team Name', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('homeBase', 'Home Base', 'required');
		$this->form_validation->set_rules('date', 'Date Founded', 'required');
		//$this->form_validation->set_rules('homeBase', 'Home Base', 'required');
		$this->form_validation->set_rules('homeKitColor', 'Home Kit Color', 'required');
		$this->form_validation->set_rules('awayKitColor', 'Away Kit Color', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		//$this->form_validation->set_rules('awards', 'Awards', 'required');
		//$this->form_validation->set_rules('sponsor', 'Sponsor', 'required');
		//$this->form_validation->set_rules('sponsorWebsite', 'Sponsor Website', 'required');
		
		if ($this->form_validation->run()=== FALSE)
		{
			$this->load->view('teams/create', $data);
		}
		else
		{
			$this->Teams_model->create_team();
			$this->load->view('teams/success');
		}
	}
	
	public function update($slug = NULL)
	{
		//fetch data of team and display in the view
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['teams_profile'] = $this->Teams_model->get_teams_slug($slug);
		$data['title'] = 'Update a team profile';
		//$this->load->view('teams/update', $data);
		
		//set validation rules
		$this->form_validation->set_rules('name', 'Team Name', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('homeBase', 'Home Base', 'required');
		$this->form_validation->set_rules('date', 'Date Founded', 'required');
		//$this->form_validation->set_rules('teamWebsite', 'Sponsor Website', 'required');
		$this->form_validation->set_rules('homeKitColor', 'Home Kit Color', 'required');
		$this->form_validation->set_rules('awayKitColor', 'Away Kit Color', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		//$this->form_validation->set_rules('awards', 'Awards', 'required');
		//$this->form_validation->set_rules('sponsor', 'Sponsor', 'required');
		//$this->form_validation->set_rules('sponsorWebsite', 'Sponsor Website', 'required');
		
		if ($this->form_validation->run()=== FALSE)
		{
			//fail validation
			$this->load->view('teams/update', $data);
		}
		else
		{
			$data = array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'city' => $this->input->post('city'),
				'homeBase' => $this->input->post('homeBase'),
				'slug' => $slug,
				'founded' => $this->input->post('founded'),
				'sponsor' => $this->input->post('sponsor'),
				'sponsorWebsite' => $this->input->post('sponsorWebsite'),
				'teamWebsite' => $this->input->post('teamWebsite'),
				'homeKitColor' => $this->input->post('homeKitColor'),
				'awayKitColor' => $this->input->post('awayKitColor'),
				'description' => $this->input->post('description'),
				'awards' => $this->input->post('awards')
			);
			
			$this->Teams_model->update_team($data);
			$this->load->view('teams/success');
		}
	}
}
