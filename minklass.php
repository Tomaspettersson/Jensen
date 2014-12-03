<?php


session_start();
	if(!isset($_SESSION["pnumber"])){
		header("Location: login.php");
	}

?>


<?php


$pageTitle = "Min Klass";
$section = "minklass";
include("includes/header.php");
    
?>
         
    <main class="jumbotron">
    <div class="table-responsive">
        
                
<div class="container">
    <div class="row clearfix">
    	<div class="col-md-12 table-responsive">
			<table class="table table-bordered table-hover table-sortable" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							Namn
						</th>
						<th class="text-center">
							Efternamn
						</th>
						<th class="text-center">
							Personnr
						</th>
    					<th class="text-center">
							Email
						</th>
                        <th class="text-center">
							Behörighet
						</th>
        				<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
						</th>
					</tr>
				</thead>
				<tbody>
    				<tr id='addr0' data-id="0" class="hidden">
						<td data-name="name">
						    <input type="text" name='name0'  placeholder='Förnamn' class="form-control"/>
						</td>
						<td data-name="mail">
						    <input type="text" name='mail0' placeholder='Efternamn' class="form-control"/>
						</td>
						<td data-name="desc">
						    <input type="text" name="Personnr" placeholder="Personnr" class="form-control"></textarea>
						</td>
                        <td data-name="mail">
						    <input type="Email" name='name0'  placeholder='Email' class="form-control"/>
						</td>
    					<td data-name="sel">
						    <select name="sel0">
        				        <option value"">Select Option</option>
    					        <option value"1">Behörighet 1</option>
        				        <option value"2">Behörighet 2</option>
        				        <option value"3">Behörighet 3</option>
						    </select>
						</td>
                        <td data-name="del">
                            <button nam"del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>
                        </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
    	<a id="add_row" class="btn btn-default pull-right">Add Row</a>
</div>
        
        
    <script src="js/app.js"></script>
    </main>

<?php

include("includes/footer.php");
    
?>