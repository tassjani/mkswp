<?php
//Backwards Compatibility FUnction
function inkness_logo() {
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
}

function inkness_has_logo() {
    if (function_exists( 'has_custom_logo')) {
        if ( has_custom_logo() ) {
            return true;
        }
    } else {
        return false;
    }
}