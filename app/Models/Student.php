<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'StudentID';

    public function classroom(){
        return $this->belongsTo(Classroom::class, 'ClassRoomID', 'ClassRoomID');

    }
    protected $fillable = ['StudentID', 'StudentName','StudentEmail', 'StudentGender','ClassRoomID'];

}



