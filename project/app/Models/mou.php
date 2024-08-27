<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mou extends Model
{
    use HasFactory;

    protected $table = 'mous';

    protected $fillable = [
        'name',
        'departments',
        'company_name',
        'type',
        'start_date',
        'end_date',
        'recipient_email',
    ];
}


