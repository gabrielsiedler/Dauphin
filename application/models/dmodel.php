<?php

class dmodel extends CI_Model {

    var $nome;
    var $email;
    var $mensagem;
    var $data;

    function __construct() {
        parent::__construct();
    }

    function inserir($nomeP, $emailP, $mensagemP) {

        $this->nome = $nomeP;
        $this->email = $emailP;
        $this->mensagem = $mensagemP;
        
        $this->db->insert('contato', $this);
    }
    
    function pegarDados(){
        $query = $this->db->query('SELECT nome, email, mensagem, data FROM contato ORDER BY data DESC');
        return $query->result();
    }

}
?>