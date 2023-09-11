<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class UserTable extends DataTableComponent
{
    protected $model = User::class;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
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


}
