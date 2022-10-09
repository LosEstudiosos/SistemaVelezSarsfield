<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajeria extends Model
{
    use HasFactory;

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeReceived($query)
    {
        return $query->where('user_receptor_id','=' , auth()->id())
                    ->where('borrador','=' , 0)
                    ->where('eliminado','=' , 0);
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSended($query)
    {
        return $query->where('user_emisor_id','=' , auth()->id())
                    ->where('borrador','=' , 0)
                    ->where('eliminado','=' , 0);
    }
    
    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDrafted($query)
    {
        return $query->where('user_emisor_id','=' , auth()->id())
                    ->where('borrador','=' , 1)
                    ->where('eliminado','=' , 0);
    }

    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTrashed($query)
    {
        return $query->where([
                        ['user_emisor_id','=' , auth()->id()],
                        ['borrador','=' , 0],
                        ['eliminado','=' , 1]
                    ])
                    ->orWhere(function($query) {
                        $query->where('user_receptor_id','=' , auth()->id())
                                ->where('borrador','=' , 0)
                                ->where('eliminado','=' , 1);
                    });
    }

}