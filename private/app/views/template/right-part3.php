	<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="mainPage">Welcome</a></li>
									<li>
										
									</li>
									<li><a href="tabOne">Blog Lists</a></li>
									<li class="current"><a href="tabTwo">Single Blog</a></li>
                                    <li><a href="logOut">Log Out</a></li>
									
									
								</ul>
							</nav>

					</header>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>
                                            <h2>Single Blog Item</h2>

                                            <p><?php echo $author_id; ?>
                                                <strong><?php echo $blog_name; ?></strong>
                                                <?php echo $blog_theme; ?>
                                                <?php echo $author_email; ?>
                                                <?php echo $publish_date; ?></p>

											