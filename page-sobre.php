<?php
get_header(); ?>

<div id="content">
	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h1 class="small azul"><div class="animated bounceIn">Vidraçaria VitralTec</div></h1>
					<p>A Vidraçaria Vitraltec conta com uma grande infra-estrutura além de profissionais 
altamente capacitados que irão desempenhar com total responsabilidade e eficácia seu 
projeto desde o planejamento até a instalação.
</p>
					<p>A Vitraltec é especializada na instalação e manutenção de vidros, e é considerada uma 
das melhores vidraçarias de São Paulo. <br>
A Vidraçaria Vitraltec se mantém sempre atualizada nas novas tendências de decoração 
e arquitetura, tudo para atender a as expectativas e necessidades de seus clientes.</p>
					<p><strong>Vidraçaria no centro de São Paulo</strong>
A Vitraltec é uma vidraçaria localizada no centro de São Paulo.
Contamos com uma grande variedade de produtos e serviços, todos eles realizados sob 
um rígido controle de qualidade.
Na Vidraçaria Vitraltec você encontra: box de vidro, portas de vidro, espelhos modelados, 
tampo de mesa de vidro, tijolos de vidro, janelas de vidro, vidros laminados, vidros 
temperados, prateleiras de vidro e vidros comuns.
Também oferecemos todos os tipos de instalação em vidros, como envidraçamento de
sacadas, vidros personalizados, vidro jateado e também fazemos manutenção de vidros 
em geral.</p>
					<ul>
						<li>Manutenção de vidros</li>
						<li>Instalação de vidros</li>
						<li>Vidros personalizados</li>
						<li>Vidraçaria em São Paulo</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>" class="btn-confira btn-azul">CONTATO</a>				
				</div>
				<div class="col-md-6">
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
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.0745529549595!2d-46.53579738443502!3d-23.637500970294973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42b832ebfd53%3A0x6ba710aa9626a2ea!2sR.+Silveira+Martins%2C+160+-+Santa+Teresinha%2C+Santo+Andr%C3%A9+-+SP%2C+09210-520!5e0!3m2!1spt-BR!2sbr!4v1470075254982" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
