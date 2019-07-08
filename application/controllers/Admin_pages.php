<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Admin_pages extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation','session'));
        $this->load->helper(array('url', 'language', 'form'));
        $this->load->model(array('news_model'));
      
        $this->lang->load('auth');
        if (!$this->ion_auth->logged_in())
		{
			redirect('news_admin/login', 'refresh');
		}
       
    }
    
    public function index()
	{
        $this->data['news'] =$this->news_model->get();
        $this->data['form_type'] = 0;
        $this->render('backend/home', $this->data);
    }

    public function create()
	{
       $this->form_validation->set_rules(
        'name', 'News title',
        'required|is_unique[news.title]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        )
    );

       $fback = array(
        'title' => $this->input->post('name'),
        'contents' => htmlentities($this->input->post('contents')),
        'created_at'=>date("Y-m-d H:i:s"),
     );
      
       if ($this->form_validation->run() == FALSE){
        $errors = validation_errors();
        $this->session->set_flashdata('error', $errors);
        $this->session->set_flashdata('fback', $fback);
        redirect(site_url('news_admin'), $this->data);
       }else{

        $config['upload_path'] = 'public/images';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $temp=explode(".",  $_FILES['file']['name']);
        $newfile=time().'.'.end($temp);
        $config['file_name'] =  $newfile;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('files')) {
            
        } else {
            $fileData = $this->upload->data();
            $imgURL ='public/images/'.$newfile;
            $fback['imgURL']=$imgURL;
        }
        $this->news_model->insert($fback);
        $this->session->set_flashdata('message', 'New News created successfully');
        redirect(site_url('news_admin'));
       }
     
    }

    public function edit($id)
	{   
        $this->data['news'] = $this->news_model->get($id);
        $this->data['form_type'] = 1;
        $this->render('backend/home', $this->data);
    }

    public function update()
	{
        $this->form_validation->set_rules('name', 'News title', 'required');
        
       $fback = array(
        'title' => $this->input->post('name'),
        'contents' => htmlentities($this->input->post('contents')),
        'updated_at'=>date("Y-m-d H:i:s"),
     );
      
       if ($this->form_validation->run() == FALSE){
        $errors = validation_errors();
        $this->session->set_flashdata('error', $errors);
        redirect(site_url('news_admin/edit/'.$this->input->post('id')));
       }else{

        $config['upload_path'] = 'public/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $temp=explode(".",  $_FILES['file']['name']);
        $newfile=time().'.'.end($temp);
        $config['file_name'] =  $newfile;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            
        } else {
            $fileData = $this->upload->data();
            $imgURL = 'public/images/'.$newfile;
            $fback['imgURL']=$imgURL;
        }
        $this->news_model->update($fback, $this->input->post('id'));
        $this->session->set_flashdata('message', 'News updated successfully');
        redirect(site_url('news_admin'));
       }
    }

    public function delete($id)
	{
        $this->news_model->soft_delete($id);
        $this->session->set_flashdata('message', 'News trashed successfully');
        redirect(site_url('news_admin'));

    }


    public function restore($id)
	{
        $this->news_model->restore($id);
        $this->session->set_flashdata('message', 'News restored successfully');
        redirect(site_url('news_admin'));

    }

    
    public function force_delete($id)
	{
        $this->news_model->force_delete($id);
        $this->session->set_flashdata('message', 'News deleted successfully');
        redirect(site_url('news_admin'));

    }


}
