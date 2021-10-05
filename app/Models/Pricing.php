<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricing
 * @package App\Models
 * @version October 5, 2021, 1:16 am UTC
 *
 * @property string $Product_name
 * @property string $Price
 */
class Pricing extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_name',
        'Price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_name' => 'string',
        'Price' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_name' => 'required|string|max:255',
        'Price' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
