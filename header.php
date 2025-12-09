<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mradvocacia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="theme-color" content="#822629" />
	<meta name="description" content="Moraes &amp; Ramos Advocacia – escritório full service com atuação nacional. Estratégia, eficiência e transparência." />

	<!-- Fontes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Cormorant+Garamond:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Tailwind CSS -->
	<script src="https://cdn.tailwindcss.com"></script>

	<!-- Tailwind theme (cores + fontes da marca) -->
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						brand: {
							red: '#822629',        // vinho principal do logo
							red900: '#4B0F11',     // tom mais escuro (hover/contraste)
							cream: '#F4F0E7',      // bege/creme do logo
							ink: '#1C1C1C'         // preto suave
						}
					},
					fontFamily: {
						display: ['Cinzel', 'serif'],              // para títulos/heading (identidade do logo)
						serifbrand: ['Cormorant Garamond', 'serif'],// opcionais para destaques
						sans: ['Inter', 'system-ui', 'sans-serif'] // textos
					},
					letterSpacing: {
						widebrand: '.15em'
					}
				}
			}
		}
	</script>

	<style>
		a {
			color: inherit !important;
			text-decoration: none !important;
		}

		a:hover {
			text-decoration: none !important;
			color: inherit;
		}

		.menu-agende {
			color: #ffffff !important;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased text-brand-ink bg-white font-sans' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Pular para o conteúdo', 'mradvocacia' ); ?>
	</a>

	<!-- Header -->
	<header id="masthead" class="bg-white/95 backdrop-blur sticky top-0 z-50 border-b border-neutral-200 site-header" x-data="{ open:false }">
		<div class="max-w-7xl mx-auto px-6 lg:px-8 py-4">
			<div class="flex items-center justify-between">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#inicio" class="flex items-center gap-3" aria-label="<?php esc_attr_e( 'Ir para o início', 'mradvocacia' ); ?>">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					if ( $custom_logo_id ) :
						echo wp_get_attachment_image( $custom_logo_id, 'full', false, array( 'class' => 'h-12 w-auto' ) );
					else :
					?>
						<img src="<?php echo esc_url( 'https://moraesramosadvocacia.com.br/wp-content/uploads/2025/12/LOGO-4-scaled.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="h-12 w-auto" />
					<?php endif; ?>
				</a>

				<!-- Navegação desktop -->
				<nav class="hidden lg:flex items-center gap-8 text-sm tracking-widebrand uppercase">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>#inicio" class="text-brand-ink hover:text-brand-red transition">
						<?php esc_html_e( 'Início', 'mradvocacia' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>#sobre" class="text-brand-ink hover:text-brand-red transition">
						<?php esc_html_e( 'Sobre', 'mradvocacia' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>#areas" class="text-brand-ink hover:text-brand-red transition">
						<?php esc_html_e( 'Áreas', 'mradvocacia' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>#socias" class="text-brand-ink hover:text-brand-red transition">
						<?php esc_html_e( 'Sócias', 'mradvocacia' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>#contato" class="menu-agende inline-flex items-center rounded-full bg-brand-red px-5 py-3 font-semibold text-white shadow-lg hover:bg-brand-red900 transition">
						<?php esc_html_e( 'Agende sua consulta', 'mradvocacia' ); ?>
					</a>
				</nav>

				<!-- Botão mobile -->
				<button class="lg:hidden p-2" @click="open = !open" aria-label="<?php esc_attr_e( 'Abrir menu', 'mradvocacia' ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
					</svg>
				</button>
			</div>
		</div>

		<!-- Menu mobile -->
		<div class="lg:hidden" x-show="open" x-transition @click.away="open=false">
			<div class="border-t border-neutral-200 bg-white px-6 py-4 space-y-3 text-sm tracking-widebrand uppercase">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#inicio" class="block text-brand-ink hover:text-brand-red" @click="open=false">
					<?php esc_html_e( 'Início', 'mradvocacia' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#sobre" class="block text-brand-ink hover:text-brand-red" @click="open=false">
					<?php esc_html_e( 'Sobre', 'mradvocacia' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#areas" class="block text-brand-ink hover:text-brand-red" @click="open=false">
					<?php esc_html_e( 'Áreas', 'mradvocacia' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#socias" class="block text-brand-ink hover:text-brand-red" @click="open=false">
					<?php esc_html_e( 'Sócias', 'mradvocacia' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#contato" class="block rounded-full bg-brand-red px-5 py-3 font-semibold text-white text-center hover:bg-brand-red900" @click="open=false">
					<?php esc_html_e( 'Agende sua consulta', 'mradvocacia' ); ?>
				</a>
			</div>
		</div>
	</header><!-- #masthead -->
