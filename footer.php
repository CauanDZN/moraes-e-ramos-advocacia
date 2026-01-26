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
	<footer id="colophon" class="bg-brand-cream text-brand-ink">
		<div class="max-w-7xl mx-auto px-6 lg:px-8 py-14">
			<div class="grid gap-10 md:grid-cols-2 lg:grid-cols-5">

				<!-- Coluna 1: Sobre -->
				<div>
					<h4 class="font-display text-lg font-bold text-brand-ink">Sobre a Moraes &amp; Ramos</h4>
					<span class="mt-3 block h-[2px] w-12 bg-brand-red"></span>

					<ul class="mt-5 space-y-3 text-sm">
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>#sobre" class="text-neutral-700 hover:text-brand-red transition">
								Como tudo começou
							</a>
						</li>
						<li>
							<a href="https://www.google.com/search?q=Moraes+%26+Ramos+Advocacia+Fortaleza+avalia%C3%A7%C3%B5es" target="_blank" rel="noopener" class="text-neutral-700 hover:text-brand-red transition">
								Depoimentos (Google)
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>#socias" class="text-neutral-700 hover:text-brand-red transition">
								Sócias-fundadoras
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>politica-de-privacidade/" class="text-neutral-700 hover:text-brand-red transition">
								Política de Privacidade
							</a>
						</li>
					</ul>
				</div>

				<!-- Coluna 2: Artigos / Conteúdos -->
				<div>
					<h4 class="font-display text-lg font-bold text-brand-ink">Conteúdos</h4>
					<span class="mt-3 block h-[2px] w-12 bg-brand-red"></span>

					<ul class="mt-5 space-y-3 text-sm">
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/" class="text-neutral-700 hover:text-brand-red transition">
								Blog
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>#areas" class="text-neutral-700 hover:text-brand-red transition">
								Áreas de atuação
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>#contato" class="text-neutral-700 hover:text-brand-red transition">
								Agendar consulta
							</a>
						</li>
					</ul>
				</div>

				<!-- Coluna 3: Precisa de ajuda? -->
				<div>
					<h4 class="font-display text-lg font-bold text-brand-ink">Precisa de ajuda?</h4>
					<span class="mt-3 block h-[2px] w-12 bg-brand-red"></span>

					<ul class="mt-5 space-y-3 text-sm">
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>#contato" class="text-neutral-700 hover:text-brand-red transition">
								Falar com uma especialista
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>#areas" class="text-neutral-700 hover:text-brand-red transition">
								Ver especialidades
							</a>
						</li>
						<li>
							<a href="https://www.google.com/maps/search/?api=1&amp;query=Rua+Republica+da+Armenia+660+Fortaleza" target="_blank" rel="noopener" class="text-neutral-700 hover:text-brand-red transition">
								Como chegar
							</a>
						</li>
					</ul>
				</div>

				<!-- Coluna 4: Newsletter (opcional) -->
				<div class="lg:col-span-2">
					<h4 class="font-display text-lg font-bold text-brand-ink">
						Receba novidades e conteúdos jurídicos
					</h4>
					<span class="mt-3 block h-[2px] w-12 bg-brand-red"></span>

					<form class="mt-5 flex flex-col sm:flex-row gap-3" action="#" method="post">
						<label class="sr-only" for="mr_footer_email">Seu e-mail</label>
						<input
							id="mr_footer_email"
							name="email"
							type="email"
							placeholder="Seu e-mail"
							required
							class="w-full sm:flex-1 rounded-xl border border-neutral-300 bg-white px-4 py-3 text-sm shadow-sm focus:border-brand-red focus:ring-brand-red"
						/>
						<button
							type="submit"
							class="rounded-xl bg-brand-red px-6 py-3 font-semibold text-white shadow hover:bg-brand-red900 transition"
							style="color:#fff !important;"
						>
							Inscrever
						</button>
					</form>

					<!-- Logo + mini-descrição -->
					<div class="mt-8 flex items-start gap-4">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>#inicio" aria-label="<?php esc_attr_e( 'Voltar ao início', 'mradvocacia' ); ?>" class="shrink-0">
							<img
								src="<?php echo esc_url( 'https://moraesramosadvocacia.com.br/wp-content/uploads/2025/12/LOGO-2-scaled.png' ); ?>"
								alt="<?php bloginfo( 'name' ); ?>"
								class="h-12 md:h-14 w-auto"
								loading="lazy"
							/>
						</a>
						<div class="text-sm text-neutral-700">
							<p class="font-semibold text-brand-ink">Moraes &amp; Ramos Advocacia</p>
							<p class="mt-1">
								Atuação nacional, com atendimento digital e presencial em Fortaleza/CE.
							</p>

							<div class="mt-3 flex items-center gap-4">
								<a href="https://www.instagram.com/moraesramosadvocacia" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-neutral-700 hover:text-brand-red transition" aria-label="Instagram">
									<svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
										<path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm0 2h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3zm11 1a1 1 0 100 2 1 1 0 000-2zM12 7a5 5 0 100 10 5 5 0 000-10z" />
									</svg>
									<span class="text-sm">@moraesramosadvocacia</span>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Linha divisória -->
			<div class="mt-12 h-px w-full bg-neutral-200"></div>
		</div>

		<!-- Tarja final (VINHO) -->
		<div class="bg-brand-red text-white">
			<div class="max-w-7xl mx-auto px-6 lg:px-8 py-6">
				<div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
					<p class="text-sm text-white/90">
						<strong class="text-white">CNPJ:</strong> 60.308.280/0001-21
						<span class="mx-2 opacity-60">•</span>
						<strong class="text-white">Endereço:</strong> Rua República da Armênia, 660 – Parque Manibura, Fortaleza/CE
					</p>

					<p class="text-sm text-white/90">
						&copy; <?php echo esc_html( date('Y') ); ?> Moraes &amp; Ramos Advocacia. Todos os direitos reservados.
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<!-- Alpine.js (menu mobile) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<?php wp_footer(); ?>

</body>
</html>
