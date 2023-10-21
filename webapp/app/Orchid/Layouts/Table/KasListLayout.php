<?php

namespace App\Orchid\Layouts\Table;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class KasListLayout extends Table
{

    protected $target = 'kas';

    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('', 'Arisan')
                ->render(function () {
                    return Link::make('Start')
                        ->route('platform.circle-kas-klaim.list');
                }),
            TD::make('', '#')
                ->render(function () {
                    return Link::make('Detail')
                        ->route('platform.kas.fields');
                }),
        ];
    }
}
