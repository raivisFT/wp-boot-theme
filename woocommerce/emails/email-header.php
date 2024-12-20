<?php
/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 7.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
	</head>
	<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
		<table width="100%" id="outer_wrapper" style="border-radius:12px;display:block">
			<tr>
				<td><!-- Deliberately empty to support consistent sizing and layout across multiple email clients. --></td>
				<td width="600">
					<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>">
						<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_container" style="border-radius:12px;display:block">
										<tr>
											<td align="center" valign="top">
												<!-- Header -->
												<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header"  style="background-image: url('data:image/png;base64,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yoUHAQD2ufL8BRAAAGC/KfNfCR0AANi3BBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQAAAgGwEEAADIRgABAACyEUAAAIBsBBAAACAbAQQAAMhGAAEAALIRQAAAgGwEEAAAIBsBBAAAyEYAAQAAshFAAACAbAQQ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');background-size:cover;width:100%;padding:84px 0;background-color: transparent;">
													<tr>
														<td id="header_wrapper">
															<h1><?php echo esc_html( $email_heading ); ?></h1>
														</td>
													</tr>
												</table>
												<!-- End Header -->
											</td>
										</tr>
										<tr>
											<td align="center" valign="top">
												<!-- Body -->
												<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_body" style="border-radius:12px;display:block">
													<tr>
														<td valign="top" id="body_content">
															<!-- Content -->
															<table border="0" cellpadding="20" cellspacing="0" width="100%">
																<tr>
																	<td valign="top">
																		<div id="body_content_inner">
