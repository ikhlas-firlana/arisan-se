<?php

namespace App\Orchid\Screens\Custom;

use App\Orchid\Layouts\Table\CircleListLayout;
use App\Orchid\Layouts\Table\KasListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;

class KasListScreen extends Screen
{

    public function query()
    {
        return [
            'kas' => [
                new Repository([
                    'name' => 'Kas Arisan PKK Melati Indah 2023',
                ]),
                new Repository([
                    'name' => 'Kas Arisan SMA Kenangan Lama 2022',
                ]),
            ]
        ];
    }

    public function name(): ?string
    {
        return 'Kas';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'list of Kas.';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('New Kas')
                ->icon('new-doc')
                ->route('platform.kas.fields'),
        ];
    }

    public function layout(): iterable
    {
        return [
            KasListLayout::class,
        ];

    }
}
