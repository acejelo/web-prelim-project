<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sales
 * @package App\Models
 * @version October 5, 2021, 1:18 am UTC
 *
 * @property string $Weekly_sales
 * @property string $Staff
 */
class Sales extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Weekly_sales',
        'Staff'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Weekly_sales' => 'string',
        'Staff' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Weekly_sales' => 'required|string|max:255',
        'Staff' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
