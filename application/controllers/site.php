<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class site extends CI_Controller {

    public function index() {
        redirect('site/pt/');
    }

    public function pt() {
        $dados = array(
            'idioma' => 'pt'
        );

        $this->load->view('dauphin_view', $dados);
    }

    public function en() {
        $dados = array(
            'idioma' => 'en'
        );

        $this->load->view('dauphin_view', $dados);
    }

    public function contato() {

        $this->form_validation->set_rules('idioma', 'Idioma', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $idioma = 'pt';
        } else {
            $idioma = $this->input->post('idioma');
        }


        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[5]|max_length[50]|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[50]|xss_clean');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'required|max_length[500]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $erro = true;
            if ($idioma == 'pt') {
                $msgr = "Houve algum erro no tratamento de sua mensagem.";
            } else {
                $msgr = "There was an error on the treatment of your message.";
            }
        } else {            
            $nome = $this->input->post('nome'); 
            $email = $this->input->post('email');
            $mensagem = $this->input->post('mensagem');
            
            if ($nome != "Nome ou empresa" && $nome != "Name or Company"
                    && $mensagem != "Mensagem" && $mensagem != "Message") {
                $this->load->model('dmodel');

                $this->dmodel->inserir($nome, $email, $mensagem);
                $erro = false;
                if ($idioma == 'pt') {
                    $msgr = "Sua mensagem foi enviada com sucesso";
                } else {
                    $msgr = "Your message was successfully sent.";
                }
            }
        }

        $dados = array(
            'idioma' => $idioma,
            'erro' => $erro,
            'msgR' => $msgr,
        );

        $this->load->view('dauphin_view', $dados);
    }

    public function nav() {
        $dados = array(
            'idioma' => 'pt'
        );

        $this->load->view('nav', $dados);
    }

}