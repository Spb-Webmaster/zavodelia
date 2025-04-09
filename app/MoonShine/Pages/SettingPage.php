<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Enums\FormMethod;
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
use MoonShine\UI\Fields\Textarea;
use PhpParser\Node\Stmt\Block;


class SettingPage extends Page
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

        if (Storage::disk('config')->exists('moonshine/setting.php')) {
            $result = include(storage_path('app/public/config/moonshine/setting.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Настройки';
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
            FormBuilder::make('/moonshine/setting', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Настройки'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Константы'),


                                   Collapse::make('', [
                                        Text::make('Слоган', 'slogan2')->default((isset($slogan2))? $slogan2 :''),
                                        Text::make('Название в логотипе', 'slogan1')->default((isset($slogan1))? $slogan1 :''),

                                    ]),
                                    Divider::make('Отзывы'),


                                   Collapse::make('', [
                                        Text::make('Название', 'title_responce')->default((isset($title_responce))? $title_responce :''),
                                       Text::make('Название краткое', 'titlemini_responce')->default((isset($titlemini_responce))? $titlemini_responce :''),
                                        Textarea::make('Краткое описание отзывов', 'text_responce')->default((isset($text_responce))? $text_responce :''),

                                    ]),
                                    Divider::make('Соц.сети'),

                                    Collapse::make('', [
                                        Text::make('FaceBook', 'facebook')->default((isset($facebook))? $facebook :''),
                                        Text::make('YouTube', 'youtube')->default((isset($youtube))? $youtube :''),
                                        Text::make('Instagram', 'instagram')->default((isset($instagram))? $instagram :''),
                                        Text::make('WhatsApp', 'whatsapp')->default((isset($whatsapp))? $whatsapp :''),
                                        Text::make('Telegram', 'telegram')->default((isset($telegram))? $telegram :''),
                                    ]),


                                ])->columnSpan(6),


                                Column::make([
                                    Divider::make('Контакты'),

                                    Collapse::make('', [
                                        Text::make('Название компании', 'contact_name_company')->default((isset($contact_name_company))? $contact_name_company :''),
                                        Text::make('Краткое название компании', 'contact_mimi_name_company')->default((isset($contact_mimi_name_company))? $contact_mimi_name_company :''),
                                        Text::make('Республика', 'contact_republic')->default((isset($contact_republic))? $contact_republic :''),
                                        Text::make('Адрес', 'contact_address')->default((isset($contact_address))? $contact_address :''),
                                        Text::make('Сокращенный адрес', 'contact_miniaddress')->default((isset($contact_miniaddress))? $contact_miniaddress :''),
                                        Text::make('Copyright', 'contact_copy')->default((isset($contact_copy))? $contact_copy :''),
                                        Text::make(__('Телефон'), 'phone1')->default((isset($phone1))? $phone1 :''),
                                        Text::make(__('Телефон 2'), 'phone2')->default((isset($phone2))? $phone2 :''),
                                        Text::make(__('Email'), 'email')->default((isset($email))? $email :''),
                                    ]),


                                ])->columnSpan(6),
                            ]),
                        ]),

                        Tab::make(__('Дополнительные опции'), [

                            Divider::make('Дополнительные опции'),
                            Grid::make([
                                Column::make([


                                    Collapse::make('', [


/*                                        Json::make('Типы страхования', 'json_insure')->fields([

                                            Text::make('', 'json_insure_label')->hint('Название'),

                                        ])->vertical()->creatable(limit: 30)
                                            ->removable()->default((isset($json_insure))? $json_insure : ''),*/





                                    ]),


                                ])->columnSpan(12),
                            ])


                        ]),

                        Tab::make(__('Email получателя системных сообщений'), [

                            Divider::make('Опции'),
                            Grid::make([
                                Column::make([

                                    Collapse::make('', [
                                        Json::make('Электронная почта', 'json_emails')->fields([

                                            Text::make('', 'json_email')->hint('Владелец этого email будет получать все уведомления (изменения) при редактировании личных кабинетов пользователями.'),

                                        ])->vertical()->creatable(limit: 3)
                                            ->removable()->default((isset($json_emails))? $json_emails : ''),



                                    ]),

                                ])->columnSpan(12),



                            ])


                        ]),

                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
	}
}
