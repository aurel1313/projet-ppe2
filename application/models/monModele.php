<?php
    class monModele extends CI_Model{
        function __construct(){
            parent::__construct();
            
        }
        function maMethode(){
            return echo("test");
        }
    }

?>
//this->load->model("monModele");dans le controller
//$this->monModele->maMethode();
//$this->contact->ajouter();

$this->load->database();
$this->load->database();
DB1=$this->load->database('ekjfe',TRUE);