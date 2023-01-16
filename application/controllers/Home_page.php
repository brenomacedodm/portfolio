<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('projeto_model', 'projetos');
	}
	public function index(){
		$dados['projetos'] = $this->projetos->get_projetos();


		$this->load->view('index', $dados);
	}
}
