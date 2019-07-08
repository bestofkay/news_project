<?php
error_reporting(0);
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class News_api extends REST_Controller {

	function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
      
		$this->methods['slip_post']['limit'] = 100; // 500 requests per hour per user/key
        $this->load->model(array('news_model'));
        $this->load->helper('path');
        $this->load->database();
	
    }

    public function users_get($id=null)
    {
        // Users from a data store e.g. database
        if(empty($id)){
            $news =$this->news_model->get();
            $this->response($news, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }else{
            $news = $this->news_model->get($id);
            if(empty($news)){
                 // Set the response and exit
                 $this->response([
                    'status' => FALSE,
                    'message' => 'No news was found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }else{
                $this->response($news, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            }
    
        }
         
    }
    }