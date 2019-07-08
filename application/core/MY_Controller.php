<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller
{
  protected $data = array();
  function __construct()
  {
    parent::__construct();
    $this->data['pagetitle'] = 'Management App';

  }

protected function render($the_view = NULL)
{
$this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
$this->data['user_details'] = $this->ion_auth->user()->row();
$this->load->view('templates/back_template', $this->data); 

}

protected function render_front($the_view = NULL)
{
$this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
//$this->data['user_details'] = $this->ion_auth->user()->row();
$this->load->view('templates/front_template', $this->data); 

}


}

