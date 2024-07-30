<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    use HasFactory;

    protected $table = "tintucs";

    public $primaryKey = "id";

    protected $fillable = [
        'name',
        'anh',
        'motangan',
        'noidung',
        'luotxem'
    ];
}
