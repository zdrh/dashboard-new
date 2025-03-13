<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Dashboard extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->data['user'] = $this->ionAuth->user()->row();
    }

    public function index()
    {
        $this->data["title"] = "Dashboard";
        //$this->data['user'] = $this->ionAuth->user()->row();
        echo view('backend/dashboard/index', $this->data);
    }

    public function logout()
    {
        $logout = $this->ionAuth->logout();

        $alert = $this->alert->makeMessage($logout, 'logout');
        $this->session->setFlashdata('alert', $alert);
        if($logout){
            return redirect()->route('prihlaseni');
        } else {
            return redirect()->route('dashboard');
        }
        
    }
}
