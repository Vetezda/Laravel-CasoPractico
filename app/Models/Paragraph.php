<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    use HasFactory;

    public function path(){

        return '/paragraph/'.$this->NumberOfParagraphs;
    }
}
