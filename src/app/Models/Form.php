<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\ModelInterface;

class Form extends Model implements Auditable, ModelInterface
{
    use AuditableTrait, SoftDeletes;

    protected $fillable = ['user_id', 'name', 'description', 'introduction', 'start_publish', 'end_publish'];

    public function author()
    {
        return $this->belongsTo('\App\Models\User');
    }

    public function questions()
    {
        return $this->hasMany('\App\Models\Question');
    }
}
