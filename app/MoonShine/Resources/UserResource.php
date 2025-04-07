<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use Illuminate\Validation\Rule;
use MoonShine\Laravel\Enums\Action;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Enums\ClickAction;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Password;
use MoonShine\UI\Fields\PasswordRepeat;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<User>
 */
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Пользователи сайта';

    protected string $column = 'name';

    protected string $sortColumn = 'id';

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    public function search(): array
    {
        return ['id', 'name', 'email', 'phone', 'partner'];
    }


    /**
     * @return list<FieldContract>
     */
    public function filters(): array
    {
        return [
            ID::make(),

            Text::make('Имя', 'name'),
            Text::make('Аватар', 'avatar'),
            Text::make('Email', 'email'),

        ];
    }

    /**
     * @return //array, выводим teaser
     */

    public function indexFields(): array
    {
        return [
            ID::make()
                ->sortable(),
            Image::make(__('Аватар'), 'avatar'),
            Text::make('Имя', 'name'),
            Text::make(__('Телефон'), 'phone'),
            Text::make(__('Email'), 'email'),
            Switcher::make('Публ.', 'published')->updateOnPreview(),
        ];
    }

    /**
     * @return //array, выводим full
     */
    public function formFields(): array
    {
        return [
            Box::make([
                Tabs::make([

                    Tab::make(__('Общие настройки'), [
                        Grid::make([

                        ]),

                        Grid::make([
                            Column::make([


                                Collapse::make('Имя/Email', [

                                    Text::make('Имя', 'name')->required(),
                                    Text::make('Полное имя (ФИО)', 'username'),
                                    Text::make(__('Email'), 'email'),
                                    Text::make(__('Телефон'), 'phone'),

                                ]),


                                Collapse::make('Изображение', [

                                    Image::make(__('Аватар'), 'avatar')
                                        ->disk(config('moonshine.disk', 'moonshine'))
                                        ->dir('users')
                                        ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                        ->removable(),
                                ]),

                            ])
                                ->columnSpan(6),
                            Column::make([

                                Collapse::make('Публикация', [

                                    Switcher::make('Публикация', 'published')->default(1),

                                ]),




                            ])
                                ->columnSpan(6)

                        ]),

                    ]),


                    Tab::make(__('Пароль'), [
                        Grid::make([
                            Column::make([
                                Collapse::make('Пароль', [

                                    Password::make(__('moonshine::ui.resource.password'), 'password')
                                        ->customAttributes(['autocomplete' => 'new-password'])
                                        ->eye(),

                                    PasswordRepeat::make(__('moonshine::ui.resource.repeat_password'), 'password_repeat')
                                        ->customAttributes(['autocomplete' => 'confirm-password'])
                                        ->eye(),


                                ]),
                            ])->columnSpan(12),
                        ]),

                    ]),

                ]),


            ]),
        ];


    }

    protected function rules(mixed $item): array
    {

        return [
            'name' => 'max:50',
            'email' => [
                'sometimes',
                'bail',
                'required',
                'email',
                Rule::unique('users')->ignore($item->email, 'email'),
            ],
            'password' => $item->exists
                ? 'sometimes|nullable|min:5|required_with:password_repeat|same:password_repeat'
                : 'required|min:5|required_with:password_repeat|same:password_repeat',
        ];
    }

    protected function activeActions(): ListOf
    {
        return parent::activeActions()
            ->except(Action::VIEW, /*Action::MASS_DELETE, Action::DELETE, Action::CREATE*/);// ->only(Action::VIEW)

    }
}
