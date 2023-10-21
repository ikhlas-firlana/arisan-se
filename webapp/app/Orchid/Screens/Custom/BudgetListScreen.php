<?php

namespace App\Orchid\Screens\Custom;

use App\Orchid\Layouts\Table\BudgetListLayout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;

class BudgetListScreen extends Screen
{

    public function query()
    {
        return [
            'budgets' => [
                new Repository([
                    'name' => 'Belanja Bulanan',
                    'amount' => 'Rp3.000.000',
                    'created_at' => "2023-10-01 11:03",
                    'updated_at' => "2023-10-01 11:03",
                ]),
                new Repository([
                    'name' => 'Sekolah',
                    'amount' => 'Rp1.200.000',
                    'created_at' => "2023-10-01 11:03",
                    'updated_at' => "2023-10-01 11:03",
                ]),
                new Repository([
                    'name' => 'Listrik Air',
                    'amount' => 'Rp800.000',
                    'created_at' => "2023-10-01 11:03",
                    'updated_at' => "2023-10-01 11:03",
                ]),
            ]
        ];
    }
    public function name(): ?string
    {
        return 'Budget';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'list of budget.';
    }
    public function commandBar(): iterable
    {
        return [
            Link::make('New Transaction')
                ->icon('new-doc')
                ->route('platform.budget.fields'),
        ];
    }

    public function layout(): iterable
    {
        return [
            BudgetListLayout::class,
        ];
    }
}
