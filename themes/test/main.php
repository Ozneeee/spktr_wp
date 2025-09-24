<?php
/*
Template Name: Page personnalisé SPKTR
*/
get_header();
?>

<main class="custom-page" role="main">

    <div class="wp-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>

    <section class="date-section">
        <hr class="separator">
        <p class="date-section-text">Nous sommes le : <?php echo date('d/m/Y'); ?></p>
    </section>

</main>

<?php
get_footer();
?>