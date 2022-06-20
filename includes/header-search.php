<section >
            <div class="container border border-dark">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="slider--content">
                            <div class="text-center">
                                <h1>Trouvez votre propriété idéale</h1>
                            </div>
                            <form class="mb-0" method="post" name="search" action="immobilier-search.php">
                                <div class="form-box search-properties">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="type_imo" id="type_imo" required>
                                        <option value="">CHOISIR LE TYPE DE PROPRIÉTÉ</option>
                                        <?php
$query=mysqli_query($con,"select distinct type_imo from  immobilier");
while($row=mysqli_fetch_array($query))
{
?>
                  <option value="<?php echo $row['type_imo'];?>"><?php echo $row['type_imo'];?></option>
                  <?php } ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="type_ann" id="type_ann" required="true">
                                        <option value="">Choisir le Catégorie</option>
                                        <?php $query1=mysqli_query($con,"select distinct type_ann from annonce");
              while($row1=mysqli_fetch_array($query1))
              {
              ?>      
                  <option value="<?php echo $row1['type_ann'];?>"><?php echo $row1['type_ann'];?></option>
                  <?php } ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="etat" id="etat" required="true">
                                        <option value="">Choisir état de bien</option>
                                        <?php
$query2=mysqli_query($con,"select distinct etat from immobilier");
while($row2=mysqli_fetch_array($query2))
{
?>
                                        <option value="<?php echo $row2['etat'];?>"><?php echo $row2['etat'];?></option>
                                        <?php } ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Search" name="search" class="btn"  style="background-color:#F25764">
                                        </div>
                                         
                                      
                                    </div>
                            
                                </div>
                            
                            </form>
                        </div>
                    </div>
                
                </div>
           
            </div>
            <div>
              
            </div>
        </section>