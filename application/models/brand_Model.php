<?php

class brand_Model extends CI_Model {
public function Create($post){
    $this->db->insert('brand',$post); //insert into brand table
}
public function getData(){
    $query = $this->db->get('brand'); //get from brand table
    return $query->result();
}
public function get_user_by_id($id) {
    // Implement your method to get user data by ID from the database
    $this->db->where('id', $id);
    $query = $this->db->get('brand');
    return $query->row(); // Change to row() to return an object
}
public function Edit($id, $data) {
    // Implement your method to update a user in the database
    $this->db->where('id', $id);
    $this->db->update('brand', $data);
}

public function delete($id) {
    // Perform the deletion in the database
    $this->db->where('id', $id);
    $this->db->delete('brand');
}
}