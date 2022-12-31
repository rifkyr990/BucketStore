<?php

namespace App\Models;

use CodeIgniter\Model;

class SnackModel extends Model
{
    protected $table = 'snack';
    protected $allowedFields = ['judul', 'slug', 'deskripsi', 'sampul', 'harga'];
    public function getSnack($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
