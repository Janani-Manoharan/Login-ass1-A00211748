			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
                                <h2>Hi. I am <?php echo $blog_name; ?> </h2>
                                <h5>This is my Story.</h5>
								<p>Hope everyone is doing well...</p>
							</div>
							
						</div>
					</div>
				</div>

			
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>So what's this all about?</h2>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
												Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
												Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
												consequat etiam lorem ipsum dolor sit amet nullam.</p>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
                                            
                                            
                                            <form method="POST" class="form">
                                                <input type = "text" id = "blogname"  name = "blogname" value = "<?php echo $blog_name; ?>"/>
                                                <br>
                                                <textarea id = "blogtheme" name = "blogtheme"  rows = "10" cols="5" ><?php echo $blog_theme; ?></textarea>
                                                <br>
                                                <input type="email" id = "email" name = "email" value="<?php echo $author_email; ?>"/>
                                                <br>
                                                <input type="text" id="dates" name = "dates" disabled = "false" value="<?php echo $publish_date; ?>"/>
                                                <input type="hidden" id="id" name = "id" value ="<?php echo $author_id; ?>"/>
                                                <br><br>
                                                <input type="submit" id="submit" name ="submit" >
                                            </form>    
                                           
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>