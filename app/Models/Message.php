<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Message extends Model
{
    //
    use HasFactory;

    protected $table = 'message';

    protected $fillable = [
        'sender_id',
        'product_id',
        'message',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
