<?php
class Random_numbers extends CI_Controller {
	public function rando(){
		// var_dump($this->session->userdata());
		$allpost = $this->input->post();
		$random_string= md5(uniqid(rand(0,14), true));
		if($this->session->userdata('counter'))
		{
			$counter =$this->session->userdata('counter');
			$this->session->set_userdata('counter',$counter+1);

		}
		else {
			$this->session->set_userdata('counter',1);
		}

		$countdata = ($this->session->userdata('counter'));
		$new_data = array (
							'Count' => $countdata,
							'Random_Num' =>$random_string
						);
		$this->session->set_userdata($new_data);
		$ourdata = ($this->session->all_userdata());

		// var_dump($ourdata);

		$this->load->view('random',$ourdata);
	}

}	

?>