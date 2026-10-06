<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['publication_year', 'auther', 'title'])]
class Book extends Model
{
    
}
