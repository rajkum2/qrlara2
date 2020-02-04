<?php

namespace App\Repositories;

use App\Models\Transactions;
use App\Repositories\BaseRepository;

/**
 * Class TransactionsRepository
 * @package App\Repositories
 * @version February 4, 2020, 9:18 am UTC
*/

class TransactionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'user_id',
        'qrcode_owner_id',
        'qrcode_id',
        'payment_method',
        'amount',
        'message',
        'status'
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
        return Transactions::class;
    }
}
