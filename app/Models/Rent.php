<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;


class Rent extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function users()
    {
        return $this->belongsto(User::class,'user_id','id');
}
public function house()
    {
        return $this->belongsto(House::class,'house_id','id');
}
public function payment()
    {
        return $this->hasOne(Payment::class);
}

}
