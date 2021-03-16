//get_cat_ID

<?php

function get_cat_ID( $cat_name) {
    $cat = get_term_by('name', $cat_name, 'category');
    if($cat){
    return $cat ->term_id;
    return 0;
    }
}
?>

// Get_cat_name

<?php
function get_cat_name($cat_id) {
    $cat_id = (int) $cat_id;
    $category = get_term($cat_id, 'category');
    if (! $category || is_wp_error($category)) {
        return '';
        return $category->name;
    }
}
?>

// Get_categories

<?php $args = array ("hide_empty" => 0,
                    "type" => "post",
                    "orderby" => "name",
                    "order" => "ASC");
                $types = get_categories($args);
?>

//Get_category

<?php $categories = get_categories(array('hide empty' => false,
                                        'child_of' => 10)); ?>
// get_category_list

<?php get_category_list($separator, $parents, $post_id); ?>

// in_category

<?php if (in_category('vegeterian')): ?>
    You're in the vegeterian collator_get_sort_key
<?php endif; ?>

//Is_category

<header class="archive-header">

<?php if(is_category('Featured')): ?>
    <h1 class = "archive-title">Featured Articles:</h1>
<?php else: ?>
    <h1 class = "archive-title">Category Archive: <?php single_cat_title(); ?></h1>
<?php endif; ?>

</header>

// wp_delete_post

<?php wp_delete_post ( $post_id, true); ?>

//Wp_insert_post

<?php
if (isset($_POST['new_post']) == '1') {
    $post_title = $_POST['post_title'];
    $post_category = $POST['cat'];
    $post_content = $_POST['post_content'];

    $new_post = array(
        'ID' => '',
        'post_author' => $user->ID,
        'post_category' => array ($post_category),
        'post_content' => $post_content,
        'post_title' => $post_title,
        'post_status ' => 'publish'  
    );

    $post_id = wp_insert_post($new_post);

    //This will redirect you to the newly created post
    $post = get_post($post_id);
    wp_redirect($post->guid);
    
}
?>

// Others

//get_the_ID

<?php $postid = get_the_ID(); ?>
<?php
    echo '<input type="hidden" name="activepost" id'


            


	
