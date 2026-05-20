<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['status', 'customer_id', 'date', 'total_price', 'notes',
            'reason_for_cancellation','nif','address','payment_type','payment_ref','receipt_url','custom','created_at','updated_at'])]
#[Table(key: 'id', keyType: 'int', incrementing: false, timestamps: false)]
class Order extends Model
{
    /*public function getFullNameAttribute()
    {
        return match ($this->type) {
            'Master'    => "Master's in ",
            'TESP'      => 'TeSP - ',
            default     => ''
        } . $this->name;
    }*/

   
    

    /*public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'course', 'abbreviation');
    }

    public function disciplines(): HasMany
    {
        return $this->hasMany(Discipline::class, 'course', 'abbreviation');
    }*/
    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function order_items(): HasMany
    {
        return $this->hasMany(Order_item::class, 'order_id','id');
    }
}
