<?php

    add_action('wp_head', 'ajax_url_setup');
    function ajax_url_setup(){
        ?>
        <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>
        <?php
    }
