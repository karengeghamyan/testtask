<h2>New tracking code</h2>
<form role="form" action="/codes" method="POST">
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" value="{{ $data->name }}" name="name" class="form-control" id="name" placeholder="Enter name">
	</div>
	<div class="form-group">
		<label for="code">Code:</label>
		<textarea class="form-control" rows="5" id="code" name="code">
			{{ $data->code }}
		</textarea>
	</div>
		<div class="checkbox">
		<label><input type="checkbox" @if($data->active) checked="checked" @endif name="active">Active</label>
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