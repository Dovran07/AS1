<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.07.2023
 * Time: 10:37
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'surname',
    ];
    public $timestamps = false;

    /**
     * @param $int
     */
    public static function factory($int)
    {
    }


    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}