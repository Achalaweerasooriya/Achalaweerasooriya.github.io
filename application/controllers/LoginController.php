<?php
class LoginController extends CI_Controller{
function index(){
//    $this->load->view('header');
    $data['validate']="";
    $this->load->view('loginform',$data);
//    $this->load->view('footer');
}

function SignUp(){
    $this->load->view('SignUp');
}

function Register(){
    $this->load->library('form_validation');
    $this->load->helper(array('form', 'url'));

    //Validation Rules
    $this->form_validation->set_rules('full_name','Full Name','trim|required');
    $this->form_validation->set_rules('email','Email Address','trim|required|valid_email');
    $this->form_validation->set_rules('company','Company','trim|required');
    $this->form_validation->set_rules('user_name','Username','trim|required|min_length[4]');
    $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
    $this->form_validation->set_rules('cpassword','Password Confirmation','trim|required|matches[password]');
    $this->form_validation->set_message('callback_check_user_Exists', 'Username already exists. Please select another');
    $this->form_validation->set_message('callback_check_mail_Exists', 'E-mail already registerd.');
    if($this->form_validation->run()==false){
        $this->load->view('SignUp');
    }else{
        $this->load->model('MembershipModel');
        if($this->MembershipModel->create_member()){
            $data['validate']='Your account has been created';
            $this->load->view('loginform',$data);
        }else{
//            $this->load->view('SignUp');
        }
    }
    
}

//custom callback function
function check_mail_Exists($email){
    $this->load->model('MembershipModel');
    $email_available=$this->model->check_mail_Exists($email);
    if($email_available){
        return true;
    }else{
        return false;
    }
}

function check_user_Exists($email){
    $this->load->model('MembershipModel');
    $username_available=$this->model->check_user_Exists($email);
    if($username_available){
        return true;
    }else{
        return false;
    }
}

function validate(){

    $this->load->model('MembershipModel');
        $user=$this->input->post('user_name');
        $pass=$this->input->post('password');

    $query=$this->MembershipModel->validate($user,$pass);

    $des=$this->MembershipModel->getdes($this->input->post('user_name'));

    if($query){
        $data=array(
            'username' => $this->input->post('user_name'),
            'is_logged_in' => true
        );
        $this->session->set_userdata($data);
        if($des=='ceo'){
                print_r("ceo");
                die();
//        redirect('');
            
        }else if($des=='dev'){
//        redirect('');
                print_r("dev");
                die();
        }else{
//        redirect('');
                print_r("pm");
                die();
        }
    }else{
        $data['validate']="Username or password incorrect. Please try again";
        $this->load->view('loginform',$data);
    }
}
}