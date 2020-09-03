<?php

namespace App;

use App\Complaint;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable= ['complaint_id','payment_method','items_expense','created_by','confirmed_by_manager','confirmed_by_technician'];
    protected $casts = [
        'items_name' => 'array',
        'items_price' => 'array',
        'items_expense' => 'array',
        
    ];
    public function complaint(){
        return $this->belongsTo ('App\Complaint');
    }
}
