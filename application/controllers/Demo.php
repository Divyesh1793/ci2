<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Demo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function login()
    {

        $google_client = new Google_Client();

        $google_client->setClientId('182180795680-g1cqtn4friq8sqt7bqvfecnrsf29l625.apps.googleusercontent.com');

        $google_client->setClientSecret('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');

        $google_client->setRedirectUri('http://localhost/ci/index.php/demo/login');

        $google_client->addScope('email');

        $google_client->addScope('profile');
        if (isset($_GET["code"])) {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

            if (!isset($token["error"])) {

                $google_client->setAccessToken($token['access_token']);

                $this->session->set_userdata('access_token', $token['access_token']);

                $google_service = new Google_Service_Oauth2($google_client);

                $data = $google_service->userinfo->get();
                $current_datetime = date('Y-m-d H:i:s');

                $user_data = array(
                    'login_oauth_id' => $data['id'],
                    'first_name' => $data['given_name'],
                    'last_name' => $data['family_name'],
                    'email_address' => $data['email'],
                    'profile_picture' => $data['picture'],
                    'created_at' => $current_datetime,
                );

                $this->db->insert('users', $user_data);

                $this->session->set_userdata('user_data', $user_data);
            }

            //  else {
            //     echo 'unauthorized';
            // }
        }

        $login_button = '';
        if (!$this->session->userdata('access_token')) {
            $login_button = '<a href="' . $google_client->createAuthUrl() . '"><img src="http://localhost/ci/assets/auth2.png" /></a>';

            $data['login_button'] = $login_button;
            $this->load->view('demo', $data);
        } else {

            $login_button = '<a href="' . $google_client->createAuthUrl() . '"><img src="http://localhost/ci/assets/auth2.png" /></a>';

            $data['login_button'] = $login_button;
            $this->load->view('demo', $data);

        }

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
