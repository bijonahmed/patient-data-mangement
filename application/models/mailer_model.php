<?php
 
class Mailer_Model extends CI_Model{
    //put your code here
    
      function sendEmail($data, $templateName)
	{   
		$this->load->library('email');
                $this->email->attach();
		$this->email->set_mailtype('html');
		$this->email->from($data['from_address'],$data['admin_full_name']);
		$this->email->to($data['to_address']);
		//$this->email->cc($data['cc_address']);
		$this->email->subject($data['subject']);
		$body = $this->load->view('mailScripts/' . $templateName, $data, true);
		//echo $body;
		$this->email->message($body);
		$this->email->send();
		$this->email->clear();
	}  
    
    
}
