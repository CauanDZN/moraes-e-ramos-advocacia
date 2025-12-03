<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mradvocacia
 */

?>

	<!-- Footer -->
	<footer id="colophon" class="bg-brand-cream text-brand-ink py-14">
		<div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>#inicio" aria-label="<?php esc_attr_e( 'Voltar ao início', 'mradvocacia' ); ?>">
				<img src="<?php echo esc_url( 'https://moraesramosadvocacia.com.br/wp-content/uploads/2025/12/LOGO-2-scaled.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="h-14 md:h-16 mx-auto mb-4" />
			</a>
			<p class="text-sm">CNPJ: 60.308.280/0001-21</p>
			<p class="text-sm mt-1">
				Rua República da Armênia, 660 – Parque Manibura, Fortaleza, Brasil
			</p>
			<div class="mt-6 flex justify-center gap-6">
				<a href="https://www.instagram.com/moraesramosadvocacia" target="_blank" rel="noopener" class="text-neutral-600 hover:text-brand-red transition" aria-label="Instagram">
					<svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
						<path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm0 2h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3zm11 1a1 1 0 100 2 1 1 0 000-2zM12 7a5 5 0 100 10 5 5 0 000-10z" />
					</svg>
				</a>
			</div>
			<p class="mt-6 text-sm">
				&copy; 2025 Moraes &amp; Ramos Advocacia. Todos os direitos reservados.
			</p>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<!-- Alpine.js (menu mobile) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<?php wp_footer(); ?>

</body>
</html>
