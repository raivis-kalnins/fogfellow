<?php
/**
 * Functions
 *
 * @package    dp
 * @author     DP <hello@digitalpulse.click>
 */

foreach ( glob( __DIR__ . '/app/*.php' ) as $filename ) :
	require_once $filename;
endforeach;
