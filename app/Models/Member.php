<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id_member';
    // protected $guarded = [];
    protected $fillable = [
        'kode_member', 'nama', 'alamat', 'telepon'];
    // public function members(){
    //     return $this->belongsTo(Member::class,'id_member');
    // }
}
