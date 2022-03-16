<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Login extends MY_Controller {



    function Login()

    {

        parent::__construct();

        $this->load->model('login_mod');



    }



    function index()

    {

        $id = $this->session->userdata('user_id');

        if (!empty($id)) {

            redirect(base_url());

        }

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');



        $this->form_validation->set_rules("email", 'email', 'trim|required|valid_email');

        $this->form_validation->set_rules('password', 'password', 'required');

        

        $data["msg"] = '';

        if ($this->form_validation->run() == TRUE)

        {

            $username = $this->input->post('email');

            $password = $this->input->post('password');

            

            $user = $this->login_mod->get_bylogin($username,$this->_encode_password($password));

            if($user)

            {

                if($user->is_lock == 0)

                {

                    $data_session = array(

                            'user_id' => $user->id,

                            'full_name' => $user->name,

                            'rule' => $user->rule,

                            'img' => $user->img,

                            'lastlogin' => $user->last_loggedin_date,

                            'masuk' => TRUE

                    );

                    $this->session->set_userdata($data_session);



                    $url = $this->input->get("url");

                    if(!empty ($url)){

                        redirect(base_url().$url);

                    }

                    else{

                        redirect(base_url());

                    }

                }

                $data["msg"] = "Your account is currently in trouble!";

            }else{

                $data["msg"] = "Email or password not match!";

            }

        }

    	$this->load->view('login',$data);

    }



    function logout()

    {

        /*$data_session = array('user_id','full_name','rule','is_logged_in','lastlogin');*/

        $this->session->sess_destroy();

        redirect(base_url().'login');

    }





}