<?php
/**
 * Template Name: Single Libros
 * Template Post Type: libros 
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>

<main id="content" <?php post_class( 'site-main' ); ?>>

	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>    
		<div class="page-header">
			<?php the_title( '<h1 class="">', '</h1>' ); ?>
		</div>
	<?php endif; ?>
	<?php if (has_post_thumbnail()) : ?>
        <div class="libro-portada">
            <?php the_post_thumbnail('large', ['class' => 'portada-img']); ?>
        </div>
    <?php endif; ?>
	<div class="page-content">
		<?php the_content(); ?>
		
		<?php $autor = get_post_meta(get_the_ID(), 'libro_autor', true); ?>
        <?php if ($autor) : ?>
            <div class="libro-meta libro-autor">
                <strong>Autor:</strong> <?php echo esc_html($autor); ?>
            </div>
        <?php endif; ?>

		
		<?php wp_link_pages(); ?>

		<?php if (has_term('', 'generos')) : ?>
            <div class="libro-meta libro-generos">
                <strong>Géneros:</strong>
                <?php 
                $terms = get_the_terms(get_the_ID(), 'generos');
                if ($terms && !is_wp_error($terms)) {
                    $generos = wp_list_pluck($terms, 'name');
                    echo esc_html(implode(', ', $generos));
                }
                ?>
            </div>
        <?php endif; ?>

		<?php if ( has_tag() ) : ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">' . esc_html__( 'Tagged ', 'hello-elementor' ), ', ', '</span>' ); ?>
		</div>
		<?php endif; ?>
	</div>

	<?php comments_template(); ?>

</main>

	<?php
endwhile;
