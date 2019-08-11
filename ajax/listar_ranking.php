<?php
	
	/* Connect To Database*/
	require_once ("../conexion.php");

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	$tables="tblprod";
	$campos="*";
	$sWhere=" tblprod.prod_name LIKE '%".$query."%'";
	$sWhere.=" order by tblprod.prod_qty DESC ";
	
	
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the 5
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT 5");
	//loop through fetched data
	


		
	
	if ($numrows>0){
		
	?>
		
						<?php 
						$i = 1;
						$finales=0;
						while($row = mysqli_fetch_array($query)){	
							$product_id=$row['id'];
							$prod_code=$row['prod_code'];
							$prod_name=$row['prod_name'];
							$prod_ctry=$row['prod_ctry'];
							$prod_qty=$row['prod_qty'];				
							$finales++;
						?>	

						<div class="col-md-push-2 col-md-8 uno">
				        	<div class="col-md-2 numero">
				                <span><?php echo $i;?></span>
				            </div>
				            <div class="col-md-7">
				                <span><?php echo $prod_code;?></span>
				            </div> 
				            <div class="col-md-3">
				                <span><?php echo $prod_qty;?> Km/h</span>
				            </div>
				        </div>

						
						<?php 
						$i=$i + 1;
					}?>
						
				

	
	
	<?php	
	}	
}
?>          
		  
