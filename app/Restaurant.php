<?php
/**
 * Created by PhpStorm.
 * User: felippe
 * Date: 04/03/2018
 * Time: 01:09
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name','description','photo'];
        protected $appends = ['photo_full_url'];
    
        protected function getPhotoFullUrlAttribute()
       {
            if ($this->attributes['photo'])
                return 'https://s3-'.env('AWS_REGION').'.amazonaws.com/'.env('AWS_BUCKET').'/restaurante/'.$this->attributes['photo'];
            else
                return null;
        }
} 