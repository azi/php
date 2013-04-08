<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public $layout="layout_main";
			
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->model('News_model');
		$data['result']=$this->News_model->getNewsList();
		$this->load->view('news/index',$data);
	}


	public function edit($_id){
		$this->load->model('News_model');

		if(!empty($_POST)){
			
			$result=$this->News_model->update($_POST);

			if($result){
				header("Location:/php/ci/news");
				exit();
			}else{
				echo "修改失敗";
				exit();
			}
		}

		$data['result']=$this->News_model->getNewsById($_id);
		$this->load->view('news/edit',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */