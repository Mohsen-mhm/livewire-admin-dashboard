<?php

namespace App\Http\Livewire;

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
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Email", "email")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-3',
                        'id' => "user-$row->id",
                    ];
                })
                ->buttons([
                    LinkColumn::make('Show')
                        ->title(fn($row) => '')
                        ->location(fn($row) => '#')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'text-yellow-600 fa-solid fa-lg fa-eye',
                                'wire:click' => "\$emit('openModal', 'users.show-user', {user:$row->id})",
                            ];
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn($row) => '')
                        ->location(fn($row) => '#')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'text-blue-600 fa-solid fa-lg fa-pencil',
                                'wire:click' => "\$emit('openModal', 'users.edit-user', {user:$row->id})",
                            ];
                        }),
                    LinkColumn::make('Delete')
                        ->title(fn($row) => '')
                        ->location(fn($row) => '#')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'text-red-500 fa-solid fa-lg fa-trash',
                                'wire:click' => "destroy($row->id)",
                            ];
                        }),
                ]),
        ];
    }

    public function destroy($userId)
    {
        User::destroy($userId);
    }
}
