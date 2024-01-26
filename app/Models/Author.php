<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // one to one
    public function profile() {
        return $this->hasOne("App\Profile");
    }
    // one to many
    public function blogPost() {
        return $this->hasMany("App\Profile");
    }
    use HasFactory;
}
