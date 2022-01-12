<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Rate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id', 'movie_id', 'rating'
    ];
    protected $primaryKey = 'id';
    protected $table = "rates";
}
