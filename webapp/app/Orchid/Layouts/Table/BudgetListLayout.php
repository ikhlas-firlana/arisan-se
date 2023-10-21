<?php
namespace App\Orchid\Layouts\Table;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BudgetListLayout extends Table
{
    protected $target = 'budgets';

    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('amount', 'Amount'),
            TD::make('created_at', 'Created At'),
            TD::make('updated_at', 'Updated At'),
        ];
    }
}
