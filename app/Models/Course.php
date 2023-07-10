<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.07.2023
 * Time: 10:37
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property mixed name
 */
class Course extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}