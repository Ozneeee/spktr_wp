<?php
/*
Template Name: Page personnalisé SPKTR
*/
get_header(); ?>

<main class="acf-page">
    <div class="acf-container">
        <?php
        $titre = get_field('titre');
        $intro = get_field('intro');
        $image = get_field('image');
        $lien  = get_field('lien');
        ?>

        <?php if ($titre): ?>
            <h1 class="acf-title"><?php echo esc_html($titre); ?></h1>
        <?php endif; ?>

        <?php if ($intro): ?>
            <div class="acf-intro">
                <?php echo wp_kses_post($intro); ?>
            </div>
        <?php endif; ?>

        <?php if ($image): ?>
            <div class="acf-image">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
        <?php endif; ?>

        <?php if ($lien): ?>
            <div class="acf-link">
                <a href="<?php echo esc_url($lien); ?>" class="acf-button">Voir le GitHub par un lien</a>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>