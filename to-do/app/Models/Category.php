<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Task;

class Category extends Model
{
    use HasFactory;

    /* isto define os dados que serao inseridos pelo controller */
    protected $fillable = [
        'title',
        'color',
        'user_id'
    ];

    /*isot faz o relacionamento entre a categoria e o usuario */
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
