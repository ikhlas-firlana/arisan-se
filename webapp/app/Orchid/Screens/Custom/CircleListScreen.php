<?php

namespace App\Orchid\Screens\Custom;

use App\Orchid\Layouts\Table\CircleListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;

class CircleListScreen extends Screen
{
    public function query()
    {
        return [
            'circles' => [
                new Repository([
                    'name' => 'Ibu PKK Indah Melati',
                ]),
                new Repository([
                    'name' => 'SMA Kenangan Lama',
                ]),
            ]
        ];
    }
    public function name(): ?string
    {
        return 'Circle';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'list of Circle.';
    }
    public function commandBar(): iterable
    {
        return [
            Link::make('New Circle')
                ->icon('new-doc')
                ->route('platform.circle.fields'),
        ];
    }

    public function layout(): iterable
    {
        return [
            CircleListLayout::class,
        ];
    }
}
