<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

use MoonShine\Laravel\Enums\Action;
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
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Page>
 */
class PageResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $column = 'title';

    protected string $sortColumn = 'title';

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'title'),
            Switcher::make('Публикация', 'published')->updateOnPreview(),


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
                Divider::make('Страница'),
                Grid::make([
                    Column::make([

                        Collapse::make('Заголовок/Алиас', [
                            Text::make('Заголовок', 'title')->required(),
                            Slug::make('Алиас', 'slug')
                                ->from('title')->unique(),

                        ]),


                    ])->columnSpan(6),
                    Column::make([
                        Collapse::make('Методанные', [

                            Text::make('Мета тэг (title) ', 'metatitle')->unescape(),
                            Text::make('Мета тэг (description) ', 'description')->unescape(),
                            Text::make('Мета тэг (keywords) ', 'keywords')->unescape(),
                            Number::make('Сортировка', 'sorting')->buttons()->default(999),

                            Switcher::make('Публикация', 'published')->updateOnPreview(),
                        ]),

                    ])->columnSpan(6),


                ]),
                Grid::make([
                    Column::make([

                        Collapse::make('', [
                            TinyMce::make('Описание', 'text'),

                        ]),


                    ])->columnSpan(12),



                ]),

            ])
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
        return [];
    }

    protected function activeActions(): ListOf
    {
        return parent::activeActions()
            ->except(Action::VIEW, /*Action::MASS_DELETE, Action::DELETE, Action::CREATE*/)// ->only(Action::VIEW)
            ;
    }
}
