<?php
/**
 * Order tracking form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/form-tracking.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

?>

<form action="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" method="post" class="track_order">

	<p><?php esc_html_e( 'Para rastrear su pedido, ingrese su ID de pedido en el cuadro siguiente y presione el botón "Rastrear". Esto se le entregó en su recibo y en el correo electrónico de confirmación que debería haber recibido.', 'woocommerce' ); ?></p>

	<p class="form-row form-row-first"><label for="orderid"><?php esc_html_e( 'ID de la orden', 'woocommerce' ); ?></label> <input class="input-text" type="text" name="orderid" id="orderid" value="<?php echo isset( $_REQUEST['orderid'] ) ? esc_attr( wp_unslash( $_REQUEST['orderid'] ) ) : ''; ?>" placeholder="<?php esc_attr_e( 'Lo encuentras en el email de confirmación.', 'woocommerce' ); ?>" /></p><?php // @codingStandardsIgnoreLine ?>
	<p class="form-row form-row-last"><label for="order_email"><?php esc_html_e( 'email Factura', 'woocommerce' ); ?></label> <input class="input-text" type="text" name="order_email" id="order_email" value="<?php echo isset( $_REQUEST['order_email'] ) ? esc_attr( wp_unslash( $_REQUEST['order_email'] ) ) : ''; ?>" placeholder="<?php esc_attr_e( 'Email el que usaste durante la compra.', 'woocommerce' ); ?>" /></p><?php // @codingStandardsIgnoreLine ?>
	<div class="clear"></div>

	<p class="form-row"><button type="submit" class="button" name="track" value="<?php esc_attr_e( 'Track', 'woocommerce' ); ?>"><?php esc_html_e( 'Rastrear', 'woocommerce' ); ?></button></p>
	<?php wp_nonce_field( 'woocommerce-order_tracking' ); ?>

</form>
