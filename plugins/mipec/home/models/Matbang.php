<?php namespace Mipec\Home\Models;

use Model;

/**
 * Model
 */
class Matbang extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mipec_home_matbang';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
