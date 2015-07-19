<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Emp extends CI_Controller{


      public function index()
      {
           $data['form_pub'] = $this->dt->set();	
           $this->load->view('index',$data);

      }

      public function get()
      {
      	//if($this->input->post('empresa')){
             #$this->dt->get_dta();
             $this->email_m->send();
      	//} else {
      	//	redirect('/', 'location', 301);
      	//}
      }


      public function template()
      {
        $this->load->view('template_email');
      }

}