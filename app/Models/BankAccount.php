<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;
    protected $table = 'banks_account';
    protected $fillable = [
        'account_number',
        'full_name',
        'email',
        'phone_number',
        'balance',
        'status'
    ];
}
