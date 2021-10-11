<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name' => false,
        'position' => false,
        'active' => false
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'section';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function sectionItems()
    {
        return $this->hasMany(Item::class);
    }
}
