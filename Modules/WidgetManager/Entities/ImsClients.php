<?php

namespace Modules\WidgetManager\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImsClients extends Model
{
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\WidgetManager\Database\factories\ImsClientsFactory::new();
    }
}
