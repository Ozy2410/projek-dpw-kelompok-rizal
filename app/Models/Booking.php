<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $primaryKey = 'id_booking';

    protected $fillable = [
        'id_user',
        'id_kereta',
        'nomor_kursi',
        'gerbong',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function kereta()
    {
        return $this->belongsTo(Train::class, 'id_kereta', 'id_kereta');
    }
}
