<?php

namespace Cerpus\ImageServiceClient\DataObjects;


use Cerpus\ImageServiceClient\Traits\CreateTrait;

/**
 * Class ImageDataObject
 * @package Cerpus\ImageServiceClient\DataObjects
 *
 * @method static ImageDataObject create($attributes = null)
 */
class ImageDataObject
{
    use CreateTrait;

    public $id, $state, $size;

}