<link rel="stylesheet" href="/css/fonts.css">
<link rel="stylesheet" href="/css/">
<link rel="stylesheet" href="/pop_up/css/pop_up.css">

<?php

function pop_ap_call(string $header_text, string $post_url, string $Block_clasName)
{
    echo '
        <div class="block_pop_up ' . $Block_clasName . '">
        <div>
            <div class="row_1">
                <p class="part_1">' . $header_text . '</p>
                <p class="part_2">
                    Пожалуйста заполните поля, 
                    <br>
                    и мы с вами свяжемся.
                </p>
            </div>
            <div class="row_2">
                <form action=' . $post_url . '>
                    <label>
                        Ваше Имя
                        <input type="text" placeholder="Имя">
                    </label>
                    <label>
                        Номер телефона*
                        <input type="text" placeholder="+ 7 (***) ***-**-**">
                    </label>
                </form>
            </div>
            <button class="row_3" type="submit">Заказать звонок</button>
            <buton class="row_4 block_pop_up_close">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.87138 8.2961C8.16367 8.00381 8.63755 8.00381 8.92984 8.2961L11.8183 11.1846L14.7067 14.073C14.999 14.3653 14.999 14.8392 14.7067 15.1315C14.4145 15.4238 13.9406 15.4238 13.6483 15.1315L7.87138 9.35456C7.57909 9.06228 7.57909 8.58839 7.87138 8.2961Z" fill="#BEBEBE"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7069 8.29623C14.9992 8.58852 14.9992 9.06241 14.7069 9.35469L8.92997 15.1316C8.63769 15.4239 8.1638 15.4239 7.87151 15.1316C7.57923 14.8393 7.57923 14.3654 7.87151 14.0731L13.6484 8.29623C13.9407 8.00395 14.4146 8.00395 14.7069 8.29623Z" fill="#BEBEBE"/>
                </svg>
            </buton>
            <hr>
            <p class="row_5">
                Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с  
                <a href="#">Политикой конфиденциальности</a>
            </p>
            </div>
        </div>
    ';
}

function pop_ap_feedback($header_text)
{
    echo '
        <div class="block_pop_up leave_feedback">
            <div class="row_1">
                <p class="part_1">' . $header_text . '</p>
                <p class="part_2">
                    Оцените мастера
                </p>
                 <div>
                    ' ;
                        for ($i = 1; $i <= 5; $i++) {
                            echo '
                                <svg class="feedback_svg_'. $i .'" width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M52.0319 26.6721C51.8436 26.1011 51.4974 25.5923 51.0314 25.2018C50.5655 24.8113 49.9981 24.5545 49.392 24.4597L39.8815 22.9493L35.4727 14.577C35.1919 14.0441 34.7663 13.597 34.2425 13.2848C33.7188 12.9727 33.1172 12.8075 32.5037 12.8075C31.8902 12.8075 31.2886 12.9727 30.7649 13.2848C30.2411 13.597 29.8155 14.0441 29.5347 14.577L25.1259 22.9493L15.6156 24.4597C15.0101 24.556 14.4435 24.8134 13.9779 25.2037C13.5122 25.594 13.1656 26.1021 12.976 26.6722C12.7865 27.2424 12.7613 27.8525 12.9032 28.4357C13.0451 29.0189 13.3487 29.5527 13.7806 29.9784L20.5662 36.6631L19.0975 45.9687C19.0033 46.5614 19.0781 47.168 19.3138 47.7218C19.5496 48.2756 19.937 48.7552 20.4336 49.1078C20.9301 49.4603 21.5166 49.6722 22.1284 49.7202C22.7402 49.7681 23.3537 49.6502 23.9015 49.3795L32.5037 45.1386L41.1062 49.3795C41.654 49.6497 42.2673 49.7671 42.8789 49.719C43.4905 49.6708 44.0767 49.4588 44.5731 49.1064C45.0694 48.7539 45.4569 48.2746 45.6927 47.7211C45.9286 47.1676 46.0038 46.5613 45.9101 45.9687L44.4414 36.6631L51.2271 29.9784C51.6603 29.5535 51.9649 29.0198 52.1069 28.4362C52.249 27.8527 52.223 27.2421 52.0319 26.6721Z" fill="#DD9E5C"/>
                                </svg>
                            ';
                        }
                  echo '
                </div>
            </div>
            <div class="row_2">
                <form action="">
                    <label>
                        Добавьте отзыв
                        <textarea  cols="40" rows="3" placeholder="Напишите текст отзыва"></textarea>
                    </label>
                    <label>
                        Ваша почта
                        <input type="email" placeholder="Mail@mail.ru">
                    </label>
                </form>
            </div>
            <button class="row_3" type="submit">Отправить отзыв</button>
            <buton class="row_4 block_pop_up_close">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.87138 8.2961C8.16367 8.00381 8.63755 8.00381 8.92984 8.2961L11.8183 11.1846L14.7067 14.073C14.999 14.3653 14.999 14.8392 14.7067 15.1315C14.4145 15.4238 13.9406 15.4238 13.6483 15.1315L7.87138 9.35456C7.57909 9.06228 7.57909 8.58839 7.87138 8.2961Z" fill="#BEBEBE"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7069 8.29623C14.9992 8.58852 14.9992 9.06241 14.7069 9.35469L8.92997 15.1316C8.63769 15.4239 8.1638 15.4239 7.87151 15.1316C7.57923 14.8393 7.57923 14.3654 7.87151 14.0731L13.6484 8.29623C13.9407 8.00395 14.4146 8.00395 14.7069 8.29623Z" fill="#BEBEBE"/>
                </svg>
            </buton>
            <hr>
            <p class="row_5">
                Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с  
                <a href="#">Политикой конфиденциальности</a>
            </p>
        </div>
    ';
}

?>

<script src="/pop_up/js/pop_up.js"></script>



