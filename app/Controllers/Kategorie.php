<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;



use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\RequestInterface;
use Psr\Log\LoggerInterface;

class Kategorie extends BaseController
{
    var $category;
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->category = new Category();
        $this->data["title"] = "Kategorie";
    }

    public function add()
    {

        echo view('frontend/category/add', $this->data);
    }

    public function create() {
        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $value = $this->request->getPost('value');

        $data = array(
            'name' => $name,
            'description' => $description,
            'value' => $value
        );
        $result = $this->category->save($data);
        //var_dump($result);
        $alert =  $this->alert->makeMessage($result, 'dbAdd');
        $this->session->setFlashdata('alert', $alert);

        return redirect()->route('pridat-kategorii');
    }

    public function index()
    {
        //
    }
}
