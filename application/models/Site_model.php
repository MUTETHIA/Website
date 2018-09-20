<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {
/* handle contact form */
public function contact_process($data){
  $query=$this->db->insert('tblcontact',$data);
  if($query){
      return true;
  }
  else{
      return false;
  }
}


/*
ADMINISTRATION QUERIES AND FUNCTIONALITY
 */
/* handle the image to gallery upload */
public function gallery_process($params){
    $qry=$this->db->insert('tblgallery',$params);
    if($qry){return true;}
    else{return false;}
}
public function getGallery($limit, $start){
    $sql = 'select * from tblgallery WHERE status=1 ORDER BY id DESC LIMIT '.$start.','.$limit.' ';
    $query = $this->db->query($sql);
    return $query->result_array();
}

public function publication_process($data){
    $query=$this->db->insert('tblpublication',$data);
    if($query){
        return true;
    }
    else{
        return false;
    }
}

/* process university insertion */
public function uni_process($data){
    $query=$this->db->insert('tbluniversity',$data);
    if($query){
        return true;
    }
    else{
        return false;
    }
}


/* process university insertion */
public function unit_process($data){
    $query=$this->db->insert('units_record',$data);
    if($query){
        return true;
    }
    else{
        return false;
    }
}

/* process resource uploads insertion */
public function upload_process($data){
    $query=$this->db->insert('resource_uploads',$data);
    if($query){
        return true;
    }
    else{
        return false;
    }
}

/* get name of the University */
public function getName($id){
      $data = array(
            'uniID' => $id
        );
        $qry = $this->db->get_where('tbluniversity', $data);
        if ($qry->num_rows() == 1) {
            return $qry->row('name');
        }
}
/* fetch the units regsitdered for display */
public function getUnits(){
    $query=$this->db->get('units_record');
    return $query->result_array();
}


/* get uniis per university selected */
public function getUnitsByUni($id){
    $data=array(
    'uniID'=>$id);
     $qry = $this->db->get_where('units_record', $data);
        return $qry->result_array();
}
/* fetch all universities in the database */
public function getUniversity(){
    $query=$this->db->get('tbluniversity');
    return $query->result_array();
}

/* fetch the book publication only */
 public function get_publication($data,$limit,$start){
     $cod = array(
            'type' => $data
        );
        $query = $this->db->get_where('tblpublication', $cod,$limit,$start);
        return $query->result_array();

 }


}

?>