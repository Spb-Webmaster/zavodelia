<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Prosthesis;

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
 * @extends ModelResource<Prosthesis>
 */
class ProsthesisResource extends ModelResource
{
    protected string $model = Prosthesis::class;


    protected string $title = 'Протезы';

    protected string $column = 'sorting';

    protected string $sortColumn = 'sorting';

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'title'),
            Text::make('Переадресация', 'url'),
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
                Divider::make('Страница'),
                Grid::make([
                    Column::make([

                        Collapse::make('URL адрес', [
                            Text::make('Переадресация', 'url'),
                        ]),
                        Collapse::make('Заголовок/Алиас', [
                            Text::make('Заголовок', 'title')->required(),
                            Slug::make('Алиас', 'slug')
                                ->from('title')->unique(),
                            Text::make('Подзаголовок', 'subtitle'),


                        ]),


                    ])->columnSpan(6),
                    Column::make([
                        Collapse::make('Метаданные', [

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

                        Collapse::make('Анонс', [

                            Image::make(__('Анонс'), 'img')
                                ->dir('images')
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                ->removable()
                                ->hint('Изображение в анонс'),

                        ]),


                    ])->columnSpan(6),
                    Column::make([

                        Collapse::make('Краткое описание', [

                            TinyMce::make('Описание', 'short_desc'),


                        ]),


                    ])->columnSpan(6),
                ]),


                Grid::make([
                    Column::make([

                        Collapse::make('', [

                            Image::make(__('Изображение'), 'image')
                                ->dir('images')
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                ->removable()
                                ->hint('Растягивается на 100% ширины'),

                            TinyMce::make('Описание', 'desc'),


                            Grid::make([

                                Column::make([


                                    Collapse::make('Видеоматериал', [

                                        Json::make('', 'video')->fields([
                                            Text::make('Заголовок  Видеоматериала', 'video_video_title')->hint('Не обязательно'),

                                            File::make('Видео', 'video_video_video')
                                                ->dir('video')/* Директория где будут хранится файлы в storage (по умолчанию /) */
                                                ->disk('moonshine') // Filesystems disk
                                                //  ->allowedExtensions(['jpg', 'gif', 'png', 'svg'])/* Допустимые расширения */
                                                ->removable(),
                                            Text::make('Ссылка на видео (YouTube)', 'video_video_youtube'),
                                            Text::make('Ссылка на видео (RuTube)', 'video_video_rutube'),

                                        ])->vertical()->creatable(limit: 30)->removable(),
                                    ]),


                                ])->columnSpan(6),


                                Column::make([

                                    Collapse::make('Документы', [

                                        Json::make('', 'docs')->fields([

                                            Image::make('Документ', 'doc')
                                                ->dir('docs')/** Директория где будут хранится файлы в storage (по умолчанию /)*/
                                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                                ->removable(),
                                            Text::make('Текст под документом', 'doc_text'),

                                        ])->vertical()->creatable(limit: 30)->removable(),

                                        //docs
                                    ]),


                                ])->columnSpan(6),

                            ]),


                            Image::make(__('Изображение дополнительное'), 'image2')
                                ->dir('images')
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                ->removable()
                                ->hint('Растягивается на 100% ширины'),


                            Image::make('Галерея', 'gallery')
                                ->dir('gallery')
                                ->disk(config('moonshine.disk', 'moonshine'))
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                ->multiple()
                                ->removable(),

                            TinyMce::make('Описание дополнительное', 'desc2'),

                            Json::make('', 'big_gallery')->fields([

                                Text::make('Заголовок', 'json_title'),
                                Image::make('Галерея', 'json_gallery')
                                    ->dir('gallery')/** Директория где будут храниться файлы в storage (по умолчанию /)*/
                                    ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                    ->multiple()
                                    ->removable(),
                                TinyMce::make('Описание', 'json_desc'),


                            ])->vertical()->creatable(limit: 30)->removable(),


                        ]),

                    ])->columnSpan(12),
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
            ->except(Action::VIEW /*Action::MASS_DELETE, Action::DELETE, Action::CREATE*/)// ->only(Action::VIEW)
            ;
    }
}
