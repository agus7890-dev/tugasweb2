<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
   protected $table        = 'makul';
   protected $fillable     = ['kd_makul', 'nama_makul', 'sks'];
   public    $timestamps   = false;

   public function makul(){
      return $this->belongsTo(Makul::class, 'kd_makul', 'id');
  }
}
