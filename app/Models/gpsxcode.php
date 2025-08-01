<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gpsxcode extends Model
{
    use HasFactory;
    protected $fillable = [
        'xcode',
        '_meta',
    ];

    protected $casts = [
        '_meta' => 'json',
    ];

}
