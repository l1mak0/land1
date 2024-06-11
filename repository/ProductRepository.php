<?php

namespace app\repository;
use app\entity\Products;

class ProductRepository
{
    public static function getAll()
    {
        return Products::find()->all();
    }

}