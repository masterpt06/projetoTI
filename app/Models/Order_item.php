<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['order_id', 'tshirt_image_id', 'color_code', 'size', 'qty',
            'unit_price','sub_total','custom'])]
#[Table(key: 'id', keyType: 'int', incrementing: false, timestamps: false)]
class Order_item extends Model
{
    /*public function getFullNameAttribute()
    {
        return match ($this->type) {
            'Master'    => "Master's in ",
            'TESP'      => 'TeSP - ',
            default     => ''
        } . $this->name;
    }*/

    /*public function getImageUrlAttribute()
    {
        if ($this->photo_url &&Storage::disk('public')->exists("photos/{$this->photo_url}")) {

        return asset("storage/photos/{$this->photo_url}");
    }

    return asset("storage/photos/anonymous.png");
    }*/
    

    /*public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'course', 'abbreviation');
    }

    public function disciplines(): HasMany
    {
        return $this->hasMany(Discipline::class, 'course', 'abbreviation');
    }*/
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class,'order_id');
    }
    public function tshirt_images(): BelongsTo
    {
        return $this->belongsTo(Tshirt_image::class,'tshirt_image_id');
    }
}
