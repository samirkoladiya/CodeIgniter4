<?php
namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class UserController extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $user_model = new UserModel();
        $data['user_list'] = $user_model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

}