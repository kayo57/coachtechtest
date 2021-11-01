<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'contacts';
    //可変変更
    protected $fillable =
    [
        'id',
        'postcode',
        'opinion',
        'fullname',
        'gender',
        'address',
        'building_name'
    ];
    public static $rules = array(
        'postcode' => 'required|max:8',
        'opinion' => 'required|max:120',
        'fullname' => 'required|max:20'
        
        
    );
    
}