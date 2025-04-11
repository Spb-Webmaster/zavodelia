import {loader, loaderHide, url, printErrorMsg, MyscrollTop} from './loader';
import {Fancybox} from "@fancyapps/ui";
export function responce_send() {
    // responce_send__js
    /* call_me__js Звонок  (mini форма на главной)*/
    $('body').on('click', '.responce_send__js', function (event) {

        var Parents = $(this).parents('.F_form');
        var Title = Parents.find('input[name="title"]').val();
        var Feedback = Parents.find('textarea[name="feedback"]').val();



        if(!Title.length) {
            alert('Заголовок обязателен к заполнению');
            return false;
        }
        loader(Parents);

        $.ajax({
            url: "/responce-mail/responce-send",
            method: "POST",
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "title": Title,
                "feedback": Feedback,
                "url": url(),
            },
            success: function (response) {
                if (response.error) {
                    setTimeout(function () {
                        Parents.find('.wrapper_loader ').css('display', 'none');
                    }, 1000);

                } else {
                    setTimeout(function () {
                        Parents.find('.wrapper_loader ').css('display', 'none');
                        Parents.find('.F_form__body').hide();
                        Parents.find('.F_responce_responce').show();
                    }, 1000);
                }
            }
        });

    });
    /* call_me__js Звонок (mini форма на главной)*/
}

/*  загрузка аватара */
export function upload_f() {

    $('.upload_f').change(function (event) {
        if (window.FormData === undefined) {
            alert('В вашем браузере FormData не поддерживается')
        } else {
            var Parent = $(this).parents('.image-upload__cabinet');
            event.preventDefault();
            let form = $(this).parents('form').get(0);
            let formData = new FormData(form);


            $.ajax({
                async: true,
                url: '/cabinet/upload-avatar',
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                contentType: false,
                data: formData,
                cache: false,
                processData: false,
                success: function (result) {
                    console.log(result);

                    if (result.success == true) {

                        console.log(result.avatar)
                        Parent.find('.site_avatar').css('background-image', 'url("' + result.avatar + '")');
                        $('.site_avatar').css('background-image', 'url("' + result.avatar + '")');
                        if ($('.enter_to_website__a').length) {
                            $('.enter_to_website__a .site_avatar').css('background-image', 'url("' + result.avatar + '")');
                        }
                    } else {
                        console.log(result);
                        alert('Ошибка при загрузке аватара.');

                    }
                },
                error: function (data) {
                    console.log(data.err);
                    console.log(data);
                }
            });


        }
    });
    return true;

}

/*  загрузка аватара */



