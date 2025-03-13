<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Alert;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Login extends BaseController
{

    public $ionAuth;
    public $data;
    public $alert;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->alert = new Alert();
        $this->data["title"] = "Přihlášení";
    }

    public function login() 
    {
        echo view('frontend/auth/login', $this->data);
    }

    public function loginComplete()
    {
        $login = $this->request->getPost('login');
        $password = $this->request->getPost('password');

        $logged = $this->ionAuth->login($login, $password);
        if($logged){
           return redirect()->route('administrace/dashboard');
        } else {
            $alert =  $this->alert->makeMessage($logged, 'login');
            $this->session->setFlashdata('alert', $alert);
            return redirect()->route('prihlaseni');
        }
    }

   
}
