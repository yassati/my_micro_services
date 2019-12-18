<?php namespace App;
use Illuminate\Database\Eloquent\Model;

class Message extends Model {
    protected $table = ‘Message’;
    protected $fillable = [
        ‘message’,
        ‘id_sender’,
        ‘id_receiver’
    ];
}