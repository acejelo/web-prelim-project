<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Products
 * @package App\Models
 * @version October 5, 2021, 1:12 am UTC
 *
 * @property string $Product_name
 * @property string $Brand
 * @property string $Price
 */
class Products extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_name',
        'Brand',
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
        'Brand' => 'string',
        'Price' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_name' => 'required|string|max:255',
        'Brand' => 'required|string|max:255',
        'Price' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
