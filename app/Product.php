<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 *
 * @package App
 * @version June 17, 2018, 2:00 pm EEST
 * @property string title_ru
 * @property string title_uk
 * @property string text_ru
 * @property string text_uk
 * @property int $id
 * @property string $title_ru
 * @property string $title_uk
 * @property string $text_ru
 * @property string $text_uk
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Product onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTextRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTextUk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTitleRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTitleUk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Product withoutTrashed()
 * @mixin \Eloquent
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title_ru',
        'title_uk',
        'text_ru',
        'text_uk'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title_ru' => 'string',
        'title_uk' => 'string',
        'text_ru' => 'string',
        'text_uk' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_ru' => 'required|max:100',
        'title_uk' => 'required|max:100',
        'text_ru' => 'required',
        'text_uk' => 'required'
    ];

    
}
