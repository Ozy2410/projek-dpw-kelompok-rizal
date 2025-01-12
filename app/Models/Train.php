<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $table = 'kereta';
    protected $primaryKey = 'id_kereta';

    protected $fillable = [
        'nama_kereta',
        'asal_kota',
        'kota_tujuan',
        'waktu_keberangkatan',
        'waktu_tiba',
    ];

    public $timestamps = true;

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'id_kereta');
    }
}
