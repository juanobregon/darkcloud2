<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->model('bat');	
		$data['bat'] = new Bat;
		$this->load->model('SewerRat');	
		$data['sewer_rat'] = new SewerRat;
		$this->load->model('Froggy');	
		$data['froggy'] = new Froggy;
		$this->load->model('Clown');	
		$data['clown'] = new Clown;
		$this->load->model('Turtle');	
		$data['turtle'] = new Turtle;
		$this->load->model('BaronBalloon');	
		$data['baron_balloon'] = new BaronBalloon;
		$this->load->model('NightStalker');	
		$data['night_stalker'] = new NightStalker;
		$this->load->view('home', $data);
	}
}
