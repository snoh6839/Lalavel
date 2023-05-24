<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $table = 'boards';

    protected $primaryKey = 'bno';

    protected $guarded = [];

    // protected $fillable = ['col1','col2'];
    // protected $guarded = ['col3', 'col4'];
}
