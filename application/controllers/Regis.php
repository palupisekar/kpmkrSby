<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
         $this->load->model('Mymodel');
         $this->load->library('email');

    }
	public function index()
	{
	
		$this->load->view('registration');
	}
	public function create(){
		$this->load->helper('form');
	    $this->load->library('form_validation');
	    $this->load->library('upload');
	    $is_submit = $this->input->post('is_submit');
	    if(isset($is_submit) && $is_submit == 1) {
	        $fileUpload = array();
	        $isUpload = FALSE;
	        $config = array(
	            'upload_path' => './assets/images/uploads/',
	            'allowed_types' => 'jpg|jpeg|png',
	            'max_size' => 512
	        );
        $this->upload->initialize($config);
        if($this->upload->do_upload('ktp')) {
            $fileUpload = $this->upload->data();
            $isUpload = TRUE;
        }
        if($this->upload->do_upload('ktm')) {
            $fileUpload = $this->upload->data();
            $isUpload = TRUE;
        }
        if($isUpload) {
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'asal' => $this->input->post('asal'),
			'tempatLahir' => $this->input->post('tempatLahir'),
			'tglLahir' => $this->input->post('tglLahir'),
			'alamatAsal' => $this->input->post('alamatAsal'),
			'kampus' => $this->input->post('kampus'),
			'alamatSby' => $this->input->post('alamatSby'),
			'jurusan' => $this->input->post('jurusan'),
			'noHP' => $this->input->post('noHP'),
			'email' => $this->input->post('email'),
			'idLine' => $this->input->post('idLine'),
			'ktm' => $fileUpload['file_name'],
			'ktp' => $fileUpload['file_name']
			);

			$this ->Mymodel->addData($data);
			$this ->load->view('first');
			} else {
	            $this->load->view('views/registration');
	        }
		}
 	}
	 	public function update($username){
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	  
            $data = array(
	            'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'nama' => $this->input->post('nama'),
				'asal' => $this->input->post('asal'),
				'tempatLahir' => $this->input->post('tempatLahir'),
				'tglLahir' => $this->input->post('tglLahir'),
				'alamatAsal' => $this->input->post('alamatAsal'),
				'kampus' => $this->input->post('kampus'),
				'alamatSby' => $this->input->post('alamatSby'),
				'jurusan' => $this->input->post('jurusan'),
				'noHP' => $this->input->post('noHP'),
				'email' => $this->input->post('email'),
				'idLine' => $this->input->post('idLine'),
	         );
            $this->Mymodel->UpdateUser($username, $data);
            redirect('home');
	        
	  }

}
