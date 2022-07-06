<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function valid($message) {
    return "<div style='color: 008000 !important;'>".$message."</div>";
}

function error($message){
	return "<div style='color: #FF0000 !important'>".$message."</div>";
}

function valid_admin($message){
	return '<div class="callout callout-success"><p>'.$message.'</p></div>';
}

function info_admin($message){
	return '<div class="callout callout-info"><p>'.$message.'</p></div>';
}

function warning_admin($message){
	return '<div class="callout callout-warning"><p>'.$message.'</p></div>';
}

function error_admin($message){
	return '<div class="callout callout-danger"><p>'.$message.'</p></div>';
}

?>
