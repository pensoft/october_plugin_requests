<?php namespace Pensoft\Requests\Models;

use Model;
use October\Rain\Database\Traits\Sortable;


/**
 * Model
 */
class Request extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    use Sortable;

    protected $casts = [
        'deleted_at' => 'datetime',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_requests_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'files' => \System\Models\File::class,
    ];

    public $belongsToMany = [
        'profile' => [
            \Pensoft\Cardprofiles\Models\Profiles::class,
            'table' => 'pensoft_requests_profiles_pivot',
            'key' => 'request_id',
            'otherKey' => 'profile_id',
            'order' => 'names asc'
        ],
        'partner' => [
            \Pensoft\Partners\Models\Partners::class,
            'table' => 'pensoft_requests_partners_pivot',
            'key' => 'request_id',
            'otherKey' => 'partner_id',
            'order' => 'instituion asc'
        ],
        'kens' => [
            \Pensoft\Networks\Models\Data::class,
            'table' => 'pensoft_requests_kens_pivot',
            'key' => 'request_id',
            'otherKey' => 'ken_id',
            'order' => 'title asc'
        ],
    ];
}