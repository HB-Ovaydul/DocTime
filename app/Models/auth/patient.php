<?php

namespace App\Models\auth;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class patient extends User
{
    use HasFactory;

    protected $guarded = [];
}
