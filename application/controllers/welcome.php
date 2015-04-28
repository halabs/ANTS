<?php if ( ! defined('BASEPATH')) exit('Error: Authentication denied...');

class Welcome extends CI_Controller {
    
    function __construct() {
        parent::__construct();
		$config['upload_path'] = base_url('assets/images/uploads/');
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']	= '2048';
		$config['max_width']  = '1024'; 
		$config['max_height']  = '768';
		//$this->load->helper('fileUpload');
		//$this->load->library('upload', $config);
        //$this->load->model('welcomeModel');
    }

    public function index()
	{
		$this->load->view('login');
	}
        
        public function registration() {
            $result =   "";
            
            if(isset($_POST['MasterUser'])){
               // $result = $this->welcomeModel->doRegistration($_POST);
            }
            if(!empty($result)){
                //$this->upload->data();
               // phpinfo();
                if (isset($_FILES["Logo"]['temp_name'])){
                    echo $_FILES["Logo"]["name"]."<br>";
                    echo $_FILES['Logo']['size']."<br>";
                    echo $_FILES['Logo']['temp_name']."<br>";
                    getimagesize($_FILES["Logo"]["name"]);
                }
                else{
                    echo "file is not pound";
                }
                getimagesize($_FILES["Logo"]["tmp_name"]);
                //echo doUpload();
            }
            $this->load->view('registration');
        }
        
        public function forgotpwd() {
            $this->load->view('forgotpwd');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */