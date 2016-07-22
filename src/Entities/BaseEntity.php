<?php

namespace Slack\Entities;

use Nette\Object;

class BaseEntity extends Object
{
    /**
     * BaseEntity constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($data as $key => $value)
        {
            if ($this->getReflection()->hasMethod($method = 'set' . ucfirst($key)))
            {
                $this->{$method}(is_array($value) && array_key_exists('value', $value) ? $value['value'] : $value);
            }
        }
    }
}
