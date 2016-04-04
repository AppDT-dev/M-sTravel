 <?php setlocale(LC_MONETARY, 'es_MX');
 include('connect.php');
$id=$_GET['id'];
$query="SELECT estado FROM Clientes where id_cliente='$id'";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
	$estado=($row['estado']=="Hidalgo")?"1":"2";
}
  mysql_free_result($result);
  mysql_close($link);		
 ?>
<form action="confirmedpaq.php?id=<?php echo $id;?>&&event=<?php echo $event; ?>" method="post" data-parsley-validate novalidate>
										<div class="form-group">
											<label class="control-label" for="userName">¿Quién es tu coordinador?</label>
                                                   
                                                     <select class="form-control select2" name="coord">
                                                    <?php 
																				
													include('connect.php');
													$query="SELECT * FROM coordinador where area='$estado'";
													$link=mysql_connect($server,$dbuser,$dbpass);
													$result=mysql_db_query($database,$query,$link);
													while($row = mysql_fetch_array($result))
													{
														
														 echo '<option value='.$row['id_coord'].'>'.$row['nombre'].'</option>';
														
														
													}
															 mysql_free_result($result);
                                    				mysql_close($link);					
													?>
                                                       </select>
                                                  
										</div>
										<div class="form-group">
										 <label class="control-label" for="name">Trasporte</label>
                                                  
                                                         <select class="form-control select2" name="paquete">
                                                         <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM opcionespaquete where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                         
                                                         echo '<option value='.$row['id_opcion'].'>'.utf8_encode($row['descripcion'])." $".$row['costo'].'</option>';
                                                         
                                                        
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                                </select>
                                                  
										</div>

										<div class="form-group">
											<?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT costo FROM congreso where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                        $congresocosto=$row['costo'];
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                                    
							<!--	<label class="control-label" for="surname">¿Entrarás al congreso? <?php //echo money_format('%i', $congresocosto);?></label>
                                                   
                                                     <select class="form-control select2" name="congreso">-->
													<?php
													/*if($bandera==0){
														
														
                                                         echo '<option value=0>No</option>';
														 echo '<option value=1>Si</option>';
                                                         
														} 
														else
														{                        
                                                    include('connect.php');
                                                    $query="SELECT congreso FROM paquete where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
														$mensaje = ($row['congreso']==0) ? 'No' : 'Si';
														 
                                                         echo '<option value='.$row['congreso'].'>'.$mensaje.'</option>';
                                                        
                                                        
                                                    }
                                                    mysql_free_result($result);
                                                    mysql_close($link); 
														}*/
                                                    ?>
													<!--</select>-->
                                                   
										</div>
										<div class="form-group">
											<label class="control-label " for="email">Habitación</label>
                                            <select class="form-control select2" name="hab">
                                                         <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM habitacion where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                         
                                                         echo '<option value='.$row['id_hab'].'>'.utf8_encode($row['desc'])." $".$row['costo'].'</option>';
                                                         
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                                </select>
                                               
										</div>
                                        <div class="form-group">
                                        <label class="control-label " for="address">Barra Libre</label>
                                                  
                                                         <select class="form-control select2" name="barra">
                                                         <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM barra where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                         
                                                         echo '<option value='.$row['id_barra'].'>'.$row['desc']." $".$row['costo'].'</option>';
                                                         
                                                        
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                                      </select>  
                                        </div>
                                        <div class="form-group">
										 <label class="control-label" for="name">Extras</label>
                                                  
                                                         <select class="form-control select2" name="extra">
                                                         <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM extrapaq where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                         
                                                         echo '<option value='.$row['id_extra'].'>'.utf8_encode($row['desc'])." $".$row['costo'].'</option>';
                                                         
                                                        
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
                                                </select>
                                                  
										</div>
                                        <div class="alert alert-info">
                                <p>Una vez que hayas personalizado tu paquete de viaje,no podrás hacer cambios.</p>
                                
					</div>
								<div class="cstyle02">
									<button type="submit" class="btn-search4 margleft15" style="visibility:<?php echo $op;?>;">Guardar</button>
								</div>
								
								</form>