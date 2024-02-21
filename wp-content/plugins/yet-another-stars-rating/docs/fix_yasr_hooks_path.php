<?php
/**
 * This is a script to fix the links generated by wp-documentor
 * @see composer file
 */

$path_to_file = 'docs/yasr_hooks.md';
$file_contents = file_get_contents($path_to_file);
//This fix the links text
$file_contents = str_replace('[./', '[../', $file_contents);
//this fix the links
$file_contents = str_replace('](', '](../', $file_contents);
//(over)write the file
file_put_contents($path_to_file, $file_contents);