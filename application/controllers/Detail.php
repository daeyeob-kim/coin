<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	
	public function __construct(){
        parent::__construct();
        
        $this->load->library('Vd');
    	$this->load->model('M_project');
        
        $this->lang = initLangSetting($this->input->get('lang',true));
        
        $this->header_data = array(
        	"title" => "ICOGate",
        	"lang" => $this->lang
        );
        
        $this->footer_data = array(
        	'foo'=>'bar'
        );
    }
    
	public function index()
	{
		$project_id = $this->input->get('project_id', true);
		$symbol = $this->input->get('symbol', true);
		
		if(isset($symbol)){
			$project_id = $this->M_project->getIdBySimbol($symbol);
		}
		//정보가 없으면 alert (나중에 404리다이렉션으로 변경)
		
		if(!isset($project_id)){
			//alert('error');
			return;
		} else {
			$project = $this->M_project->getDetail($project_id);
		}
		
		if(!isset($project)){
			//alert('error');
			return;
		} else {
			$sns_list = $this->M_project->getSnsByProjectid($project_id);
			$person_list = $this->M_project->getPersonByProjectid($project_id);
			$reputation_list = $this->M_project->getReputationByProjectid($project_id);
		}

		$data = array(
			'project' => $project,
			'sns_list' => $sns_list,
			'person_list' => $person_list,
			'reputation_list' => $reputation_list,
			'lang' => $this->lang
		);
		
		$this->load->view('/common/header', $this->header_data);
		$this->load->view('/detail/index', $data);
		$this->load->view('/common/footer', $this->footer_data);
	}
}
