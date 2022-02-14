<?php

namespace Modules\WidgetManager\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WhatsappChatWidgetTemplate extends Model
{
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\WidgetManager\Database\factories\WhatsappChatWidgetTemplateFactory::new();
    }
}
