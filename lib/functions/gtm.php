<?php
/**
 * Google Tag Manager
 *
 * This file contains the functions necessary to add the casaluna Google Analytics and Tag Manager snippets to the site.
 *
 * @package   Casaluna_Core_Functionality
 * @since     1.0.0
 * @link      https://github.com/Herm71/casaluna-core-functionality.git
 * @author    Jason Chafin
 * @copyright Copyright (c) 2024, Jason Chafin
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
add_action('wp_body_open', 'casaluna_google_tag_manager');

function casaluna_google_tag_manager()
{
    ?>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180584326-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180584326-1');
</script>

    <?php
}



