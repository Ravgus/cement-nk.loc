<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 *
 * @package App
 * @version June 11, 2018, 3:40 pm EEST
 * @property string city_ru
 * @property string city_uk
 * @property string address_ru
 * @property string address_uk
 * @property string phone
 * @property string email
 * @property int $id
 * @property string $city_ru
 * @property string $city_uk
 * @property string $address_ru
 * @property string $address_uk
 * @property string $phone
 * @property string $email
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Contact onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereAddressRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereAddressUk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereCityRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereCityUk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Contact withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Contact withoutTrashed()
 * @mixin \Eloquent
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'city_ru',
        'city_uk',
        'address_ru',
        'address_uk',
        'phone',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'city_ru' => 'string',
        'city_uk' => 'string',
        'address_ru' => 'string',
        'address_uk' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'city_ru' => 'required|max:100',
        'city_uk' => 'required|max:100',
        'address_ru' => 'required|max:255',
        'address_uk' => 'required|max:255',
        'phone' => 'required|between:5,50',
        'email' => 'required|email|max:100'
    ];

    
}
