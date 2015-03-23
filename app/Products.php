<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Products extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    protected $primaryKey = 'id_product';

}
