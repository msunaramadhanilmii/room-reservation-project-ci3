<?php
defined('BASEPATH') or exit('No direct sciprt access allowed');

class EmailTrial extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Halaman email';
		$this->load->view('email', $data);
	}

	public function SendMail()
	{
		if (isset($_POST['submit_email'])) {
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$pesan = $this->input->post('pesan');

			if (!empty($email)) {
				//configuration to email & progress
				$config = [
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_user' => 'skripsi.hbb@gmail.com',
					'smtp_pass' => 'actcbza2b3',
					'smtp_port' => 465,
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'newline' => "\r\n"
				];
				$this->load->library('email', $config);
				$this->email->initialize($config);

				$this->email->from('emailfrom');
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->from($pesan);

				if ($this->email->send()) {
					echo "Email, berhasil dikirim";
				} else {
					show_error($this->email->print_debugger());
				}
			}
		}
	}
}
