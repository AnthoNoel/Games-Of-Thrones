<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    use HasFactory;
    // protected $fillable = ['last_name','first_name','image'];

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'id_title');
    }

    public function mother(): BelongsTo
    {
        return $this->belongsTo(Character::class, 'mother_id');
    }

    public function father(): BelongsTo
    {
        return $this->belongsTo(Character::class, 'father_id');
    }

    public function houses(): BelongsToMany
    {
        return $this->belongsToMany(House::class);
    }

}
