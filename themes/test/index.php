<?php
get_header();
?>

<main style="max-width: 800px; margin: auto; padding: 20px; background: #fff; border-radius: 8px;">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();
?>