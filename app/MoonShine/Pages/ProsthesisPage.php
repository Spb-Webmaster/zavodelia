<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use Illuminate\Support\Facades\Storage;
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
use MoonShine\UI\Fields\Text;


class ProsthesisPage extends Page
{

    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function setting()
    {

        if (Storage::disk('config')->exists('moonshine/prosthesis.php')) {
            $result = include(storage_path('app/public/config/moonshine/prosthesis.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Протезы';
    }


    protected function components(): iterable
    {
        if(!is_null($this->setting())) {
            extract($this->setting());
        }

        return [
            FormBuilder::make('/moonshine/prosthesis', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Главная страница продукции'), [


                            Grid::make([


                                Column::make([


                                    Collapse::make('', [
                                        Text::make('Заголовок', 'title')->default((isset($title))? $title :''),
                                        Text::make('Подзаголовок', 'subtitle')->default((isset($subtitle))? $subtitle :''),



                                    ]),
                                    Divider::make('Текст на странице продукция'),

                                    Collapse::make('Описание', [

                                        TinyMce::make('HTML', 'desc')->default((isset($desc)) ? $desc : ''),
                                        TinyMce::make('HTML', 'desc2')->default((isset($desc2)) ? $desc2 : ''),

                                    ]),


                                ])->columnSpan(6),
                                Column::make([
                                    Collapse::make('Метаданные', [

                                        Text::make('Мета тэг (title) ', 'metatitle')->unescape()->default((isset($metatitle)) ? $metatitle : ''),
                                        Text::make('Мета тэг (description) ', 'description')->unescape()->default((isset($description)) ? $description : ''),
                                        Text::make('Мета тэг (keywords) ', 'keywords')->unescape()->default((isset($keywords)) ? $keywords : ''),

                                    ]),

                                ])->columnSpan(6),
                            ]),
                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}
