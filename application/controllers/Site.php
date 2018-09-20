<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{   $data['university']=$this->Site_model->getUniversity();
	    $this->load->view('web/include/header',$data);
		$this->load->view('web/index');
	}

    public function about(){
         $data['university']=$this->Site_model->getUniversity();
        $this->load->view('web/include/header',$data);
		$this->load->view('web/about_view');
        $this->load->view('web/include/footer');
    }
    public function my_gallery()
	{
	    $config['base_url'] = site_url('Site/my_gallery');
        $config['total_rows'] = $this->db->count_all('tblgallery');
        $config['per_page'] = "8";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	    $data['gallery']=$this->Site_model->getGallery($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
         $data2['university']=$this->Site_model->getUniversity();
	    $this->load->view('web/include/header',$data2);
		$this->load->view('web/gallery_view',$data);
        $this->load->view('web/include/footer');
	}


        public function book_publication(){
        $config['base_url'] = site_url('Site/book_publication');
        $type=1;
        $this->db->where('type',$type);
        $config['total_rows'] = $this->db->count_all_results('tblpublication');
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['book']=$this->Site_model->get_publication($type,$config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $data['type']='Book Publication';
         $data2['university']=$this->Site_model->getUniversity();
        $this->load->view('web/include/header',$data2);
		$this->load->view('web/publication_view',$data);
        $this->load->view('web/include/footer');
        }
        public function journal_publication(){
             $config['base_url'] = site_url('Site/journal_publication');
        $type=2;
        $this->db->where('type',$type);
        $config['total_rows'] = $this->db->count_all_results('tblpublication');
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['book']=$this->Site_model->get_publication($type,$config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $data['type']='Journal Publication';
         $data2['university']=$this->Site_model->getUniversity();
                $this->load->view('web/include/header',$data2);
        		$this->load->view('web/publication_view',$data);
                $this->load->view('web/include/footer');
        }
        public function conference_publication(){
             $config['base_url'] = site_url('Site/conference_publication');
        $type=3;
        $this->db->where('type',$type);
        $config['total_rows'] = $this->db->count_all_results('tblpublication');
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['book']=$this->Site_model->get_publication($type,$config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
         $data2['university']=$this->Site_model->getUniversity();
        $data['type']='Conference proceedings';
        $this->load->view('web/include/header',$data2);
		$this->load->view('web/publication_view',$data);
        $this->load->view('web/include/footer');
      }
    public function contact()
	{
         $data['university']=$this->Site_model->getUniversity();
        $this->load->view('web/include/header',$data);
		$this->load->view('web/contact_view');
        $this->load->view('web/include/footer');
	}

     public function student_resources($id)
	{   $data['university']=$this->Site_model->getUniversity();
        $data2['units']= $this->Site_model->getUnitsByUni($id);
        $data2['name'] = $this->Site_model->getName($id);
	    $this->load->view('web/include/header',$data);
		$this->load->view('web/resources_view',$data2);
        $this->load->view('web/include/footer');
	}


   public function contact_process(){
       if(isset($_POST['contact'])){
         $params= array(
           'fullname'=>$this->input->post('fullname'),
           'email'=>$this->input->post('email'),
           'mobile'=>$this->input->post('mobile'),
           'message'=>$this->input->post('message')
         );
         $result=$this->Site_model->contact_process($params);
         if($result){
         $this->session->set_flashdata('success','<div class="alert alert-success">Thanks for contacting us. We will get back soonest.</div>');
         redirect('Site/contact');
         }
         else{
             $this->session->set_flashdata('error','<div class="alert alert-danger"><strong>Sorry!!! </strong> An error occured while processsing the request.</div>');
             redirect('Site/contact');
         }

       }
   }



   /* Administration Dashboard */
    public function dashboard(){
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/include/footer');
    }
    public function web_update(){
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/upload');
        $this->load->view('admin/include/footer');
    }

   public function upload(){
       if(isset($_POST['up'])){
         $config['upload_path']="public/uploads/";
         $config['allowed_types']='jpeg|jpg|png';
         $config['encrypt_name'] = TRUE;
         $config['max_size'] = '0';
         $config['max_filename'] = '255';
         $this->load->library('upload',$config);
         $image_data = array();

            if (!$this->upload->do_upload('filename')) {
            //if file upload failed then catch the errors
            $this->session->set_flashdata('error','<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
            redirect('Site/web_update');
                }
                else{
                    $image_data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $image_data['full_path']; //get original image
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 980;
                    $config['height'] = 380;
                    $this->load->library('image_lib', $config);

                    if($image_data){
                      if($this->image_lib->resize()){
                      $this->session->set_flashdata('success','<div class="alert alert-success">Image successfuly uploaded.</div>');
                      redirect('Site/web_update');
                    }
                    else{
                      $this->session->set_flashdata('error','<div class="alert alert-danger">'.$this->image_lib->display_errors().'</div>');
                     redirect('Site/web_update');
                    }
                    }
                    else{
                       $this->session->set_flashdata('error','<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
                       redirect('Site/web_update');
                    }
                }
       }
   }

   /* upload images into the gallery */
   public function gallery_process(){
       if(isset($_POST['upload'])){
          $config['upload_path']="public/images/gallery/";
         $config['allowed_types']='png|jpg|jpeg';
         $config['encrypt_name'] = TRUE;
         $this->load->library('upload',$config);
         if($this->upload->do_upload("filename")){
             $data = $this->upload->data();
             $image_name= $data['file_name'];
             $params= array(
             'image'=> $image_name,
             'description'=>$this->input->post('description'),
             'status'=>$this->input->post('status')
             );
             $result1=$this->Site_model->gallery_process($params);
             if($result1){
                 $this->session->set_flashdata('success1','<div class="alert alert-success">Congratulations. Your image has been updated Successfully.!</div>');
                 redirect('Site/web_update');
             }
             else{
                $this->session->set_flashdata('error1','<div class="alert alert-danger">Sorry!! An error occured</div>');
                redirect('Site/web_update');
             }
         }
         else{
             $this->session->set_flashdata('error1','<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
             redirect('Site/web_update');
         }
       }
   }


   public function publication(){
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/publication_view');
        $this->load->view('admin/include/footer');
   }

   public function resources(){
       $data2['university']=$this->Site_model->getUniversity();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/learning_resources',$data2);
        $this->load->view('admin/include/footer');
   }


   /*upload_resources students and courses*/

   public function upload_resources(){
       $data2['units']= $this->Site_model->getUnits();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/upload_resources',$data2);
        $this->load->view('admin/include/footer');
   }
 /* uploading the files being needed */
 public function upload_process(){
      if(isset($_POST['upload'])){
         $config['upload_path']="public/uploads/notes/";
         $config['allowed_types']='pdf|doc|docx';
         $config['encrypt_name'] = TRUE;
         $this->load->library('upload',$config);
         if($this->upload->do_upload("filename")){
             $data = $this->upload->data();
             $image_name= $data['file_name'];
             $params= array(
             'unitID'=>$this->input->post('unitID'),
             'file_desc'=>$this->input->post('desc'),
             'file_name'=> $image_name
             );
             $result1=$this->Site_model->upload_process($params);
             if($result1){
                 $this->session->set_flashdata('success1','<div class="alert alert-success">Congratulations. Your file has been updated Successfully.!</div>');
                 redirect('Site/upload_resources');
             }
             else{
                $this->session->set_flashdata('error1','<div class="alert alert-danger">Sorry!! An error occured</div>');
                redirect('Site/upload_resources');
             }
         }
         else{
             $this->session->set_flashdata('error1','<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
             redirect('Site/upload_resources');
         }
      }
 }

   public function publication_process(){
       if(isset($_POST['up'])){
           $params=array(
             'type'=>$this->input->post('type'),
             'topic'=>$this->input->post('publication')
           );
           $result=$this->Site_model->publication_process($params);
           if($result){
            $this->session->set_flashdata('success','<div class="alert alert-success">Congratulations!! Publication succesfully published.</div>');
             redirect('Site/publication');
           }
           else{
              $this->session->set_flashdata('error','<div class="alert alert-danger">Opps!! An Error occured while processing.</div>');
             redirect('Site/publication');
           }
       }
   }

   /* register new university */
   public function uni_process(){
       if(isset($_POST['uni'])){
           $params=array(
             'name'=>$this->input->post('name')
           );
           $result=$this->Site_model->uni_process($params);
           if($result){
            $this->session->set_flashdata('success','<div class="alert alert-success">Congratulations!! University succesfully published.</div>');
             redirect('Site/resources');
           }
           else{
              $this->session->set_flashdata('error','<div class="alert alert-danger">Opps!! An Error occured while processing.</div>');
             redirect('Site/resources');
           }
       }
   }

   /* register new course/programme university */
   public function unit_process(){
       if(isset($_POST['upload']) && !empty($this->security->get_csrf_hash())){
           $params=array(
             'uniID'=>$this->input->post('uniID'),
             'code'=>html_escape($this->input->post('code')),
             'unitname'=>html_escape($this->input->post('unitname'))
           );
           $result=$this->Site_model->unit_process($params);
           if($result){
            $this->session->set_flashdata('success1','<div class="alert alert-success">Congratulations!! Unit succesfully Added.</div>');
             redirect('Site/resources');
           }
           else{
              $this->session->set_flashdata('error1','<div class="alert alert-danger">Opps!! An Error occured while processing.</div>');
             redirect('Site/resources');
           }
       }
       else{
           echo "Invalid authentication";
       }
   }

function getHashedPassword($pass){
    $newhashed= password_hash($pass,PASSWORD_DEFAULT);
    return $newhashed;
}
function verifyPassword($inputPassword,$hashedPassword){
    if(password_verify($inputPassword,$hashedPassword)){
      return true;
    }
    else{
        return false;
    }
}
public function insert(){
      if(isset($_POST['check'])){
          $data = $this->security->xss_clean(html_escape($this->input->post('pass')));
          $newpass=$this->getHashedPassword($data);
          //echo $newpass;
          $r='$2y$10$Gcq21.CMFR4BTYI1Nn3Lf.fONd/bSkiWsBSjeZ1PeMKc17ODuLetC';
          $checker=$this->verifyPassword($this->input->post('pass'),$r);
         if($checker){
             echo "Correct password";
         }
         else{
             echo "Wrong Password";
         }
      }

}

}
