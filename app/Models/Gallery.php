<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 * @property mixed title
 */
class Gallery extends Model
{
    protected $fillable = ['title','description'];
    public function getImagePathAttribute()
    {
        return url('images/' . $this->filename);
    }

    public function gallery_images()
    {
        return $this->hasMany('App\Models\GalleryImage');
    }


}
