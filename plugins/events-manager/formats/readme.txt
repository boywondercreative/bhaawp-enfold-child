
'dbem_event_list_item_format' - format for controlling a single event format in a list of events

becomes

event_list_item_format.php

Then, using the example above, to activate the overriding format, you need to add this to your theme's functions.php file.

<?php
function my_em_custom_formats( $array ){
	$my_formats = array('dbem_event_list_item_format'); //the format you want to override, corresponding to file above.
	return $array + $my_formats; //return the default array and your formats.
}
add_filter('em_formats_filter', 'my_em_custom_formats', 1, 1);
?>
