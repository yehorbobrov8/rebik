<?php

namespace KodiComponents\Navigation\Contracts;

use Closure;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Renderable;

interface BadgeInterface extends Renderable, Arrayable
{

    /**
     * @return integer
     */
    public function getPriority();

    /**
     * @param string|Closure $value
     *
     * @return $this
     */
    public function setValue($value);

    /**
     * @return string
     */
    public function getValue();
}
