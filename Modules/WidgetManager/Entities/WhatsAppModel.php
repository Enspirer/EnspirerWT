<?php

namespace Modules\WidgetManager\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WhatsAppModel extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\WidgetManager\Database\factories\WhatsAppModelFactory::new();
    }
}
