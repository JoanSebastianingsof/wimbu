<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	if ( hello_elementor_display_header_footer() ) {
		if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
			get_template_part( 'template-parts/dynamic-footer' );
		} else {
			get_template_part( 'template-parts/footer' );
		}
	}
}
?>
<div id="popup" style="display:none; position:fixed; top:0; width:100%; height:100%; background:rgba(0,0,0,0.8); z-index:9999; justify-content:center; align-items:center; ">
    <div class="popup-contenido" style="background:white; border-radius:30px; max-width:95vw; position:relative; display:flex; justify-content:space-around;flex-wrap:wrap;">
        <span class="cerrar-popup" style="position:absolute; top:10px; right:15px; font-size:24px; cursor:pointer;">&times;</span>
        <div style="min-width:400px;display:flex; align-items:center;flex-direction: column;justify-content:center;"class="containerForm">
            <h1 style="font:'Playfair Display'; color:#3F327A; width:100%; text-align:center;">Contáctenos</h1>
            <p style="font:'Rubik'; color:#4A4950; width:100%;text-align:center;">Nos comunicaremos contigo lo más pronto posible</p>
        </div>
		<div style="min-width:400px ;background:#E3E1F6;padding-top:20px;border-radius:0px 30px 30px 0px;" class="containerForm">
			<?php echo do_shortcode('[contact-form-7 id="44b7066" title="Formulario de contacto 1"]'); ?>
		</div>
        
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const botones = document.querySelectorAll(".FormButton");
    
    botones.forEach(function(boton) {
        boton.addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("popup").style.display = "flex";
        });
    });

    document.querySelector(".cerrar-popup").addEventListener("click", function() {
        document.getElementById("popup").style.display = "none";
    });
});
</script>
<?php wp_footer(); ?>

</body>
</html>
