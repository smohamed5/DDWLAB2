<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class retrievedata extends CI_Controller {

  

    public function displayrows(){

        $this->load->model('mymodel');
        $data['records'] = $this->mymodel->getData();
        $this->load->view('display',$data);
    }
    
    function newuser(){

        $this->load->view('newuser');
    }

    function insertrow(){ 
        $this->load->model('mymodel');    
        $data = [
            "name"=> $this->input->post('name'),
            "age"=> $this->input->post('age')
            ];
        $this->mymodel->insert($data);
        echo "<p>Row inserted</p><a href=\"/ci\"> Back</a>"; 
    }
}
