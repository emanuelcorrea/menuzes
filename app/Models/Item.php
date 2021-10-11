<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name' => false,
        'description' => false,
        'price' => false,
        'position' => false,
        'active' => false
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'section_item';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'item_id';

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
