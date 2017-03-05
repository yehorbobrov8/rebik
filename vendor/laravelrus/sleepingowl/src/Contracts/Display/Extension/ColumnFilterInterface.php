<?php

namespace SleepingOwl\Admin\Contracts\Display\Extension;

use Illuminate\Database\Eloquent\Builder;
use SleepingOwl\Admin\Contracts\Display\NamedColumnInterface;
use SleepingOwl\Admin\Contracts\Initializable;

interface ColumnFilterInterface extends Initializable
{
    /**
     * @param mixed $value
     *
     * @return mixed
     */
    public function parseValue($value);

    /**
     * @param NamedColumnInterface $column
     * @param Builder $query
     * @param string $queryString
     * @param array|string $queryParams
     *
     * @return void
     */
    public function apply(NamedColumnInterface $column, Builder $query, $queryString, $queryParams);
}
