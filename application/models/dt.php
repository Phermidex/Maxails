<?php 

class Dt extends CI_Model {




  
  function set()
  {
                 $data1 = array('name' => 'empresa', 'class' => 'form-control', 'placeholder' => 'Nombre Empresarial o Empresa');
                 $data2 = array('name' => 'email', 'type' => 'email', 'placeholder' => 'Email a utilizar', 'class' => 'form-control');

                 if($this->input->get('data') == 'video'){
                 $data3 = array('name' => 'video', 'type' => 'text', 'class'=>'form-control', 'placeholder'=>'Url de video publicitario VIMEO o YOUTUBE');
                 }else if($this->input->get('data') == 'images'){
                 $data3 = array('name' => 'imagen', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Url de imagen publicitaria');
                 }
                 $btn   = array('name' => 'btn', 'type' => 'submit', 'class' => 'btn btn-default', 'value' => 'Enviar');

                 $fpub = validation_errors().form_open('Emp/get').form_label('Empresa').form_input($data1).form_label('Email').form_input($data2).form_label('publicidad').form_input(@$data3).br(2).form_input($btn).form_close();


                 return $fpub;
  }



  function get_dta()
  {

               $this->form_validation->set_rules('empresa','empresa','required');
               $this->form_validation->set_rules('email','email','required');

               if($this->form_validation->run() == FALSE)
               {
               	   redirect('/#error_post_false');
               }else{
               	   $post_data = array('emp' => $this->input->post('empresa'), 'email' => $this->input->post('email'), 'video' => $this->input->post('video'), 'img' => $this->input->post('imagen'));
               	   $this->load->view('index',$post_data);
               }
  }



  function video($string)
  {
  	 if($string != ""){
              $url = @$string;
              parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
              $embed = $my_array_of_vars['v']; 

      echo '<iframe width="560" height="315" class="embed-responsive-item video" src="https://www.youtube.com/embed/'.$embed.'?autoplay=1" frameborder="0" allowfullscreen></iframe>';
      }
  }


  function img($string)
  {
       echo "<img class='img-thumbnail img' src='".$string."'/>";
  }

  function wikidefinition($s) {
    $url = "http://it.wikipedia.org/w/api.php?action=opensearch&search=".urlencode($s)."&format=xml&limit=1";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
    curl_setopt($ch, CURLOPT_POST, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_NOBODY, FALSE);
    curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
    curl_setopt($ch, CURLOPT_REFERER, "");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 4);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; he; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8");
    $page = curl_exec($ch);
    $xml = simplexml_load_string($page);
    if((string)$xml->Section->Item->Description) {
        return array((string)$xml->Section->Item->Text, (string)$xml->Section->Item->Description, (string)$xml->Section->Item->Url);
    } else {
        return "";
    }
}

}