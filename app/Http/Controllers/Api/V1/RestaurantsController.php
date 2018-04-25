<?php
/**
 * Created by PhpStorm.
 * User: felippe
 * Date: 04/03/2018
 * Time: 01:15
 */

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiControllers;
use App\Restaurant;
use Laravel\Lumen\Routing\Controller;
class RestaurantsController extends Controller
{
    use ApiControllers;

    protected $model;
    protected $rules = [
        'name' =>   'required|min:3',
        'description' => 'required'
    ];
    protected $messages = [
        'required' => ':attribute é obrigatorio',
        'min' => ':attribute precisa de pelo menos :min caracteres'
    ];

    public function __construct(Restaurant $model)
    {
        $this->model = $model;

    }

}