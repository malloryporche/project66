<?php if(depot_mikado_is_plugin_installed('core')) { ?>
    <div class="mkd-blog-like">
        <?php if( function_exists('depot_mikado_get_like') ) depot_mikado_get_like(); ?>
    </div>
<?php } ?>