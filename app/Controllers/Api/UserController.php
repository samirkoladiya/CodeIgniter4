<?php
namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class UserController extends ResourceController
{
    use ResponseTrait;

    /* List all Users */
    public function index()
    {
        $user_model = new UserModel();
        $data['user_list'] = $user_model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    /* insert user */
    public function create() {
        $user_model = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ];
        $user_model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'User created successfully'
          ]
        ];
      return $this->respond($response);
    }

    /* fetch user details by id */
    public function show($id = null){
        $user_model = new UserModel();
        $data = $user_model->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No employee found');
        }
    }

    /* update user details by id */
    public function update($id = null){
        $user_model = new UserModel();
        $input_data = $this->request->getRawInput();
        $data = [
            'name' => $input_data['name'],
            'email'  => $input_data['email'],
        ];
        $user_model->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'User updated successfully'
          ]
      ];
      return $this->respond($response);
    }

    /* delete user by id */
    public function delete($id = null){
        $user_model = new UserModel();
        $data = $user_model->where('id', $id)->delete($id);
        if($data){
            $user_model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'User successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No employee found');
        }
    }

}