<?php

/**
 * This file is part of the Portfolio project.
 * (c) Caroline Noyer <hello@carolinenoyer.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label',
        'name',
        'start_year',
        'end_year',
        'level',
        'logo',
        'position',
        'display',
        'skill_type_id',
    ];

    public function type()
    {
        return $this->hasOne(SkillType::class);
    }

    public function experiences()
    {
        return $this->belongsToMany(Experience::class, 'experience_skill');
    }
}
