<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>



<div class="home-bottom-widgets-wrapper">
    <div class="home-bottom-widgets">

        <!--<div style="max-width:320px; float:left;"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-bottom-left') ) :
            endif; ?></div>
        <div style="max-width:320px; float:left;"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-bottom-center') ) :
            endif; ?></div>
        <div style="max-width:320px; float:left;"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-bottom-right') ) :
            endif; ?></div>-->

    </div>
</div>



</div><!-- #main -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <?php
    if ( ! dynamic_sidebar( 'social-media' ) ) :
    endif;
    ?>


    <div class="site-info">
        <?php// do_action( 'twentyfourteen_credits' ); ?>
    </div><!-- .site-info -->
    <?php	if(ICL_LANGUAGE_CODE == 'en'){ ?>
        <div class="copy-right">&copy;MTB-MAG.COM 2016 All Rights Reserved | <a href="http://www.mtb-mag.com/en/contact-us/">Contact us</a> | <a href="http://www.mtb-mag.com/privacy/">Privacy</a>
        </div>
    <?php } ?>
    <?php	if(ICL_LANGUAGE_CODE == 'es'){ ?>
    <div class="copy-right">&copy;MTB-MAG.COM 2016 All Rights Reserved | <a href="http://www.mtb-mag.com/en/contact-us/">Contact us</a> | <a href="http://www.mtb-mag.com/privacy/">Privacy</a>
        <?php } ?>
        <?php	if(ICL_LANGUAGE_CODE == 'it'){ ?>
            <div class="copy-right">&copy;MTB-MAG.COM 2016 All Rights Reserved | <a href="http://www.mtb-mag.com/contatto/">Contatto</a> | <a href="http://www.mtb-mag.com/legali/">Legali</a> | <a href="http://www.mtb-mag.com/privacy/">Privacy</a> | <a href="http://www.mtb-mag.com/pubblicita/">Pubblicità</a>
            </div>
        <?php	}
        else {?>
        <?php } ?>



</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">

    $(document).ready(function() {

        $('.mostra-invio-messaggio').click(function(){
            $('.mostra-invio-messaggio').hide();
            $('#invia-messaggio').slideToggle();
        });

        $('.show-prox-res').click(function(){
            $('.corrente').removeClass('corrente').hide().next('.last-post-wrap').show().addClass('corrente');
        });

        $('.show-prec-res').click(function(){
            $('.corrente').removeClass('corrente').hide().prev('.last-post-wrap').show().addClass('corrente');
        });

    });

</script>

<?php wp_footer(); ?>

</body>
</html>