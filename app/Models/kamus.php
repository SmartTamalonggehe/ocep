<?php

namespace App\Models;

use App\Models\indonesia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kamus extends Model
{
    use HasFactory;
    protected $table = 'kamus';
    protected $guarded = [];

    public function indonesia()
    {
        return $this->belongsTo(indonesia::class);
    }
    public function waropen()
    {
        return $this->belongsTo(waropen::class);
    }
}
