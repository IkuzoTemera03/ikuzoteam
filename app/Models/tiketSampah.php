<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiketSampah extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function jenisSampah()
    {
        return $this->belongsTo(jenisSampah::class, 'jenis_sampah_id');
    }

    public function penukar()
    {
        return $this->belongsTo(User::class, 'penukar_id');
    }
}
