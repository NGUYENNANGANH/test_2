<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_nv';

    public function phong(){
        return $this->belongsTo(phong::class, 'id_phong', 'id_phong');

    }
    protected $fillable = ['id_nv', 'name_nv','mota', 'birthday','id_phong'];
}
