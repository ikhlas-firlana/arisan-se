<?php

namespace App\Orchid\Layouts\Table;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CircleListLayout extends Table
{
    protected $target = 'circles';

    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('', 'Action Add')
                ->render(function () {
                    return
                        Link::make('Add Person')
                        ->route('platform.circle-add.fields');
                }),
            TD::make('', '#')
                ->render(function () {
                    return
                        Link::make('Detail')
                            ->route('platform.circle.fields');
                }),
        ];
    }
}
