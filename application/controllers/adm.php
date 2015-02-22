<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class adm extends CI_Controller {

    public function index() {
        $data = array();

        $data['destino'] = 'adm/entrar';
        $this->load->view('login-view', $data);
    }

    public function entrar() {
        $data = array();

        $data['destino'] = 'adm/entrar';
        
        $this->form_validation->set_rules('senha', 'senha', 'trim|required|min_length[5]|max_length[10]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login-view', $data);
        } else {
            $senha = $this->input->post('senha');
            if($senha == "***"){
                $this->load->model('dmodel');
                $data['resposta'] = $this->dmodel->pegarDados();
                $this->load->view('adm-view',$data);
            }else{
                $this->load->view('login-view', $data);
            }
        }
    }

}
