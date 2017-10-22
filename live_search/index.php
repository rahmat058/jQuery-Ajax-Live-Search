<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Live search Jquery</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

	<div class="container" style="padding-top: 40px;">
		<div class="row">
			<div class="col-md-6">
			  <h3>jQuery Live Search</h3><hr>
				<form action="">
					<div class="form-group">
						<input type="text"  id="search" class="form-control" placeholder="Enter Searching Keyword" />
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div id="result">
					
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
           $('#search').keyup(function(){
           	   var search = $('#search').val();
           	   if($.trim(search.length) == 0){
           	   	 $('#result').html("Please Enter Searching Keyword");
           	   }else{
           	   	 $.ajax({
           	   	 	 type    : 'POST',
           	   	 	 url     : 'search.php',
           	   	 	 data    : {'search':search},
           	   	 	 success : function(data){
           	   	 	 	$('#result').html(data);
           	   	 	 }
           	   	 })
           	   }
           });
		});
	</script>
</body>
</html>