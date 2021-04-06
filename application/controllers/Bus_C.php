<?php 

Class Bus_C extends CI_Controller
{
      public function __construct()
      {
      	parent::__construct();
        $this->load->model('Bus_M');
      }

      public function index()
      { 
      	$this->load->view('LoginBus_V');
        
      }

      public function searchBusData()
      {   
       
         $data['source'] = $this->Bus_M->getAllSource();
         $data['desti'] = $this->Bus_M->getAllDesti();
         $this->load->view('SearchBus_V',$data);
      }

        public function getBusData()
          { 
            $this->form_validation->set_rules('txt_from','From','required');
            $this->form_validation->set_rules('txt_to','To','required');
            $this->form_validation->set_rules('date','Date','required');
                if ($this->form_validation->run() == True)
                {  
                         $data = array(  
                         'fplace'  => $this->input->post('txt_from'),  
                          'splace'  => $this->input->post('txt_to'),  
                          );
                          
                         if($data['fplace'] == $data['splace'])
                         { 
                            $this->session->set_flashdata('samebus',"<div class='alert alert-danger'>Choose Diffrent Bus Location</div>"); 
                            // $this->load->view('SearchBus_V'); 
                              redirect('Bus_C/searchBusData');
                         //     $this->form_validation->set_message('txt_to', 'Please provide another city of destination');
                        
                        }
                        else
                        {
                          $data['bus']= $this->Bus_M->getBusData($data);
                          $this->load->view('GetBus_V',$data);
                        }
                  }
                        
               
                else
                {
                   
                   Bus_C::searchBusData();
                     
                  // $this->load->view('SearchBus_V');

                    //redirect('Bus_C/searchBusData'); 
                    

                }   
      }
        
     
       public function bookBusData()
      {  
        
        $data['iBusNo'] = $this->uri->segment(3);
       // $data['busNo'] = $this->input->post('iBusNo');
      
    $this->load->view('BookBus_V',$data);


      //   $this->load->model('User_M');
      // $result = $this->User_M->bookBusData($id);
      // if($result == 1)
      //   redirect('User_C/index');
     } 

      function sendMail()
     {
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('mob','Mobile Number','required');
        $this->form_validation->set_rules('byemail','Email ID','required');
        $this->form_validation->set_rules('iBusNo','Bus ID','required');
          $iBusNo = $this->input->post('iBusNo');
          $name = $this->input->post('name');
          $mob = $this->input->post('mob');
          // $iBusNo = $this->input->post('iBusNo');
          
          if ($this->form_validation->run() == True)
          {
                $config = Array(
              'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'harshita.jain@hiddenbrains.in', // change it to yours
              'smtp_pass' => 'harshita@123', // change it to yours
              'mailtype' => 'html',
              'charset' => 'iso-8859-1',
      
              'wordwrap' => TRUE
                             );

                  $message = '';
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('harshita.jain@hiddenbrains.in'); // change it to yours
                
                $byemail = $this->input->post('byemail');
                $this->email->to($byemail);// change it to yours
                $this->email->subject('Done Booking');
                $this->email->message($message);
                    if($this->email->send())
                     {
                  echo '<script>alert("Thank-You YourBooking Is Done for")</script>';
                         $this->load->view('Bus_V'); 
                     }
                   else
                 {
                 //show_error($this->email->print_debugger());
                 // echo "email not send give correct details ";
                   $this->session->set_flashdata('emailfail',"<div class='alert alert-danger'>Booking not done give correct details</div>"); 
                    $this->load->view('BookBus_V');
                    // echo ' not Email sent.';
                  // $this->form_validation->set_message('required', 'you not  email correct');
                 } 
                  
      	  }
      
                else
                {
              
                  //$this->load->view("BookBus_V");
                  //  echo "$iBusNo";exit;
                  Bus_C::bookBusData('iBusNo');

                }

        	
}
}