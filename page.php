<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mradvocacia
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if ( is_front_page() ) : ?>

		<!-- Hero (com foto 100% de altura e largura) -->
		<section id="inicio" class="relative isolate text-white">
			<!-- Imagem de fundo cobrindo 100% -->
			<div class="absolute inset-0 -z-10">
				<!-- Substitua pelo arquivo real da sua foto -->
				<img src="<?php echo esc_url( 'https://moraesramosadvocacia.com.br/wp-content/uploads/2025/12/LOGO-1-scaled.png' ); ?>" alt="" class="h-full w-full object-cover" />
				<!-- Overlay vinho para manter a identidade da marca -->
				<div class="absolute inset-0 bg-brand-red/60"></div>
			</div>

			<div class="max-w-7xl mx-auto px-6 lg:px-8 min-h-[100svh] flex flex-col items-center justify-center text-center">
				<h1 class="font-display text-4xl md:text-6xl font-bold leading-tight">
					Advocacia Moderna, Estratégica e Eficiente
				</h1>
				<p class="mt-6 text-lg md:text-xl text-white/90 max-w-3xl">
					Soluções jurídicas em âmbito nacional, com foco em resultados e transparência.
				</p>
				<div class="mt-10 flex items-center justify-center gap-4">
					<a href="#contato" class="rounded-full bg-white text-brand-red px-7 py-4 font-semibold shadow-lg hover:bg-brand-cream transition">
						Quero falar com uma especialista
					</a>
					<a href="#areas" class="rounded-full border border-white/60 px-7 py-4 font-semibold hover:bg-white/10 transition">
						Áreas de atuação
					</a>
				</div>
			</div>
		</section>

		<!-- Sobre -->
		<section id="sobre" class="py-20 md:py-24 bg-white scroll-mt-24">
			<div class="max-w-7xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center">
				<div>
					<h2 class="font-display text-3xl md:text-4xl font-bold text-brand-ink">
						Moraes &amp; Ramos: Advocacia Full Service
					</h2>
					<span class="mt-4 block h-[2px] w-16 bg-brand-red"></span>
					<p class="mt-6 text-lg text-neutral-700">
						Somos um escritório moderno com atuação em todo o território nacional. Fundado pelas sócias Dra. Nicole Moraes e Dra. Kamila Ramos, unimos expertise técnica e visão estratégica para oferecer soluções jurídicas eficientes.
					</p>
					<p class="mt-4 text-lg text-neutral-700">
						Nossa missão é descomplicar o direito, prestando um serviço transparente, ético e focado nos objetivos dos nossos clientes – do previdenciário ao empresarial.
					</p>
				</div>
				<div class="space-y-6">
					<div class="flex items-start gap-4">
						<div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-red/10 text-brand-red">
							<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
								<path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
							</svg>
						</div>
						<div>
							<h3 class="font-semibold text-brand-ink">Atuação Nacional</h3>
							<p class="text-neutral-600">Atendimento digital e eficiente em todo o Brasil.</p>
						</div>
					</div>
					<div class="flex items-start gap-4">
						<div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-red/10 text-brand-red">
							<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.524 4.675a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.364 1.118l1.524 4.675c.3.921-.755 1.688-1.54 1.118l-3.976-2.888a1 1 0 00-1.175 0l-3.976 2.888c-.784.57-1.838-.197-1.54-1.118l1.524-4.675a1 1 0 00-.364-1.118L2.98 9.1c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.524-4.675z" />
							</svg>
						</div>
						<div>
							<h3 class="font-semibold text-brand-ink">Avaliações 5 estrelas</h3>
							<p class="text-neutral-600">Reconhecimento de clientes no Google.</p>
						</div>
					</div>
					<div class="flex items-start gap-4">
						<div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-red/10 text-brand-red">
							<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7M16 7V5a2 2 0 00-2-2H10a2 2 0 00-2 2v2" />
							</svg>
						</div>
						<div>
							<h3 class="font-semibold text-brand-ink">Full Service</h3>
							<p class="text-neutral-600">Consultivo e contencioso estratégico, fim-a-fim.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Áreas de atuação -->
		<section id="areas" class="py-20 md:py-24 bg-brand-cream scroll-mt-24">
			<div class="max-w-7xl mx-auto px-6 lg:px-8">
				<div class="text-center max-w-3xl mx-auto">
					<h2 class="font-display text-3xl md:text-4xl font-bold text-brand-ink">Nossas Especialidades</h2>
					<span class="mt-4 block h-[2px] w-16 bg-brand-red mx-auto"></span>
					<p class="mt-4 text-neutral-700">
						Atuação focada em áreas estratégicas para garantir a melhor defesa dos seus direitos.
					</p>
				</div>

				<div class="mt-14 grid md:grid-cols-2 lg:grid-cols-4 gap-7">
					<!-- Previdenciário -->
					<div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
						<div class="h-14 w-14 flex items-center justify-center rounded-full bg-brand-red/10 text-brand-red mb-5">
							<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2M12 7v1m0 8v1" />
							</svg>
						</div>
						<h3 class="font-display text-2xl font-bold">Direito Previdenciário</h3>
						<p class="mt-2 text-neutral-600">
							Planejamento de aposentadoria, benefícios do INSS (BPC/LOAS), revisões e mais.
						</p>
					</div>
					<!-- Empresarial -->
					<div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
						<div class="h-14 w-14 flex items-center justify-center rounded-full bg-brand-red/10 text-brand-red mb-5">
							<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M4 21V5a2 2 0 012-2h12a2 2 0 012 2v16" />
								<path stroke-linecap="round" stroke-linejoin="round" d="M9 7h1m-1 4h1m4-4h1m-1 4h1M9 21v-5a1 1 0 011-1h2a1 1 0 011 1v5" />
							</svg>
						</div>
						<h3 class="font-display text-2xl font-bold">Direito Empresarial</h3>
						<p class="mt-2 text-neutral-600">
							Assessoria a empresas e empreendedores, contratos e segurança jurídica para crescer.
						</p>
					</div>
					<!-- Consumidor -->
					<div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
						<div class="h-14 w-14 flex items-center justify-center rounded-full bg-brand-red/10 text-brand-red mb-5">
							<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 10-8 0v4M5 9h14l1 12H4L5 9z" />
							</svg>
						</div>
						<h3 class="font-display text-2xl font-bold">Direito do Consumidor</h3>
						<p class="mt-2 text-neutral-600">
							Bancário, transporte de passageiros, negativações indevidas e mais.
						</p>
					</div>
					<!-- Saúde -->
					<div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
						<div class="h-14 w-14 flex items-center justify-center rounded-full bg-brand-red/10 text-brand-red mb-5">
							<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 016-6h6m6 0a6 6 0 00-6-6h-6a6 6 0 00-6 6v1H3" />
							</svg>
						</div>
						<h3 class="font-display text-2xl font-bold">Direito da Saúde</h3>
						<p class="mt-2 text-neutral-600">
							Contra planos de saúde: negativas de cobertura, liminares e defesa do paciente.
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Sócias -->
		<section id="socias" class="py-20 md:py-24 bg-white scroll-mt-24">
			<div class="max-w-7xl mx-auto px-6 lg:px-8">
				<div class="text-center">
					<h2 class="font-display text-3xl md:text-4xl font-bold text-brand-ink">
						Conheça as Sócias-Fundadoras
					</h2>
					<span class="mt-4 block h-[2px] w-16 bg-brand-red mx-auto"></span>
				</div>

				<div class="mt-14 grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
					<!-- Kamila -->
					<div class="flex flex-col md:flex-row items-center text-center md:text-left gap-8">
						<img class="w-48 h-48 rounded-full object-cover object-top shadow-xl" src="<?php echo esc_url( get_template_directory_uri() . '/image_5370a8.jpg' ); ?>" alt="Dra. Kamila Ramos" />
						<div>
							<h3 class="font-display text-2xl md:text-3xl font-bold">Dra. Kamila Ramos</h3>
							<p class="text-brand-red font-semibold mt-2">Sócia-Fundadora | Gestora Jurídica</p>
							<p class="text-neutral-500 text-sm mb-3">OAB/CE 46.887</p>
							<p class="text-neutral-700">
								Especialista em Direito do Consumidor e Previdenciário, com foco em áreas Bancária e Transporte de Passageiros.
							</p>
						</div>
					</div>
					<!-- Nicole -->
					<div class="flex flex-col md:flex-row items-center text-center md:text-left gap-8">
						<img class="w-48 h-48 rounded-full object-cover object-top shadow-xl" src="<?php echo esc_url( get_template_directory_uri() . '/image_5370c0.jpg' ); ?>" alt="Dra. Nicole Moraes" />
						<div>
							<h3 class="font-display text-2xl md:text-3xl font-bold">Dra. Nicole Moraes</h3>
							<p class="text-brand-red font-semibold mt-2">Sócia-Fundadora | Assessora Jurídica</p>
							<p class="text-neutral-500 text-sm mb-3">OAB/CE 47.164</p>
							<p class="text-neutral-700">
								Especialista em Direito da Saúde e Previdenciário. Assessora empresas e empreendedores com foco em segurança jurídica.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Prova social -->
		<section class="py-20 md:py-24 bg-brand-red text-white">
			<div class="max-w-5xl mx-auto px-6 lg:px-8 text-center">
				<h2 class="font-display text-3xl md:text-4xl font-bold">Excelência Reconhecida</h2>
				<div class="mt-6 flex items-center justify-center gap-2" aria-hidden="true">
					<span class="inline-flex h-9 w-9 items-center justify-center">★</span>
					<span class="inline-flex h-9 w-9 items-center justify-center">★</span>
					<span class="inline-flex h-9 w-9 items-center justify-center">★</span>
					<span class="inline-flex h-9 w-9 items-center justify-center">★</span>
					<span class="inline-flex h-9 w-9 items-center justify-center">★</span>
				</div>
				<p class="mt-2 text-lg font-semibold">Avaliações 5 estrelas no Google</p>
				<blockquote class="mt-8 text-xl md:text-2xl italic text-white/90 max-w-3xl mx-auto">
					“Extremamente profissionais e atenciosas. A Dra. Nicole e a Dra. Kamila conduziram meu caso com eficiência e visão estratégica. Recomendo de olhos fechados!”
				</blockquote>
				<footer class="mt-4 text-base font-semibold">— J. Silva, Cliente Previdenciário</footer>
			</div>
		</section>

		<!-- Contato -->
		<section id="contato" class="py-20 md:py-24 bg-brand-cream scroll-mt-24">
			<div class="max-w-7xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-12">
				<!-- Informações -->
				<div>
					<h2 class="font-display text-3xl md:text-4xl font-bold text-brand-ink">Agende sua Consulta</h2>
					<span class="mt-4 block h-[2px] w-16 bg-brand-red"></span>
					<p class="mt-6 text-lg text-neutral-700">
						Dê o primeiro passo para resolver seu problema. Fale conosco pelo formulário ou em nossos canais oficiais.
					</p>

					<div class="mt-8 space-y-6">
						<a href="https://www.google.com/maps/search/?api=1&amp;query=Rua+Republica+da+Armenia+660+Fortaleza" target="_blank" rel="noopener" class="flex items-start gap-4 group">
							<span class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition">
								<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 11.5a3 3 0 100-6 3 3 0 000 6z" />
									<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.5-7.5 12-7.5 12S4.5 18 4.5 10.5a7.5 7.5 0 1115 0z" />
								</svg>
							</span>
							<div>
								<h3 class="font-semibold text-brand-ink">Endereço</h3>
								<p class="text-neutral-700 group-hover:text-white/90 group-hover:mix-blend-difference transition">
									Rua República da Armênia, 660 – Parque Manibura, Fortaleza/CE • 60810-350
								</p>
							</div>
						</a>

						<a href="https://wa.me/5585XXXXXXXX" target="_blank" rel="noopener" class="flex items-start gap-4 group">
							<span class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition">
								<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 12.487c-.21-.105-1.236-.61-1.427-.681-.191-.07-.33-.105-.468.106-.14.21-.536.68-.657.82-.121.14-.242.158-.453.053-.21-.105-.888-.327-1.693-1.044-.626-.557-1.049-1.245-1.17-1.456-.122-.21-.013-.325.092-.43.095-.095.21-.245.315-.367.105-.122.14-.21.21-.351.07-.14.035-.263-.018-.368-.053-.105-.468-1.13-.642-1.547-.169-.407-.341-.352-.468-.358l-.399-.007c-.14 0-.368.053-.561.263-.191.21-.735.718-.735 1.75 0 1.032.753 2.03.858 2.17.105.14 1.48 2.256 3.586 3.161 2.106.905 2.106.604 2.486.566.38-.037 1.236-.5 1.41-.982.175-.482.175-.895.122-.982-.053-.088-.192-.14-.403-.245z" />
								</svg>
							</span>
							<div>
								<h3 class="font-semibold text-brand-ink">WhatsApp</h3>
								<p class="text-neutral-700">(85) 9XXXX-XXXX</p>
							</div>
						</a>

						<a href="https://www.instagram.com/moraesramosadvocacia" target="_blank" rel="noopener" class="flex items-start gap-4 group">
							<span class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-red/10 text-brand-red group-hover:bg-brand-red group-hover:text-white transition">
								<svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
									<path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm0 2h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3zm11 1a1 1 0 100 2 1 1 0 000-2zM12 7a5 5 0 100 10 5 5 0 000-10z" />
								</svg>
							</span>
							<div>
								<h3 class="font-semibold text-brand-ink">Instagram</h3>
								<p class="text-neutral-700">@moraesramosadvocacia</p>
							</div>
						</a>
					</div>
				</div>

				<!-- Formulário -->
				<div>
					<form action="#" method="POST" class="bg-white p-8 rounded-2xl shadow-xl space-y-6">
						<div>
							<label for="name" class="block text-sm font-semibold text-brand-ink">Seu Nome</label>
							<input id="name" name="name" type="text" required class="mt-1 block w-full rounded-md border border-neutral-300 px-4 py-3 shadow-sm focus:border-brand-red focus:ring-brand-red" />
						</div>
						<div>
							<label for="email" class="block text-sm font-semibold text-brand-ink">Seu E-mail</label>
							<input id="email" name="email" type="email" required class="mt-1 block w-full rounded-md border border-neutral-300 px-4 py-3 shadow-sm focus:border-brand-red focus:ring-brand-red" />
						</div>
						<div>
							<label for="phone" class="block text-sm font-semibold text-brand-ink">Seu Telefone/WhatsApp</label>
							<input id="phone" name="phone" type="tel" required class="mt-1 block w-full rounded-md border border-neutral-300 px-4 py-3 shadow-sm focus:border-brand-red focus:ring-brand-red" />
						</div>
						<div>
							<label for="message" class="block text-sm font-semibold text-brand-ink">Mensagem</label>
							<textarea id="message" name="message" rows="4" required class="mt-1 block w-full rounded-md border border-neutral-300 px-4 py-3 shadow-sm focus:border-brand-red focus:ring-brand-red"></textarea>
						</div>
						<button type="submit" class="w-full rounded-full bg-brand-red px-6 py-4 font-bold text-white shadow-lg hover:bg-brand-red900 transition">
							Enviar Mensagem
						</button>
					</form>
				</div>
			</div>
		</section>

	<?php else : ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	<?php endif; ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
