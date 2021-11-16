<?php
?>

<header class="header-v2">
	<!-- Header desktop -->
	<div class="container-menu-desktop trans-03">
		<div class="wrap-menu-desktop nav-principal">
			<nav class="limiter-menu-desktop p-l-45">

				<!-- Logo desktop -->
				<a href="#" class="logo">
					<img src="../../assets/img/sam.png" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li class="active-menu">
							<a href="../home/home.php">Inicio</a>

						</li>

						<li class="label1" data-label1="hot">
							<a href="../productosVista/productosVista.php">Productos</a>
						</li>




						<li class="">
							<a href="index.html">Servicio Tecnico</a>
							<ul class="sub-menu">
								<li><a href="index.html">Homepage 1</a></li>
								<li><a href="home-02.html">Homepage 2</a></li>
								<li><a href="home-03.html">Homepage 3</a></li>
							</ul>
						</li>

						<li>
							<a href="contact.html">Contactenos</a>
						</li>
						<li class="nav-item dropdown">
                                <i class="fas fa-shopping-cart nav-link dropdown-toggle img-fluid" height="70px" width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Compra</a>



                                </div>
                            </li>
					</ul>
				</div>

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m h-full">


					<div class="flex-c-m h-full p-l-18 p-r-25 bor5">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					</div>
					<div class="flex-c-m h-full p-l-18 p-r-25 bor5">

						<a href="#">Iniciar Sesion
							<i class="fa fa-sign-in" aria-hidden="true"></i>
						</a>
					</div>

				</div>
			</nav>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile nav-principal">
		<!-- Logo moblie -->
		<div class="logo-mobile">
			<a href="index.html"><img src="../../assets/img/sam.png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
			<div class="flex-c-m h-full p-r-10">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
			</div>

			<div class="flex-c-m h-full p-lr-10 bor5">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
			</div>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>


	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="main-menu-m">
			<li class="active-menu">
				<a href="index.html">Inicio</a>

			</li>

			<li class="label1" data-label1="hot">
				<a href="product.html">Productos</a>
			</li>




			<li class="">
				<a href="index.html">Servicio Tecnico</a>
				<ul class="sub-menu">
					<li><a href="index.html">Homepage 1</a></li>
					<li><a href="home-02.html">Homepage 2</a></li>
					<li><a href="home-03.html">Homepage 3</a></li>
				</ul>
			</li>

			<li>
				<a href="contact.html">Contactenos</a>
			</li>
		</ul>
	</div>

	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="search" placeholder="Search...">
			</form>
		</div>
	</div>
</header>


<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
	<div class="s-full js-hide-cart"></div>

	<div class="header-cart flex-col-l p-l-65 p-r-25">
		<div class="header-cart-title flex-w flex-sb-m p-b-8">
			<span class="mtext-103 cl2">
				Carrito
			</span>

			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>

		<div class="header-cart-content flex-w js-pscroll">
			<ul class="header-cart-wrapitem w-full" id="carrito">

				<table id="lista-carrito" class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Precio</th>
							<th></th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</ul>

			<div class="w-full">
				<div class="header-cart-total w-full p-tb-40">
					Total: $75.00
				</div>

				<div class="header-cart-buttons flex-w w-full">
					<a href="#" id="vaciar-carrito" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
						Vaciar Carrito
					</a>

					<a href="#" id="procesar-pedido" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
						Procesar Compra
					</a>
				</div>
			</div>
		</div>
	</div>
</div>