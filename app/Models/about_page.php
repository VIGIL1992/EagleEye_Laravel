<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_page extends Model
{
    use HasFactory;

    protected $fillable = [

        'about_page_header',
        'about_image',
        'about_heading',
        'about_description',
        
        'history_image',
        'history_heading',
        'history_description',
        'history_year',

    ];  
}
