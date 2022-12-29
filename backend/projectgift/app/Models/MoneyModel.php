<?php

namespace App\Models;

use CodeIgniter\Model;

class MoneyModel extends Model
{
    protected $table = 'money';
    protected $allowedFields = ['judul', 'slug', 'deskripsi', 'sampul', 'harga'];
    public function getMoney($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
