<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable(['customer_id', 'category_id', 'name', 'description', 'image_url',
            'custom','created_at','updated_at','deleted_at'])]
#[Table(key: 'id', keyType: 'int', incrementing: false, timestamps: false)]
class Tshirt_image extends Model
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
        if ($this->image_url &&Storage::disk('public')->exists("tshirt_images/{$this->image_url}")) {

        return asset("storage/tshirt_images/{$this->image_url}");
    }
    }*/
    public function getPhotoFullUrlAttribute()
    {
        if ($this->image_url && Storage::disk('public')->exists("tshirt_images/{$this->image_url}")) {
            return asset("storage/tshirt_images/{$this->image_url}");
        }
        return asset("storage/photos/anonymous.png");
    }

    //return asset("storage/photos/anonymous.png");
   
    public function categories(): HasOne
    {
        return $this->hasOne(Category::class, 'category_id');
    }
    public function order_items(): HasMany
    {
        return $this->hasMany(Order_item::class,'tshirt_image_id', 'id');
    }
    public function customers(): HasOne
    {
        return $this->hasOne(Customer::class, 'customer_id');
    }

    /*public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'course', 'abbreviation');
    }

    public function disciplines(): HasMany
    {
        return $this->hasMany(Discipline::class, 'course', 'abbreviation');
    }*/
}
