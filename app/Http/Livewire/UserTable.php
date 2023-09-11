<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\NumberFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class UserTable extends DataTableComponent
{
    protected $model = User::class;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setFiltersEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make(__('messages.id'), "id")
                ->sortable(),
            Column::make(__('messages.name'), "name")
                ->sortable()
                ->searchable(),
            Column::make(__('messages.email'), "email")
                ->sortable()
                ->searchable(),
            Column::make(__('messages.register.date'), "created_at")
                ->sortable(),
            ButtonGroupColumn::make(__('messages.actions'))
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('Show')
                        ->title(fn($row) => '')
                        ->location(fn($row) => 'javascript:void(0)')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'text-yellow-600 fa-solid fa-lg fa-eye',
                                'wire:click' => "\$emit('openModal', 'users.show-user', {user:$row->id})",
                            ];
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn($row) => '')
                        ->location(fn($row) => 'javascript:void(0)')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'text-blue-600 fa-solid fa-lg fa-pencil',
                                'wire:click' => "\$emit('openModal', 'users.edit-user', {user:$row->id})",
                            ];
                        }),
                    LinkColumn::make('Delete')
                        ->title(fn($row) => '')
                        ->location(fn($row) => 'javascript:void(0)')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'text-red-500 fa-solid fa-lg fa-trash',
                                'wire:click' => "\$emit('openModal', 'users.delete-user', {user:$row->id})",
                            ];
                        }),
                ]),
        ];
    }

    public function filters(): array
    {
        return [
            DateFilter::make(__('messages.register.date'))
                ->setFilterPillTitle(__('messages.register.date'))
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('users.created_at', 'like', '%' . $value . '%');
                }),

            TextFilter::make(__('messages.name.search'))
                ->setFilterPillTitle(__('messages.name'))
                ->config([
                    'maxlength' => '25',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('users.name', 'like', '%' . $value . '%');
                }),

            TextFilter::make(__('messages.email.search'))
                ->setFilterPillTitle(__('messages.email'))
                ->config([
                    'maxlength' => '25',
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('users.email', 'like', '%' . $value . '%');
                }),

            NumberFilter::make(__('messages.id'))
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('users.id', 'like', '%' . $value . '%');
                }),
        ];
    }

}
