<?php

namespace App\Repositories;

use App\Chapter;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ChapterRepository
 * @package App\Repositories
 * @version June 17, 2018, 1:30 pm EEST
 *
 * @method Chapter findWithoutFail($id, $columns = ['*'])
 * @method Chapter find($id, $columns = ['*'])
 * @method Chapter first($columns = ['*'])
*/
class ChapterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Chapter::class;
    }
}
