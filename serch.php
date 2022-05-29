<?php
// get the search terms from the url
$k = isset($_GET['search_btn']) ? $_GET['search_btn'] : '';

// create the base variables for building the search query
$search_string = "SELECT * FROM products WHERE ";
$display_words = "";
					
// format each of search keywords into the db query to be run
$keywords = explode(' ', $k);			
foreach ($keywords as $word){
	$search_string .= "keywords LIKE '%".$word."%' OR ";
	$display_words .= $word.' ';
}
$search_string = substr($search_string, 0, strlen($search_string)-4);
$display_words = substr($display_words, 0, strlen($display_words)-1);
?>