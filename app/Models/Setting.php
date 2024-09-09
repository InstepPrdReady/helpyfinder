<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
        'title',
        'keywords',
        'author',
        'contact',
        'phone',
        'price_range',
        'country',
        'address',
        'whatsapp',
        'font',
        'favicon',
        'facebook_pixel',
        'facebook_pixel_switch',
        'analytics',
        'gtm_analytics',
        'analytics_switch',
        'hs_switch',
        'hs_region',
        'hs_portal_id',
        'hs_form_id',
        'SchmeaORG',
        'SchmeaORG_switch',
        'OGgraph',
        'OGgraph_switch',
        'photo_id',
        'custom_css',
        'custom_js',
        'loader_status',
        'loader_img',
        'loader_color',
        'maintenance_status',
        'maintenance_text',

        'np_switch',
        'np_text',
        'np_text_color',
        'np_cta_text',
        'np_cta_url',
        'np_cta_target',
        'np_cta_text_color',
        'np_nbg_color',
        'np_start_datetime',
        'np_end_datetime'
    ];

    public function photo(){
        return $this->belongsTo('App\Models\Photo', 'photo_id');
    }
}
