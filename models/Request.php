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

    protected $dates = ['deleted_at'];


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
        'files' => 'System\Models\File',
    ];

    public $belongsToMany = [
        'profile' => [
            'Pensoft\Cardprofiles\Models\Profiles',
            'table' => 'pensoft_requests_profiles_pivot',
            'key' => 'request_id',
            'otherKey' => 'profile_id',
            'order' => 'names asc'
        ],
        'partner' => [
            'Pensoft\Partners\Models\Partners',
            'table' => 'pensoft_requests_partners_pivot',
            'key' => 'request_id',
            'otherKey' => 'partner_id',
            'order' => 'instituion asc'
        ],
        'kens' => [
            'Pensoft\Networks\Models\Data',
            'table' => 'pensoft_requests_kens_pivot',
            'key' => 'request_id',
            'otherKey' => 'ken_id',
            'order' => 'title asc'
        ],
    ];
}
