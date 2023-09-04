<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPengeluaran extends Model
{
    protected $table = "jenis_pengeluaran";
    protected $primaryKey = "id_jenis_pengeluaran";
    protected $fillable = [
    'jenis_pengeluaran'];
}
