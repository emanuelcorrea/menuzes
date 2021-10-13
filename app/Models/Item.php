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
        'section_id' => 1,
        'description' => false,
        'price' => false,
        'image_path' => false,
        'position' => 1,
        'active' => 1
    ];

    protected $fillable = [
        'name',
        'section_id',
        'description',
        'price',
        'image_path',
        'position',
        'active'
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
