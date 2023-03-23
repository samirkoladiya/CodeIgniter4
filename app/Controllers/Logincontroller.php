<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Logincontroller extends BaseController
{
    public function index()
    {
        $data['title'] = 'Login';
        return view('templates/header', $data)
            . view('login')
            . view('templates/footer');
    }

    public function login_post()
    {
        $user_model = new UserModel();
        $post_data = $this->request->getPost();

        $email = trim($post_data['email']);
        $password = $post_data['password'];
        
        $get_user_by_email = $user_model->where('email', $email)->first();
    
        if( $get_user_by_email['id'] )
        {
            if( password_verify($password, $get_user_by_email['password']) )
            {
                $this->session->set('is_user_logged_in', true);
                $this->session->set('user_details', $get_user_by_email);
                return redirect()->to('/dashboard');
            }
            else
            {
                $this->session->setFlashData('error_message', 'Invalid username or password.');
            }
        }
        else
        {
            $this->session->setFlashData('error_message', 'Invalid username or password.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}