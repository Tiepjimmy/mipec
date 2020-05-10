<?php namespace donhang\Donhang\Models;

use Model;

/**
 * Model
 */
class Donhang extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'donhang_donhang_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
