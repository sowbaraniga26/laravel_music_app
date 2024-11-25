<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

use Filament\Forms\Contracts\HasForms;

use Filament\Forms\Concerns\InteractsWithForms;

use Filament\Forms\Form;

use Filament\Forms;


use Filament\Tables;

use Filament\Tables\Table;


use Filament\Support\Exceptions\Halt;

use App\Models\SystemSetting;

use Filament\Notifications\Notification;


class EditSystemSetting extends Page implements HasForms
{

    use InteractsWithForms;

    public ?array $data = [];

    public SystemSetting $systemSetting;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.edit-system-setting';

    public function mount(): void
    {
        // $this->forms->fill();

        // Retrieve the first or default system setting data
        $this->systemSetting = SystemSetting::firstOrNew([]);

        // dd(SystemSetting::first());

        // dd($this->sustemSetting->attributeToArray());

        //prefill the form fields
        // $this->form->fill($this->systemSetting->toArray);

        // Map the model's attributes to the form state
        $this->data = $this->systemSetting->toArray();
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('company_name')
                ->label('company Name')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),
            Forms\Components\TextInput::make('website')
                ->label('website')
                // -> url()
                ->required(),
            Forms\Components\TextInput::make('customer_care_no')
                ->label('customer care number')
                ->required(),
        ])
        ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return[
            Tables\Actions\Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            // Update the model with the form's state
            $this->systemSetting->fill($this->form->getState());
            $this->systemSetting->save();

            Notification::make()
                ->success()
                ->title('Settings Saved')
                ->body('System settings have been updated successfully.')
                ->send();

        } catch (\Exception $exception) {
            Notification::make()
                ->danger()
                ->title('Error')
                ->body('Failed to save system settings.')
                ->send();

            // Optional: Log the exception for debugging
            \Log::error($exception);
        }
    }
}