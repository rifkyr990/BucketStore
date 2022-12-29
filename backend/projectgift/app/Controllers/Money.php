<?php

namespace App\Controllers;

use App\Models\MoneyModel;

class Money extends BaseController
{
    protected $moneyModel;
    public function __construct()
    {
        $this->moneyModel = new MoneyModel();
    }
    public function index()
    {

        $data = [
            'tittle' => 'Money',
            'money' => $this->moneyModel->getMoney()
        ];


        return view('money/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'tittle' => 'Detail Product',
            'money' => $this->moneyModel->getMoney($slug)
        ];
        return view('money/detail', $data);
    }
}
