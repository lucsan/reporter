<?php
// src/AppBundle/Entity/Order.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Order
{
    private $id;
    private $name;
    private $price;

    public function setOrder ($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getOrder ()
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->name = $this->name;
        $obj->price = $this->price;
        return $obj;
    }
}
