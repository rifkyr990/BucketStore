<?php

namespace App\Controllers;

use App\Models\SnackModel;

class Snack extends BaseController
{
    protected $snackModel;
    public function __construct()
    {
        $this->snackModel = new SnackModel();
    }
    public function index()
    {

        $data = [
            'tittle' => 'Snack',
            'snack' => $this->snackModel->getSnack()
        ];


        return view('snack/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'tittle' => 'Detail Product',
            'snack' => $this->snackModel->getSnack($slug)
        ];
        return view('snack/detail', $data);
    }
}
