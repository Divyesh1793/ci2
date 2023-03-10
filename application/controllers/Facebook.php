<?php
defined('BASEPATH') or exit('No direct script access allowed');

// require_once APPPATH . '/libraries/vendor/autoload.php';
class Facebook extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    // public function login()
    // {
    //     $fb = new Facebook\Facebook([
    //         'app_id' => ' 739254927354074',
    //         'app_secret' => 'c1763d60f496fa5ee585f98cc2bff0a1',
    //         'default_graph_version' => 'v2.10',
    //     ]);
    //     $helper = $fb->getRedirectLoginHelper();
    //     $permissions = ['email', 'user_likes']; // optional
    //     $this->data['loginurl'] = $helper->getLoginUrl('https://localhost/ci/index.php/facebook/index', $permissions);
    //     $this->load->view('facebook', $this->data);
    // }

    public function login()
    {
        $this->load->view('facebook');
    }

	public function website()
    {
        $this->load->view('website');
    }



	public function facebook()
    {
        $this->load->view('facebook2');
    }

    public function taiwind()
    {
        $this->load->view('taiwind');
    }

	public function landing()
    {
        $this->load->view('landing');
    }

	public function page1()
    {
        $this->load->view('page1');
    }
	public function navbar()
    {
        $this->load->view('navbar');
    }

	public function page2()
    {
        $this->load->view('page2');
    }


	public function page3()
    {
        $this->load->view('page3');
    }
    public function logout()
    {

        $user_data = $this->session->userdata('user_data');

        $this->session->unset_userdata('user_data');
        redirect('http://localhost/ci/index.php/demo/login');

        // $this->session->unset_userdata('access_token');
        // $this->session->sess_destroy();
        // $user_data = $this->session->userdata('user_data');

        // $google_client->revokeToken('access_token');
        // print_r($this->session->userdata('user_data'));
        // die;
        // redirect('demo/login');

    }

}
