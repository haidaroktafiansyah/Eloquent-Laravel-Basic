<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswaeqmodel extends Model
{
    public $timestamps = FALSE;
    //
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','email','jurusan'];
}
