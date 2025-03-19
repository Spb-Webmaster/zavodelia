import {
    upload_f
} from './include/ajax';
import { imask } from './include/imask';
import { slick } from './include/slick';
import { input_label, _iserror } from './include/input';
import { chosen} from "./include/select";
import {yandex_map_object} from "./include/yandex_map";
import {localDataPicker, datepicker_birthdate,  datepicker_event} from "./include/datapicker";
import {tooltip} from "./include/tooltip";
import {checkbox} from "./include/checkbox";


document.addEventListener('DOMContentLoaded', function () {

    //console.log(moment().format('LL'))
    upload_f() // pзагрузка файлов (Аватар)
    imask() // маска на поле input input[name="phone"]
    slick() // карусел
    input_label() // input движение label
    _iserror() // input удаление  рамки при error
    yandex_map_object('43db27ba-be61-4e84-b139-ff37ad4802b8') // карта в объект
    chosen() // стилизованный select
    localDataPicker() // календарик основные настройки
    datepicker_birthdate() // календарь дня рождения
      datepicker_event() // datepicker - события event
    tooltip() // tooltip
    checkbox() // checkbox


});
