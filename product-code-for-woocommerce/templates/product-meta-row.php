<?php

/**
 * A template for row of a product detail on a single product page.
 *
 * @package PcfWooCommerce
 *
 * @var $c callable The function used to retrieve context values.
 */

//$product_type = get_the_terms($post->ID, 'product_type')[0]->slug;
$product_type_terms = get_the_terms($post->ID, 'product_type');

// Check if terms are returned and are valid
if ($product_type_terms && is_array($product_type_terms)) {
    $product_type = $product_type_terms[0]->slug;
} else {
    $product_type = ''; // Default fallback value
}


$hide_product_code = get_option('hide_product_code_on_user_side', 'no');
$hide_second_product_code = get_option('hide_second_product_code_on_user_side', 'no');
$colorCode = get_post_meta($post->ID, PRODUCT_CODE_COLOR, true);

$checkCustomerPermission =  get_option('product_code_for_admin');
if($checkCustomerPermission == "yes" && !current_user_can( 'administrator')){
	return;
}
?>

<?php if (!empty($value) && 'no' == $hide_product_code && ( $value || ( 'yes' != get_option('product_code_hide_empty_field') && !$value ) || 'variable' == $product_type )) : ?>
	<span class="wo_productcode">
		<input type="hidden" value="<?php echo absint($post->ID); ?>" id="product_id" />
		<span><?php echo esc_html($text ? $text : __('Product Code', 'product-code-for-woocommerce')); ?>:</span>
		<span class="stl_codenum" style="color:<?php echo esc_html($colorCode); ?> !imortant"><?php echo esc_html(!$value ? __('N/A', 'product-code-for-woocommerce') : $value); ?></span>
	</span>
<?php endif; ?>

<?php
if (!empty($value_second) && 'no' == $hide_second_product_code && 'yes' == get_option('product_code_second')) {
	if ($value_second || ( 'yes' != get_option('product_code_hide_empty_field') && !$value_second ) || 'variable' == $product_type) :
		?>
		<span class="wo_productcode_second">
			<input type="hidden" value="<?php echo absint($post->ID); ?>" id="product_id_second" />
			<span><?php echo esc_html($text_second ? $text_second : __('Product Code', 'product-code-for-woocommerce')); ?>:</span>
			<span class="stl_codenum_second" style="color:<?php echo esc_html($colorCode); ?> !imortant"><?php echo esc_html(!$value_second ? __('N/A', 'product-code-for-woocommerce') : $value_second); ?></span>
		</span>
	<?php endif; ?>
<?php } ?>