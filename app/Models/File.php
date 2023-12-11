<?php

namespace App\Models;

use App\Traits\HasCreatorAndUpdater;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class File extends Model
{
    use HasFactory, NodeTrait, SoftDeletes, HasCreatorAndUpdater;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(File::class, 'parent_id');
    }

    public function isOwnedBy($userId): bool
    {
        return $this->created_by == $userId;
    }


    public function isRoot()
    {
        
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if(!model->parent){
                return;
            }
            $model->path = ($model->parent->)
    }
}
