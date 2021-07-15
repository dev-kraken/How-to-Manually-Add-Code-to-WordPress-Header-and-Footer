To add code to your header, use this code snippet:


/* Describe what the code snippet does so you can remember later on */
/*Somandeep Singh*/
add_action('wp_head', 'your_function_name');
function your_function_name(){
?>
PASTE HEADER CODE HERE
<?php
};


To add code to your footer, use this code snippet:

/* Describe what the code snippet does so you can remember later on */
/*Somandeep Singh*/
add_action('wp_footer', 'your_function_name');
function your_function_name(){
?>
PASTE FOOTER CODE HERE
<?php
};

