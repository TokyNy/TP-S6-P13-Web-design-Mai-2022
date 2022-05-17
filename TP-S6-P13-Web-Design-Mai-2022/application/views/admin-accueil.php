<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo css_url("style3.css"); ?>">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>Contenus</b></h2>
					</div>
					<div class="col-sm-6">
                
                    
                        <?php echo form_open_multipart('Controller/do_upload');?>

                        <input type="file" name="userfile" size="20" />

                        <br /><br />

                        <input type="submit" value="Importer" />

                        </form>

                    <br>
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un contenu</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>Titre</th>
						<th>Description</th>
						<th>Contenus</th>
						<th>Date</th>
						<th>Theme</th>
                        <th>Photo</th>
					</tr>
				</thead>
				<tbody>
                <?php for($i=0;$i<count($actus);$i++) { ?>
					<tr>
						
                       
                            <td><?php echo $actus[$i]['titre']; ?> </td>
                            <td><?php echo $actus[$i]['descript']; ?></td>
                            <td><?php echo $actus[$i]['contenus']; ?></td>
                            <td><?php echo $actus[$i]['daty']; ?></td>
                            <td><?php echo $actus[$i]['nom_theme']; ?></td>
                            <td> <img width="100" height="50" class="w-100" src="<?php echo images_url($actus[$i]['nom_photo']);?>" alt="Image"><?php echo $actus[$i]['nom_photo']; ?></td>
						<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="<?php echo site_url("Controller/supprimer?id=".($i+1)); ?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>

                       
					</tr>
                    <?php } ?>
					
	
				</tbody>
			</table>

		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?php echo site_url("Controller/insertActuDetails");?>" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Contenu</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Titre</label>
						<input type="text" name="titre" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="descript" required></textarea>
					</div>
					<div class="form-group">
						<label>Contenus</label>
						<textarea class="form-control" name="contenus" required></textarea>
					</div>
					<div class="form-group">
						<label>Date</label>
						<input type="date" name="daty" format="yyyy-mm-dd" class="form-control" required>
					</div>	
                    <div class="form-group">
                    <label for="pet-select">Thème :</label>

                        <select name="theme" id="pet-select">
                            <option value="">--Choisir un thème--</option>
                            <?php for($i=0;$i<count($th);$i++) { ?>
                                 <option value="<?php echo $th[$i]['id']; ?>"><?php echo $th[$i]['nom']; ?></option>
                             <?php } ?>
                        </select>
                       <br>

                        <label for="pet-select">Photo :</label>

                        <select name="photo" id="pet-select">
                            <option value="">--Choisir une photo--</option>
                            <?php for($i=0;$i<count($ph);$i++) { ?>
                                <option value="<?php echo $ph[$i]['id']; ?>"><?php echo $ph[$i]['nom']; ?></option>
                            <?php } ?>
                        </select>
					</div>	
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form action="<?php echo site_url("Controller/insertActuDetails");?>" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Modifier Contenu</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Titre</label>
						<input type="text" name="titre" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="descript" required></textarea>
					</div>
					<div class="form-group">
						<label>Contenus</label>
						<textarea class="form-control" name="contenus" required></textarea>
					</div>
					<div class="form-group">
						<label>Date</label>
						<input type="date" name="daty" format="yyyy-mm-dd" class="form-control" required>
					</div>	
                    <div class="form-group">
                    <label for="pet-select">Thème :</label>

                        <select name="theme" id="pet-select">
                            <option value="">--Choisir un thème--</option>
                            <?php for($i=0;$i<count($th);$i++) { ?>
                                 <option value="<?php echo $th[$i]['id']; ?>"><?php echo $th[$i]['nom']; ?></option>
                             <?php } ?>
                        </select>
                       <br>

                        <label for="pet-select">Photo :</label>

                        <select name="photo" id="pet-select">
                            <option value="">--Choisir une photo--</option>
                            <?php for($i=0;$i<count($ph);$i++) { ?>
                                <option value="<?php echo $ph[$i]['id']; ?>"><?php echo $ph[$i]['nom']; ?></option>
                            <?php } ?>
                        </select>
					</div>	
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>

		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer Contenus</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Etes-vous sur de vouloir supprimer ce contenu ? </p>
					<p class="text-warning"><small></small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="submit" class="btn btn-danger" value="Supprimer">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>