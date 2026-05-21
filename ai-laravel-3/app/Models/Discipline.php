<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Fillable(['course', 'year', 'semester', 'abbreviation', 'name', 'name_pt',
        'ECTS', 'hours', 'optional'])]
#[Table(timestamps: false)]
class Discipline extends Model
{

}
