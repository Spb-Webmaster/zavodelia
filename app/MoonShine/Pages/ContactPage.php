<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Enums\FormMethod;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;


class ContactPage extends Page
{
    /**
     * @return array<string, string>
     */
    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function setting()
    {

        if (Storage::disk('config')->exists('moonshine/contacts.php')) {
            $result = include(storage_path('app/public/config/moonshine/contacts.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Страница: контакты для связи';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
    {
        if (!is_null($this->setting())) {
            extract($this->setting());
        }
        return [
            FormBuilder::make('/moonshine/contacts', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Страница контакты'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Константы'),


                                    Collapse::make('Заголовок/Алиас', [
                                        Text::make('Заголовок', 'title')->required()->hint('Алиас "contacts"')->default((isset($title)) ? $title : ''),


                                    ]),

                                    Divider::make('Яндекс карта'),

                                    Collapse::make('Координаты карты', [

                                        Text::make('Карта', 'yandex_map')->hint('Кооординаты карты')->default((isset($yandex_map)) ? $yandex_map : ''),

                                        Text::make('Заголовок на карте', 'yandex_map_title')->hint('По умолчанию, данные с настроек')->default((isset($yandex_map_title)) ? $yandex_map_title : ''),

                                        Text::make('Описание на карте', 'yandex_map_desc')->hint('По умолчанию, данные с настроек')->default((isset($yandex_map_desc)) ? $yandex_map_desc : ''),


                                    ]),


                                ])->columnSpan(6),


                                Column::make([
                                    Divider::make('Метаданные'),

                                    Collapse::make('Метаданные', [

                                        Text::make('Мета тэг (title) ', 'metatitle')->unescape()->default((isset($metatitle)) ? $metatitle : ''),
                                        Text::make('Мета тэг (description) ', 'description')->unescape()->default((isset($description)) ? $description : ''),
                                        Text::make('Мета тэг (keywords) ', 'keywords')->unescape()->default((isset($keywords)) ? $keywords : ''),

                                    ]),


                                ])->columnSpan(6),
                            ]),





                            Grid::make([


                                Column::make([


                                    Divider::make('Текст на странице контакты'),

                                    Collapse::make('Описание', [

                                        TinyMce::make('HTML', 'desc')->default((isset($desc)) ? $desc : ''),

                                        TinyMce::make('HTML', 'desc2')->default((isset($desc2)) ? $desc2 : ''),




                                    ]),


                                ])->columnSpan(12),
                            ]),

                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}
