<?php
/**
 * Register meta box(es).
 */
function wpdocs_register_meta_boxes() {
    add_meta_box( 'team-member-position', __( 'Team member position', 'understrap' ), 'position_field', 'team' );
}
add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function position_field( $post ) {
    $position_value = get_post_meta($post->ID, 'position');
    ?>
        <label>
            Set team members position
            <input type="text" name="position" value="<?=$position_value[0];?>">
        </label>
    <?php }

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box( $post_id ) {
    global $post;
    $position_value = $_POST['position'];
    update_post_meta($post->ID, 'position', $position_value);
}
add_action( 'save_post', 'wpdocs_save_meta_box' );


function register_skill_level_meta_box() {
    add_meta_box( 'skill_level_meta_box', __( 'Team member skills', 'understrap' ), 'skill_level', 'team' );
}
add_action( 'add_meta_boxes', 'register_skill_level_meta_box' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function skill_level( $post ) {
    $photoshop_value = get_post_meta($post->ID, 'photoshop');
    $html_value = get_post_meta($post->ID, 'html');
    $wordpress_value = get_post_meta($post->ID, 'wordpress');
    $js_value = get_post_meta($post->ID, 'js');
    $illustrator_value = get_post_meta($post->ID, 'illustrator');
    $php_value = get_post_meta($post->ID, 'php');
    $joomla_value = get_post_meta($post->ID, 'joomla');
    $mysql_value = get_post_meta($post->ID, 'mysql');

    ?>
        <label for="photoshop"> photoshop </label>
            <input type="number" id="photoshop" name="photoshop" value="<?=$photoshop_value[0];?>">
        <label for="html"> html/css </label>
            <input type="number" id="html" name="html" value="<?=$html_value[0];?>">
        <label for="wordpress"> wordpress </label>
            <input type="number" id="wordpress" name="wordpress" value="<?=$wordpress_value[0];?>">
        <label for="js"> js  </label>
            <input type="number" id="js" name="js" value="<?=$js_value[0];?>">
        <label for="illustrator"> illustrator </label>
            <input type="number" id="illustrator" name="illustrator" value="<?=$illustrator_value[0];?>">
        <label for="php"> php </label>
            <input type="number" id="php" name="php" value="<?=$position_value[0];?>">
        <label for="joomla"> joomla </label>
            <input type="number" id="joomla" name="joomla" value="<?=$joomla_value[0];?>">
        <label for="mysql"> mysql </label>
            <input type="number" id="mysql" name="mysql" value="<?=$mysql_value[0];?>">
    <?php }

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function save_meta_box_skill_level( $post_id ) {
    global $post;
    $photoshop_value = $_POST['photoshop'];
    $html_value = $_POST['html'];
    $wordpress_value = $_POST['wordpress'];
    $js_value = $_POST['js'];
    $illustrator_value = $_POST['illustrator'];
    $php_value = $_POST['php'];
    $joomla_value = $_POST['joomla'];
    $mysql_value = $_POST['mysql'];

    update_post_meta($post->ID, 'photoshop', $photoshop_value);
    update_post_meta($post->ID, 'html', $html_value);
    update_post_meta($post->ID, 'wordpress', $wordpress_value);
    update_post_meta($post->ID, 'js', $js_value);
    update_post_meta($post->ID, 'illustrator', $illustrator_value);
    update_post_meta($post->ID, 'php', $php_value);
    update_post_meta($post->ID, 'joomla', $joomla_value);
    update_post_meta($post->ID, 'mysql', $mysql_value);
}
add_action( 'save_post', 'save_meta_box_skill_level' );