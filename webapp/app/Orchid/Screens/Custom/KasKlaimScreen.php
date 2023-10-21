<?php

namespace App\Orchid\Screens\Custom;

use App\Orchid\Layouts\Table\CirclePersonListLayout;
use App\Orchid\Layouts\Table\KasListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;

class KasKlaimScreen extends Screen
{

    public function query()
    {
        return [
            'people' => [
                new Repository([
                    'name' => 'Ibu Indah',
                ]),
                new Repository([
                    'name' => 'Ibu Vivi',
                ]),
            ]
        ];
    }

    public function name(): ?string
    {
        return 'Arisan';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'list person klaim.';
    }

    public function commandBar(): iterable
    {
        return [
        ];
    }

    public function layout(): iterable
    {
        return [
            CirclePersonListLayout::class,
        ];

    }
}
