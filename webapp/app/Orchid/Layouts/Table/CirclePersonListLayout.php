<?php

namespace App\Orchid\Layouts\Table;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Repository;
use Orchid\Screen\TD;

class CirclePersonListLayout extends Table
{

    protected $target = 'people';

    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('klaim', 'Klaim Date'),
            TD::make('', 'Action')
                ->render(function (Repository $r) {
                    return "Klaim Now";
                }),
        ];
    }
}
