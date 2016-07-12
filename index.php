<?php
/**
 * @package AO_Utilitarios
 * @version 1.0
 */
/*
Plugin Name: Agenda de Obrigações - Utiliários Grupo DPG
Plugin URI: http://grupodpg.com.br
Description: Agenda de Obrigações Tributária atualizada mensalmente em forma de calendário.
Author: Diogo Brito
Version: 1.0
Author URI: http://criativamos.com.br/
*/
require_once 'AOWidget.php';

add_action( 'wp_enqueue_scripts', 'aoScripts' );
add_shortcode( 'ao-calendar', 'aoCalendar' );
// Register and load the widget
add_action( 'widgets_init', 'wpb_load_widget' );


function wpb_load_widget() {
    register_widget( 'AOWidget' );
}

function aoScripts() {
    //CSS
    wp_enqueue_style( 'ao-ui', 'http://utilitarios.grupodpg.com.br/staffs/ao-calendar/helper/jquery-ui/jquery-ui.css' );
    wp_enqueue_style( 'ao-style', 'http://utilitarios.grupodpg.com.br/staffs/ao-calendar/css/ao.css' );

    //Scripts
    wp_enqueue_script('ao-script-ui', 'http://utilitarios.grupodpg.com.br/staffs/ao-calendar/helper/jquery-ui/jquery-ui.js', array('jquery'), false, true );
    wp_enqueue_script('ao-script', 'http://utilitarios.grupodpg.com.br/staffs/ao-calendar/js/ao.js', array('jquery'), '1.0.0', true );
}

function aoCalendar() {
    ?>
    <div id="ao-datepicker"></div>
    <div id="ao-dialog" title="Agenda de Obrigações"></div>
    <script>
        jQuery(function() {
            AO.init();
        });
    </script>
    <?php
}


