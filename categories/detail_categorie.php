
		<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  
                  <aside class="profile-info col-lg-12">
                      <section class="panel">
                          
                          <div class="panel-body bio-graph-info">
                              <h1> Détail de la catégorie</h1>
                              
                              
                              
                              <form class="form-horizontal" role="form">
                              <?php
                              //recuperation donnees a partir de la BD
                              include("config.php");
                              $id_categorie=$_GET['id_categorie'];
                              $query = "SELECT 
									`categorie`.`id`,
									
									`categorie`.`nom`,
									`categorie`.`description`,
									`categorie`.`image`
									FROM 
									categorie,ville
									WHERE
									 `categorie`.`id`= ".$id_categorie;
	
							$result = mysql_query($query);
							$ligne=mysql_fetch_row($result);
                              
                              ?>

                                  <?php 
                                  		if(isset($_GET['message_success'])) {$message_success=$_GET['message_success'];} else {$message_success="";}
										if(strcmp($message_success,"")!=0){
								
									?>
						        	<div class="alert alert-success fade in ">
						                                  <button data-dismiss="alert" class="close close-sm" type="button">
						                                      <i class="icon-remove"></i>
						                                  </button>
						                                  <strong>Succès ! </strong> 
						                                  <?php 
																echo $message_success;
								
															?>
						            </div>
						            <?php 
										}
								
									?>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Nom</label>
                                      <div class="col-lg-6">
                                          <input type="text" value="<?php echo $ligne[1]; ?>" class="form-control" id="f-name" placeholder=" " readonly>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Description</label>
                                      <div class="col-lg-6">
                                          <textarea   class="form-control" id="l-name" placeholder=" " readonly rows="3"><?php echo $ligne[2]; ?></textarea>
                                      </div>
                                  </div>
                                  
                                  
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Image</label>
                                      
                                      <div class="col-lg-3">
									    <a class="thumbnail">
									      <img src="<?php echo $ligne[3]; ?>" alt="Aucune image">
									    </a>
									  </div>
                                  </div>
                                  
                                  
                                  
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                      	  <a  class=" btn btn-primary  " href="categories.php">Retour</a>
                                          <?php
												if(isset($_SESSION["modifier_categorie"])){ 
											?>
                                          <a  class=" btn btn-warning  " href="categories.php?action=modifier&&id_categorie=<?php echo $ligne[0]; ?>">Modifier</a>
                                          <?php
												}
											?>

                                      </div>
                                  </div>
                                 
                              </form>
                          </div>
                      </section>
                      
                  </aside>
                  
              </div>

              <!-- page end-->
          </section>
      </section>
      <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  		<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
    <script src="js/categories/advanced-multiselect.js"></script>