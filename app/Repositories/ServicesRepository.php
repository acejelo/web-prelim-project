<?php

namespace App\Repositories;

use App\Models\Services;
use App\Repositories\BaseRepository;

/**
 * Class ServicesRepository
 * @package App\Repositories
 * @version October 5, 2021, 1:15 am UTC
*/

class ServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Your_email',
        'Message'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Services::class;
    }
}
