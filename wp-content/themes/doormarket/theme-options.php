<?php

/*
 *  this file provides doormarket theme options page
 */

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
    register_setting( 'doormarket_options', 'doormarket_theme_options');
}

function theme_options_add_page() {
    add_theme_page( __( 'Настройки Темы', 'DoorMarket' ), __( 'DoorMarket настройки', 'DoorMarket' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
function theme_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
?>

<div class="wrap">
    <?php screen_icon(); echo "<h2>". __( 'Настройки Темы DoorMarket', 'DoorMarket' ) . "</h2>"; ?>
    <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
        <div id="message" class="updated">
            <p><strong><?php _e( 'Настройки сохранены', 'DoorMarket' ); ?></strong></p>
        </div>
    <?php endif; ?>
</div>

<form method="post" action="options.php">
    <?php settings_fields( 'doormarket_options' ); ?>
    <?php $options = get_option( 'doormarket_theme_options' ); ?>
    <table width="600" border="0">
        <tr>
            <td style='color: #0073AA;'>Телефон фирмы:</td>
            <td><input type="text" name="doormarket_theme_options[phone]" id="doormarket_theme_options[phone]" value="<?php echo $options[phone];?>" /></td>
        </tr>
        <tr>
            <td style='color: #0073AA;'>Приветствие посетителям сайта:</td>
            <td><textarea name="doormarket_theme_options[hello_text]" id="doormarket_theme_options[hello_text]"><?php echo $options[hello_text];?></textarea></td>
        </tr>
        <tr>
            <td style='color: #0073AA;'>Расположение сайдбара:</td>
            <td><select name="doormarket_theme_options[sidebar_pos]" id="doormarket_theme_options[sidebar_pos]">
                    <option value="left"<?php if($options[sidebar_pos]=='left') echo ' selected="selected"';?>>Слева</option>
                    <option value="right"<?php if($options[sidebar_pos]=='right') echo ' selected="selected"';?>>Справа</option>
                </select> </td>
        </tr>
        <tr>
            <td style='color: #0073AA;'>Показывать банер:</td>
            <td><input type="checkbox" name="doormarket_theme_options[show_baner]" id="doormarket_theme_options[show_baner]" value="1"<?php if($options[show_baner]=='1') echo ' checked="checked"';?> /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Применить" /></td>
        </tr>
    </table>
</form>

<?php } ?>