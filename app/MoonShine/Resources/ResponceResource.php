<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Responce;

use MoonShine\Laravel\Enums\Action;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Enums\ClickAction;
use MoonShine\Support\ListOf;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Responce>
 */
class ResponceResource extends ModelResource
{
    protected string $model = Responce::class;

    protected string $title = 'Отзывы';

    protected string $column = 'created_at';

    protected string $sortColumn = 'created_at';

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'title'),
            Date::make('Дата создания', 'created_at')
                ->format("d.m.Y"),
            Switcher::make('Публикация', 'published')->updateOnPreview(),
            Number::make('Сортировка', 'sorting')->buttons(),


        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Divider::make('Страница с отзывом'),
                Grid::make([
                    Column::make([

                        Collapse::make('Заголовок', [
                            Text::make('Заголовок', 'title')->required(),

                        ]),


                    ])->columnSpan(6),
                    Column::make([
                        Collapse::make('Методанные', [

                            Text::make('Мета тэг (title) ', 'metatitle')->unescape(),
                            Text::make('Мета тэг (description) ', 'description')->unescape(),
                            Text::make('Мета тэг (keywords) ', 'keywords')->unescape(),
                            Number::make('Сортировка', 'sorting')->buttons()->default(999),

                            Switcher::make('Публикация', 'published')->default(1),
                        ]),

                    ])->columnSpan(6),


                ]),

                Grid::make([
                    Column::make([
                        Collapse::make('Пользователь', [

                            BelongsTo::make('Автор', 'author', 'name', resource: UserResource::class)->searchable()->nullable(),
                            Date::make('Дата создания', 'created_at')
                                ->format("d.m.Y"),

                        ]),
                    ])->columnSpan(6),

                    Column::make([

                        Collapse::make('Отзыв', [

                            TinyMce::make('Описание', 'desc'),

                        ]),

                    ])->columnSpan(6),
                ]),
            ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
        ];
    }


    protected function rules(mixed $item): array
    {
        return [
            'metatitle' => 'max:2024',
            'description' => 'max:2024',
            'keywords' => 'max:2024',
        ];
    }

    protected function activeActions(): ListOf
    {
        return parent::activeActions()
            ->except(Action::VIEW, /*Action::MASS_DELETE, Action::DELETE, Action::CREATE*/)// ->only(Action::VIEW)
            ;
    }
}
