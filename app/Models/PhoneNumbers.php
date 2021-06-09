<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PhoneNumbers extends Model
{
    use HasFactory;
    protected $table = 'phone_number';
    protected $fillable = [
        'user_id',
        'phone_number',
    ];

    public function users()
    {
        return $this->BelongsTo(User::class, 'user_id');
    }
}
