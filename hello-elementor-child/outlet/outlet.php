<?php
$outlet = get_terms( [
    'taxonomy' => 'pa_outlet',
    'hide_empty' => false,
] );
?>

<div class="outlet-container">
    <div class="row">
        <?php 
        if( !empty($outlet) ) { 
            foreach ($outlet as $key) {
                $info = get_field("outlet_info", $key->taxonomy . '_' . $key->term_id );
        ?>
                <div class="column">                   
                        <div class="image-group">
                            <img class="" src="<?= $info['image']['sizes']['medium']; ?>" >
                            <h5><?= $key->name; ?></h5>
                            <p class="address" style="font-size: 14px;"><?= $info['alamat']; ?></p>
                        </div>
                        <div class="button-group">
                            <a href="https://wa.me/<?= $info['whatsapp']; ?>" target="_blank" type="button" class="btn btn-primary"> 
                                WhatsApp
                            </a>
                            <a href="<?= $info['maps']; ?>" target="_blank" type="button" class="btn btn-primary"> 
                                Maps
                            </a>
                        </div>
                </div>
        <?php 
            }
        } 
        ?>
    </div>
</div>

<script>
    jQuery( document ).ready(function() {
        jQuery( ".outlet-container h5" ).on( "click", function() {
            jQuery(this).closest('.image-group').find(".address").toggle();
        });
    });
</script>