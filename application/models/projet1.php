<?php
    class Projet1 extends Model{
        private $count;
        
        function __construct(){
            parent::Model();
            $this->count =0;
        }
        function findAll($start,$offset){
            $query =$this->db->get('compositeurs',$start,$offset);
            $this->count=$query->num_rows();
            return $query->result();
        }
        function find($id){
            $query->db->get('compositeurs');
            $this->db->where(’id’,$id);
            return $query->row();
        }
        function getCount() {
            return $this->count;
        }
        function add($data) {
            $this->db->insert(’mytable’, $data);
            return $this->db->insert_id();
        }
        function update($id,$data) {
            $this->db->where(’id’, $id);
            $this->db->update(’compositeurs’, $data);
        }
        function delete($id)    {
            $this->db->delete(’compositeurs’, array(’id’ => $id));
        }
    }
?>