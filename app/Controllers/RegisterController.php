<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Register';
        return view('templates/header', $data)
            . view('register')
            . view('templates/footer');
    }

    public function register_post()
    {
        $user_model = new UserModel();
        $post_data = $this->request->getPost();
        
        $post_data['name'] = trim($post_data['name']);
        $post_data['email'] = trim($post_data['email']);
        $post_data['password'] = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        
        $register_user = $user_model->insert($post_data);
        
        if($register_user)
        {
            $this->session->setFlashData('success_message', 'Your account is registered successfully. You can login with your details.');
            return redirect()->to('/login');
        }
        else
        {
            $this->session->setFlashData('error_message', 'Error while register your account.');
            return redirect()->to('/register');
        }
    }
    
}