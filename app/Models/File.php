<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_fichier',
        'matiere',
        'path',
        'description',
        'id_fac',
        'id_niveau',
        'id_user'
    ];

    public function faculte()
    {
        return $this->hasOne(Faculte::class);
    }

    public function niveau()
    {
        return $this->hasOne(Devoir::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
