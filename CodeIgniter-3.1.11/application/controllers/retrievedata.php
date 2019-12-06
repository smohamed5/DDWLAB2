<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class retrievedata extends CI_Controller {

    public function index()
    {
        echo "hello world";
    }

    public function displayrows()
    {
        $this->load->model('mymodel');
        $data['records'] = $this->mymodel->getData();
        $this->load->view('display',$data);
    }
}
