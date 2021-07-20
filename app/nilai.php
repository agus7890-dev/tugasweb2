<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table        = 'nilai';
    protected $fillable     = ['id', 'kd_makul', 'nama_makul', 'sks'];
    public    $timestamps   = false;

    public function makul(){
        return $this->belongsTo(Makul::class, 'kd_makul', 'id');
    }
    public function mahasiswa(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
