<?php

namespace App\Models;

use CodeIgniter\Model;

class Journey extends Model
{
    protected $table            = 'transaksi_journeys';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal','tujuan','deskripsi','created_at','deleted_at'];

 
}
