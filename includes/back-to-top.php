<?php
wp_enqueue_style('back-to-top', get_template_directory_uri() . '/assets/css/components/back-to-top.css', array(), 'all');
?>

<button type="button" class="backButton js-backToTopButton">
    <span class="backButton__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="11.756" height="11.756" viewBox="0 0 11.756 11.756">
            <path d="M6.3,0V6.326H0" transform="translate(5.869 10.342) rotate(-135)" fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
        </svg>
    </span>
</button>