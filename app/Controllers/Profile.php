<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Profile extends BaseController
{

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->data['title'] = "Profil";
        $this->data["user"] = $this->ionAuth->user()->row();
    }
    public function edit()
    {
        echo view('backend/profile/edit', $this->data);
    }

    public function editPassword() {
        echo view('backend/profile/editPassword', $this->data);
    }

    public function editPasswordComplet() {

    }

    public function emailValidate() {
        $email = $this->request->getPost('email');
        $rules = [
            'email' => "is_unique[users.email]",
        ];

        $data = array(
            'email' => $email,

        );
        $this->validation->setRules($rules);
        $result = $this->validation->run($data);
        return $result;

    }
}
