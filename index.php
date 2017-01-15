<?php
include_once 'app/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>cmsXj</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

</head>

<body>


    <!-- Start your project here-->
    
    
	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		<a id="edit" class="btn-floating btn-large primary-color"><i class="fa fa-pencil"></i></a>
	</div>

	<div id="xContent" class="container pt-2">
		<div class="row">
			<div class="col-md-6 offset-xs-3">
				<!--Panel-->
				<div class="card">
					<h3 class="card-header primary-color white-text"><?php echo $xTitle ?></h3>
					<div class="card-block">
						<h4 class="card-title"><?php echo $xSubTitle ?></h4>
						<p class="card-text"><?php echo $xContent ?></p>
						<p class="card-text">Created Date: <?php echo $xCreatedDate ?><br>Modified Date: <?php echo $xModifiedDate ?></p>
					</div>
				</div>
				<!--/.Panel-->
			</div>
		</div>
	</div>

	<div id="xContentEdit" class="container pt-2 hide">
		<div class="row">
			<div class="col-md-12">
				<form action="app/save.php" method="POST"> 
					<div class="md-form">
						<input value="<?php echo $xTitle ?>" type="text" id="xTitle" name="xTitle" class="form-control">
						<label for="form5">xTitle</label>
					</div>
					<div class="md-form">
						<input value="<?php echo $xSubTitle ?>" type="text" id="xSubTitle" name="xSubTitle" class="form-control">
						<label for="form5">xSubTitle</label>
					</div>
					<!--Basic textarea-->
					<div class="mb-1">
						<label for="form7">xContent</label>
						<textarea type="text" id="xContent" name="xContent" class="editable"><?php echo $xContent ?></textarea>
					</div>
					<div class="md-form mt-2">
						<input value="<?php echo $xCreatedDate ?>" type="text" id="xSubTitle" name="xSubTitle" class="form-control" disabled>
						<label for="form5">xCreatedDate</label>
					</div>
					<div class="md-form">
						<input value="<?php echo $now ?>" type="text" id="xSubTitle" name="xSubTitle" class="form-control" disabled>
						<label for="form5">xModifiedDate</label>
					</div>
					<div class="float-xs-right">
						<button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Save</button>
						<button id="cancel" type="button" class="btn btn-secondary"><i class="fa fa-save" aria-hidden="true"></i> Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
   
    <!-- /Start your project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <script>
	// Material Select Initialization
	$(document).ready(function() {
		$isEditing = 0;
	});

	$('#edit').click(function() {
		if ($isEditing == 0) {
			$('#xContent').hide();
			$('#xContentEdit').show();
			$isEditing = 1;
		} else {
			$('#xContent').show();
			$('#xContentEdit').hide();
			$isEditing = 0;
		}
	});

	$('#cancel').click(function() {
		$isEditing = 0;
		$('#xContent').show();
		$('#xContentEdit').hide();
	});
		
	tinymce.init({
		selector: 'textarea.editable',
		menubar: false,
		plugins: [
		'advlist autolink lists link image charmap print preview anchor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table contextmenu paste code'
		],
		toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		content_css: 'css/style.css'
	});
		
	</script>

</body>

</html>