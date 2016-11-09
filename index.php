<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<div class="col-md-12">
					<?php putRevSlider( "banner-index" ) ?>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					<h1 class="small"><div class="animated bounceIn">VitralTec Vidraçaria</div></h1>
					<h3>Instalação e Manutenção de Vidros em geral</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="servicos">
		<div class="container">
			<div class="row">
				<div class="col-md-4 anima-a">
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-corretiva"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos-1.jpg"; ?>"/></a>
					<p>A manutenção corretiva do Ar Condicionado tem a função de fazer todos os tipos de consertos e reparos nos equipamentos de ar condicionado.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-corretiva"; ?>" class="btn-confira">CONFIRA</a>
				</div>
				<div class="col-md-4 anima-b">
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-preventiva"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos-2.jpg"; ?>"/></a>
					<p>A Higienização e Limpeza do Ar Condicionado é uma prática que vai além da limpeza dos filtros e deve ser realizada periódicamente.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-preventiva"; ?>" class="btn-confira">CONFIRA</a>
				</div>
				<div class="col-md-4 anima-c">
					<a href="<?php echo esc_url( home_url( '/' ) )."servico-de-instalacao"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos-3.jpg"; ?>"/></a>
					<p>Analisamos os projetos de Ar Condicionado de todos os tipos e fazemos a execução da instalação em residências, comércios e indústrias. </p>
					<a href="<?php echo esc_url( home_url( '/' ) )."servico-de-instalacao"; ?>" class="btn-confira">CONFIRA</a>
				</div>
			</div>
		</div>		
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left anima-h">
					<h2>Vidraçaria VitralTec</h2>
					<p>A Vitraltec é especializada na instalação e manutenção de vidros, e é considerada uma das melhores vidraçarias de São Paulo.<br>
					Na Vidraçaria Vitraltec você encontra: box de vidro, portas de vidro, espelhos modelados, tampo de mesa de vidro, tijolo de vidro, janelas de vidro, vidros laminados, vidros temperados, prateleiras de vidro e vidro comuns.
					</p>
					<ul>
						<li>Manutenção de vidros</li>
						<li>Instalação de vidros</li>
						<li>Vidros Personalizados</li>
						<li>Vidraçaria em São Paulo</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."sobre"; ?>" class="btn-confira btn-azul margin-responsivo">CONFIRA</a>
				</div>
				<div class="col-md-6 text-left anima-i">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-mesa.jpg"; ?>"/>
				</div>
			</div>	
		</div>	
	</section>

	<section id="maps">
		<div class="container">
			<div class="row text-left detalhes-maps">
				<div class="col-md-12">
					<h2 class="branco">Nossa localização</h2>
					<p>
						Rua Capitão Eugênio de Macedo, 353 - Itaim Paulista - São Paulo - SP
					</p>
					<p>
						<strong>Telefone.: </strong>11 2561-5068 | 11 98359-1900  <strong>Email.: </strong>vendas@vitraltec.com.br
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.886412271463!2d-46.40424858551352!3d-23.500600465235326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce638221e3bf09%3A0xc096822a20507e28!2sRua+Capit%C3%A3o+Eugenio+de+Macedo%2C+353+-+Vila+Silva+Teles%2C+S%C3%A3o+Paulo+-+SP%2C+08110-150!5e0!3m2!1spt-BR!2sbr!4v1478214412715" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
