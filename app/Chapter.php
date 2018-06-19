<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Chapter
 *
 * @package App
 * @version June 17, 2018, 1:30 pm EEST
 * @property string title_ru
 * @property string title_uk
 * @property string text_ru
 * @property string text_uk
 * @property integer parent_id
 * @property int $id
 * @property string $title_ru
 * @property string $title_uk
 * @property string $text_ru
 * @property string $text_uk
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Chapter onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chapter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chapter whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chapter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chapter whereTextRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chapter whereTextUk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chapter whereTitleRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chapter whereTitleUk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Chapter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Chapter withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Chapter withoutTrashed()
 * @mixin \Eloquent
 */
class Chapter extends Model
{
    use SoftDeletes;

    public $table = 'chapters';
    

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
        'title_uk' => 'required|max:100'
    ];

    
}
