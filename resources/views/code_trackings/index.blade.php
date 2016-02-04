<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ul class="nav nav-pills">
				<li role="presentation"><a href="#add" aria-controls="home" role="tab" data-toggle="tab">Add new</a></li>
				<li role="presentation" class="active"><a href="#manage" aria-controls="manage" role="tab" data-toggle="tab">Manager</a></li>
				<!-- <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
				<li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a></li> -->
			</ul>			
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade" id="add">
					<h2>New tracking code</h2>
					<form role="form" action="/codes" method="POST">
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
						</div>
						<div class="form-group">
							<label for="code">Code:</label>
							<textarea class="form-control" rows="5" id="code" name="code"></textarea>
						</div>
							<div class="checkbox">
							<label><input type="checkbox" name="active">Active</label>
						</div>
						<div class="form-group">
							<label >Position</label>
							<select class="form-control" name="position_id">
								<option value="1">Before &lt;&#47;HEAD&gt;</option>
								<option value="2">After &lt;BODY&gt;</option>
								<option value="3">Before &lt;&#47;BODY&gt;</option>								
							</select>
						</div>
						<div class="form-group">
							<label >Timer</label>
							<input min="0" type="number" name="timer" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane fade in active" id="manage">
					<h2>Manage</h2>
					<table class="table">
					    <thead>
					      <tr>
					        <th>Name</th>
					        <th>Position</th>
					        <th>Active?</th>
					        <!-- <th>Each pages?</th> -->
					        <th>Shortcode</th>
					        <th>Actions</th>
					      </tr>
					    </thead>
					    <tbody>
					    	@foreach($data as $key => $value)
								<tr>
									<td>{!! $value->name !!}</td>
									<td>Position</td>
									<td>@if($value->active) yes @else no @endif</td>
									<!-- <td>Anna</td> -->
									<td>{!! $value->code !!}</td>
									<td>
										<a href="/codes/"></a>
									</td>
								</tr>							
							@endforeach
					    </tbody>
					  </table>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="settings">
					<h2>Settings</h2>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="about">
					<h2>About</h2>
				</div>
			</div>
		</div>
		  <!-- Nav tabs -->

		  <!-- Tab panes -->

		</div>
		
	</div>

	<script type="text/javascript">
		$('#myTabs a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	</script>
	<style type="text/css">
		.nav-tabs li.active{
			background-color: blue;
		}
	</style>
</body>
</html>