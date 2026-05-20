<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['nif', 'address', 'default_payment_type', 'default_payment_ref', 'custom',
            'deleted_at'])]
#[Table(key: 'id', keyType: 'int', incrementing: false, timestamps: false)]
class Customer extends Model
{
    /*public function getFullNameAttribute()
    {
        return match ($this->type) {
            'Master'    => "Master's in ",
            'TESP'      => 'TeSP - ',
            default     => ''
        } . $this->name;
    }*/

    public function getImageUrlAttribute()
    {
        if ($this->photo_url &&Storage::disk('public')->exists("photos/{$this->photo_url}")) {

        return asset("storage/photos/{$this->photo_url}");
    }

    return asset("storage/photos/anonymous.png");
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'costumer_id', 'id');
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function tshirt_images(): HasMany
    {
        return $this->hasMany(Tshirt_image::class, 'customer_id','id');
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
