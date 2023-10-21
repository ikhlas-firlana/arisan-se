<?php

namespace App\Orchid\Layouts\Table;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CircleListLayout extends Table
{
    protected $target = 'circles';

    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
        ];
    }
}
