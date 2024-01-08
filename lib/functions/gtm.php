<?php

/**
 * Google Tag Manager

 * This file contains the functions necessary to add the casaluna Google Analytics and Tag Manager snippets to the site.
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



