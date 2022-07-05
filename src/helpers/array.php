<?php

/**
 * @param $search_key
 * @param $replacement
 * @param $array
 * @return mixed
 */
function  replace_in_nested_array($search_key, $replacement, $array) {
    $item_address_blocks = explode('.', $search_key); // convert to array so we can iterate on address

    $replaced_array = $array;
    $temp = &$replaced_array; // pass by reference

    foreach($item_address_blocks as $depth => $index) {
        if( $depth < sizeof($item_address_blocks) - 1 ) {  // rolling in the deep :)
            $temp = &$temp[$index];
            continue;
        }

        $temp[$index] = $replacement;  // last step and replacement
    }

    return $replaced_array;
}