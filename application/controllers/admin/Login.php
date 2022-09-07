<?php
class Login extends CI_Controller{
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function aksi_login()
    {
        $username=$this->input->post('username');
        $password= MD5($this->input->post('password'));
        if(!empty($username) && !empty($password));{
            $result=$this->LoginModel->login($username,$password);
            if($result){
                $this->session->set_userdata('username',$result->username);
                $this->session->set_userdata('id_login',$result->id_login);
                echo"
                <script>
                    alert('Anda berhasil Login')
                    window.location.href = '".base_url('admin/Dashboard/index')."';
                </script>
                ";
            }else{
                echo"
                <script>
                    alert('Anda tidak berhasil Login ')
                    window.location.href = '".base_url('admin/Login/index')."';
                </script>
                ";
            }
        }
    }
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}

?>