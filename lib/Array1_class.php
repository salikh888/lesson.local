<?php
/**
 * Created by PhpStorm.
 * User: Салих
 * Date: 04.06.2018
 * Time: 20:46
 */

class Array1 implements Iterator, ArrayAccess
{
    public $index = 5;
    private $list = [1, 2, 3, 4];

    public function rewind()
    {
        $this->index = 3;
    }

    public function current()
    {
        return $this->list[$this->index];
    }

    public function key()
    {
        return key($this->list);
    }

    public function next()
    {
        return next($this->list);
    }

    public function valid()
    {
        $key = key($this->list);
        return ($key !== null && $key !== false);
    }

    public function offsetExists($offset)
    {
        return isset($this->list[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->list[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->list[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->list[$offset]);
    }
}