<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "about";
    protected $primaryKey = "about_id";
    public $timestamps = false;
    public $fillable = ['about_gmf_gambar','about_gmf_text','about_gass_gambar','about_gass_text','about_facility_gambar','about_facility_text','about_testimony_g1','about_testimony_n1','about_testimony_g2','about_testimony_n2','about_testimony_g3','about_testimony_n3','about_testimony_t1','about_testimony_t2','about_testimony_t3','about_testimony_title1','about_testimony_title2','about_testimony_title3'];
}
