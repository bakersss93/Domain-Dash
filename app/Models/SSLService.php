<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SSLService extends Model
{
    use HasFactory;

    protected $fillable = [
        'certificate_name',
        'customer_id',
        'expiration_date',
        'details',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
