<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->loadPage('pages/home','','Home');
	}

	public function loadPage($page,$data,$title){
		$content = $this->load->view($page,$data,true);
		$data = array(
			'content' => $content,
			'title' => $title,
			'url' => base_url()
		);
		$this->load->view('init',$data);
	}
}
