<?php 
$args = [
    'post_type' => 'ect_custom_templates',
    'posts_per_page' => 1,
    'meta_query' => array(
        array(
            'key'       => 'template_uniq_meta',
            'value'     => 'custom_footer_one',
            'compare'   => '='            
        ), 
    )
];

$query = new WP_Query($args);

if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();

        the_content();
    }
    wp_reset_postdata();
}
?>

<?php wp_footer(); ?>
</body>
</html>
