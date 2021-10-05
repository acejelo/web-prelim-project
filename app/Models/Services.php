<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Services
 * @package App\Models
 * @version October 5, 2021, 1:15 am UTC
 *
 * @property string $Your_email
 * @property string $Message
 */
class Services extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'services';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Your_email',
        'Message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Your_email' => 'string',
        'Message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Your_email' => 'required|string|max:255',
        'Message' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
