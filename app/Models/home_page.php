<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_page extends Model
{
    use HasFactory;

    protected $fillable = [

        'slider_1_image',
        'slider_1_header',
        'slider_1_subheader',
        'slider_1_button_name',

        'slider_2_image',
        'slider_2_header',
        'slider_2_subheader',
        'slider_2_button_name',

        'about_image',
        'about_header',
        'about_subheader',
        'about_description',

    ];  
}
