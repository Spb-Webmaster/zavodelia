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
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;


class ProductPage extends Page
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

        if (Storage::disk('config')->exists('moonshine/product.php')) {
            $result = include(storage_path('app/public/config/moonshine/product.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Продукция';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
    {
        if(!is_null($this->setting())) {
            extract($this->setting());
        }

        return [
            FormBuilder::make('/moonshine/product', FormMethod::POST)
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


                                ])->columnSpan(12),
                            ]),
                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}
