<?php

use PortalQualidade\Core\Functions;

?>

<nav style="">
	<?php Functions::addImage("logo_nome","png","../home","Portal da Qualidade"); ?>

	<ul class="nav_ul">
		<li><a href="../home"><i class="fa-solid fa-house fa-xs" style="margin-right: 5px"></i>Home</a></li>
		<li>
			<a href="#"><i class="fa-solid fa-sliders fa-sm" style="margin-right: 5px"></i>Qualidade</a>
			<ul class="nav_ul_sub">
				<li><a href="../qualidade/reunioes">Reuniões</a></li>
				<li><a href="../qualidade/certificacoes">Certificações</a></li>
				<li><a href="../qualidade/lean">Projeto Lean</a></li>
				<li><a href="http://qualidade.redeprimavera.com.br/apps/cmn/LauncherLogin.jsp" target="_blank">Interact</a></li>
			</ul>
		</li>
		<li>
			<a href="#"><i class="fa-solid fa-chart-simple fa-sm" style="margin-right: 5px"></i>Nig</a>
			<ul class="nav_ul_sub">
				<li><a href="../nig/relatorios">Relatórios BI</a></li>
				<li><a href="../nig/privados">BI Privados</a></li>
			</ul>
		</li>
		<li><a href="../contato"><i class="fa-solid fa-comments fa-sm" style="margin-right: 5px"></i>Contato</a></li>
		<li><a href="../administracao"><i class="fa-solid fa-user-gear fa-sm" style="margin-right: 5px"></i>Admin</a></li>
	</ul>
</nav>