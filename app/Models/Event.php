<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'body', 'slug', 'start_event'];
    protected $dates = ['start_event'];

    /**
     * Acessor
     */
    public function getTitleAttribute()
    {
        return 'Evento: ' . $this->attributes['title'];
    }

    public function getOwnerNameAttribute()
    {
        return !$this->owner ? 'Organizador não encontrado' : $this->owner->name;
    }

    /**
     * Mutators
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
