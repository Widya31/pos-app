<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'id_supplier';
    // protected $guarded = [];
    protected $fillable = [
        'nama', 'email', 'alamat', 'telepon'];
}
