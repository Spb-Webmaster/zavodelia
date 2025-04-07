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



