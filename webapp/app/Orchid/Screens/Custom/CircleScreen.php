<?php

namespace App\Orchid\Screens\Custom;

use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CircleScreen extends Screen
{
    /**
     * Fish text for the table.
     */
    public const TEXT_EXAMPLE = 'Lorem ipsum at sed ad fusce faucibus primis, potenti inceptos ad taciti nisi tristique
    urna etiam, primis ut lacus habitasse malesuada ut. Lectus aptent malesuada mattis ut etiam fusce nec sed viverra,
    semper mattis viverra malesuada quam metus vulputate torquent magna, lobortis nec nostra nibh sollicitudin
    erat in luctus.';

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'toast' => '',
            'name' => '',
            'charts'  => [
                [
                    'name'   => 'Some Data',
                    'values' => [25, 40, 30, 35, 8, 52, 17],
                    'labels' => ['12am-3am', '3am-6am', '6am-9am', '9am-12pm', '12pm-3pm', '3pm-6pm', '6pm-9pm'],
                ],
                [
                    'name'   => 'Another Set',
                    'values' => [25, 50, -10, 15, 18, 32, 27],
                    'labels' => ['12am-3am', '3am-6am', '6am-9am', '9am-12pm', '12pm-3pm', '3pm-6pm', '6pm-9pm'],
                ],
                [
                    'name'   => 'Yet Another',
                    'values' => [15, 20, -3, -15, 58, 12, -17],
                    'labels' => ['12am-3am', '3am-6am', '6am-9am', '9am-12pm', '12pm-3pm', '3pm-6pm', '6pm-9pm'],
                ],
                [
                    'name'   => 'And Last',
                    'values' => [10, 33, -8, -3, 70, 20, -34],
                    'labels' => ['12am-3am', '3am-6am', '6am-9am', '9am-12pm', '12pm-3pm', '3pm-6pm', '6pm-9pm'],
                ],
            ],
            'table'   => [
                new Repository(['id' => 100, 'name' => self::TEXT_EXAMPLE, 'price' => 10.24, 'created_at' => '01.01.2020']),
                new Repository(['id' => 200, 'name' => self::TEXT_EXAMPLE, 'price' => 65.9, 'created_at' => '01.01.2020']),
                new Repository(['id' => 300, 'name' => self::TEXT_EXAMPLE, 'price' => 754.2, 'created_at' => '01.01.2020']),
                new Repository(['id' => 400, 'name' => self::TEXT_EXAMPLE, 'price' => 0.1, 'created_at' => '01.01.2020']),
                new Repository(['id' => 500, 'name' => self::TEXT_EXAMPLE, 'price' => 0.15, 'created_at' => '01.01.2020']),

            ],
            'metrics' => [
                'sales'    => ['value' => number_format(6851), 'diff' => 10.08],
                'visitors' => ['value' => number_format(24668), 'diff' => -30.76],
                'orders'   => ['value' => number_format(10000), 'diff' => 0],
                'total'    => number_format(65661),
            ],
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Transaction';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'Examples for creating a wide variety of forms.';
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->method('showToast')
                ->novalidate()
                ->icon('paper-plane'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
//            Layout::columns([
            Layout::rows([

                Input::make('amount')
                    ->title('Amount')
                    ->placeholder('Enter Amount')
                    ->required()
                    ->help('Input amount transaction'),

                Input::make('name')
                    ->title('Name')
                    ->placeholder('Enter name')
                    ->required()
                    ->help('Input name transaction'),
//
//                    Input::make('email')
//                        ->title('Email address')
//                        ->placeholder('Email address')
//                        ->help("We'll never share your email with anyone else.")
//                        ->popover('Tooltip - hint that user opens himself.'),
//
//                    Password::make('password')
//                        ->title('Password')
//                        ->placeholder('Password'),
////
//                    Label::make('static')
//                        ->title('Static:')
//                        ->value('email@example.com'),
//
                Select::make('select')
                    ->title('Type')
                    ->required()
                    ->options(['Debit', 'Credit'])
                    ->help('Choose type transaction'),

//                    CheckBox::make('checkbox')
//                        ->title('Checkbox')
//                        ->placeholder('Remember me'),
//
//                    Radio::make('radio')
//                        ->placeholder('Yes')
//                        ->value(1)
//                        ->title('Radio'),
//
//                    Radio::make('radio')
//                        ->placeholder('No')
//                        ->value(0),
//
                TextArea::make('textarea')
                    ->title('Description')
                    ->rows(6)
                    ->help('Description detail of transaction'),

            ])->title('Transaction'),
//                Layout::rows([
//                    Input::make('disabled_input')
//                        ->title('Disabled Input')
//                        ->placeholder('Disabled Input')
//                        ->help('A disabled input element is unusable and un-clickable.')
//                        ->disabled(),
//
//                    Select::make('disabled_select')
//                        ->title('Disabled select')
//                        ->options([1, 2])
//                        ->value(0)
//                        ->disabled(),
//
//                    TextArea::make('disabled_textarea')
//                        ->title('Disabled textarea')
//                        ->placeholder('Disabled textarea')
//                        ->rows(6)
//                        ->disabled(),
//
//                    Input::make('readonly_input')
//                        ->title('Readonly Input')
//                        ->placeholder('Readonly Input')
//                        ->readonly(),
//
//                    CheckBox::make('readonly_checkbox')
//                        ->title('Readonly Checkbox')
//                        ->placeholder('Remember me')
//                        ->disabled(),
//
//                    Radio::make('radio')
//                        ->placeholder('Yes')
//                        ->value(1)
//                        ->title('Radio')
//                        ->disabled(),
//
//                    Radio::make('radio')
//                        ->placeholder('No')
//                        ->value(0)
//                        ->disabled(),
//
//                    TextArea::make('readonly_textarea')
//                        ->title('Readonlyd textarea')
//                        ->placeholder('Readonlyd textarea')
//                        ->rows(7)
//                        ->disabled(),
//
//                ])->title('Input States'),
//            ]),
//
//            Layout::rows([
//                Group::make([
//                    Button::make('Primary')->method('buttonClickProcessing')->type(Color::PRIMARY()),
//                    Button::make('Secondary')->method('buttonClickProcessing')->type(Color::SECONDARY()),
//                    Button::make('Success')->method('buttonClickProcessing')->type(Color::SUCCESS()),
//                    Button::make('Danger')->method('buttonClickProcessing')->type(Color::DANGER()),
//                    Button::make('Warning')->method('buttonClickProcessing')->type(Color::WARNING()),
//                    Button::make('Info')->method('buttonClickProcessing')->type(Color::INFO()),
//                    Button::make('Light')->method('buttonClickProcessing')->type(Color::LIGHT()),
//                    Button::make('Dark')->method('buttonClickProcessing')->type(Color::DARK()),
//                    Button::make('Default')->method('buttonClickProcessing')->type(Color::DEFAULT()),
//                    Button::make('Link')->method('buttonClickProcessing')->type(Color::LINK()),
//                ])->autoWidth(),
//            ])->title('Buttons'),
//
//            Layout::rows([
//                Input::make('test')
//                    ->title('Text')
//                    ->value('Artisanal kale')
//                    ->help('Basic single-line text fields.')
//                    ->horizontal(),
//
//                Input::make('search')
//                    ->type('search')
//                    ->title('Search')
//                    ->value('How do I shoot web')
//                    ->help('Text fields designed for the user to enter search queries into.')
//                    ->horizontal(),
//
//                Input::make('email')
//                    ->type('email')
//                    ->title('Email')
//                    ->value('bootstrap@example.com')
//                    ->help('Used to let the user enter and edit an e-mail address')
//                    ->horizontal(),
//
//                Input::make('url')
//                    ->type('url')
//                    ->title('Url')
//                    ->value('https://getbootstrap.com')
//                    ->horizontal()
//                    ->help('You might use this when asking to input their website address for a business directory'),
//
//                Input::make('tel')
//                    ->type('tel')
//                    ->title('Telephone')
//                    ->value('1-(555)-555-5555')
//                    ->horizontal()
//                    ->popover('The device’s autocomplete mechanisms kick in and suggest
//                        phone numbers that can be autofilled with a single tap.')
//                    ->help('Focusing input on a telephone field brings up
//                        a numeric keypad ready for keying in a number.'),
//
//                Input::make('password')
//                    ->type('password')
//                    ->title('Password')
//                    ->value('Password')
//                    ->horizontal(),
//
//                Input::make('number')
//                    ->type('number')
//                    ->title('Number')
//                    ->value(42)
//                    ->horizontal(),
//
//                Input::make('date_and_time')
//                    ->type('datetime-local')
//                    ->title('Date and time')
//                    ->value('2011-08-19T13:45:00')
//                    ->horizontal(),
//
//                Input::make('date')
//                    ->type('date')
//                    ->title('Date')
//                    ->value('2011-08-19')
//                    ->horizontal(),
//
//                Input::make('month')
//                    ->type('month')
//                    ->title('Month')
//                    ->value('2011-08')
//                    ->horizontal(),
//
//                Input::make('week')
//                    ->type('week')
//                    ->title('Week')
//                    ->value('2011-W33')
//                    ->horizontal(),
//
//                Input::make('Time')
//                    ->type('time')
//                    ->title('Time')
//                    ->value('13:45:00')
//                    ->horizontal(),
//
//                Input::make('datalist')
//                    ->title('Datalist example')
//                    ->help('Most browsers include some support for "datalist"
//                                 elements, their styling is inconsistent at best.')
//                    ->datalist([
//                        'San Francisco',
//                        'New York',
//                        'Seattle',
//                        'Los Angeles',
//                        'Chicago',
//                    ])
//                    ->horizontal(),
//
//                Input::make('color')
//                    ->type('color')
//                    ->title('Color')
//                    ->value('#563d7c')
//                    ->horizontal(),
//
//                Button::make('Submit')
//                    ->method('buttonClickProcessing')
//                    ->type(Color::DEFAULT()),
//
//            ])->title('Textual HTML5 Inputs'),
        ];
    }

    public function buttonClickProcessing()
    {
        Alert::warning('Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.');
    }



    /**
     * @param Request $request
     */
    public function showToast(Request $request): void
    {
        Toast::success($request->get('toast', 'Success.'));
    }

}
