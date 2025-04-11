    <div class="F_form " style="display: none" id="responce_send" >
        @honeypot
        <x-forms.loader class="br_12"/>
        @include('modals.modal.responce.responce_responce')
        <div class="F_form__body new__temp">
            <div class="new__temp_top">

                <div class="F_form__flex">
                    <div class="F_form__left">
                        <h3 class="F_h1"><span>{{ __('Добавить отзыв') }}</span></h3>
                        <h6 class="F_h2" ><span>{{__('Ваш отзыв будет опубликован после проверки')}}</span></h6>
                    </div>
                </div>



            </div><!--.new__temp_top-->


            <div class="new__temp_middle">
             <div class="alax_inputs">


                 <div class="text_input">
                     <x-forms.textarea
                         type="textarea"
                         name="feedback"
                         placeholder="Отзыв"
                         value="{{ old('feedback')?:'' }}"
                         required="true"
                         class="input feedback"
                     />
                     <x-forms.error class="error_feedback"/>

                 </div>

                <div class="text_input pad_t26_important">
                <x-forms.button_call_me class="responce_send__js">
                    {{__('Отправить заявку')}}
                </x-forms.button_call_me>
                </div>
</div><!--.alax_inputs-->


            </div><!--.new__temp_middle-->
        </div><!--.F_form__body-->
    </div><!--.F_form-->

