<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.07.2023
 * Time: 10:38
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Lesson extends Model
{
    use HasFactoryy;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public static function factory($int)
    {
    }


    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}