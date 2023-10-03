<link rel="stylesheet" href="/breadcrumb/css/breadcrumb.css">

<?php

function breadcrumb($pages_names) {
        echo '
        <div class="Breadcrumb-box">
            <a href="/">Главная</a>
            <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="0.566987" y1="7.21387" x2="4.56699" y2="0.285664" stroke="black"/>
            </svg>
             <p>' .
                $pages_names
           . '</p>
        </div>';
}

?>


