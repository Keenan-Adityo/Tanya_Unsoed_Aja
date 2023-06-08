<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    protected $primaryKey = 'id_admin';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
