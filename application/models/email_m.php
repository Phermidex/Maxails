<?php

class Email_m extends CI_Model{


     function send()
     {
            
            $em = @$this->input->post('empresa');
            $ma = @$this->input->post('email');
            $im = @$this->input->post('imagen');
            $po = @$this->input->post('video'); 
      


      
          /* $this->load->library('email');

           $config['protocol'] = 'sendmail';
           $config['mailpath'] = '/usr/sbin/sendmail';
           $config['charset'] = 'iso-8859-1';
           $config['mailtype'] = 'html';
           $config['wordwrap'] = TRUE;

           $this->email->initialize($config);

           $this->email->from($email, 'publicidad');
           $this->email->to('hermides07@gmail.com');

           $this->email->subject('Publicidad Maciva');
           $this->email->message($html);

           $this->email->send();*/



           $this->data_db = $this->db->get('pub');

           echo "<table id='myTable'>";
           echo "<thead>";
             echo "<tr>";
                echo "<th>Empresa</th>";
                echo "<th>Mensaje</th>";
             echo "</tr>";
           echo "</thead>";
           echo "<tbody>";
           foreach ($this->data_db->result() as $set_row) 
           {
                       
                       if(filter_var($set_row->data9, FILTER_VALIDATE_EMAIL))
                       {
                          echo "<tr>";
                          echo "<td>".$set_row->emp."</td>";
                          echo "<td><span class='text-success'>Sending Success Full</span></td>";
                          echo "</tr>";
                          $this->load->library('email');

                          $config['protocol'] = 'sendmail';
                          $config['mailpath'] = '/usr/sbin/sendmail';
                          $config['charset'] = 'iso-8859-1';
                          $config['mailtype'] = 'html';
                          $config['wordwrap'] = TRUE;

                          $this->email->initialize($config);

                          $this->email->from($ma, 'publicidad');
                          $this->email->to('hermides07@gmail.com');

                          $this->email->subject('La nueva '.$em);

                          if(!empty($im))
                          {
                            $this->email->message(base_url('emp/template?title='.$em.'&img='.$im));
                          }else if(!empty($po))
                          {
                            $this->email->message(base_url('emp/template?title='.$em.'&video='.$po));
                          }else{
                            redirect('/?fails');
                          }
                          #$this->email->message(base_url('emp/template?title='.$em.'&img='.$rt));

                          $this->email->send();

                       }
           }  

           echo "</tbody>"; 
           echo "</table>"; 
     }

}
