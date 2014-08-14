@section('content')
<div class="container-fluid">

	<div class="container background-color">

		<div class="page-header text-center">

			<h1>Contact Us <br ><small>Use The Form Below...</small></h1>

		</div>


		<form class="form-horizontal" action="contact" method="POST">
			<fieldset>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="textinput">First Name</label>  
					<div class="col-md-4">
						<input id="textinput" name="first" type="text" placeholder="Your First Name" class="form-control input-md">
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="textinput">Last Name</label>  
					<div class="col-md-4">
						<input id="textinput" name="last" type="text" placeholder="Your First Name" class="form-control input-md">
						
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="textinput">Email Address</label>  
					<div class="col-md-4">
						<input id="textinput" name="email" type="text" placeholder="Your email address" class="form-control input-md">
						
					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="subject">Subject</label>
					<div class="col-md-4">
						<select id="subject" name="subject" class="form-control">
							<option value="No Subject Type">Choose One:</option>
							<option value="Suggestion">Suggestion</option>
							<option value="Question">Question</option>
						</select>
					</div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="textarea">Message</label>
					<div class="col-md-4">                     
						<textarea class="form-control" id="textarea" name="message">default text</textarea>
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="singlebutton"></label>
					<div class="col-md-4">
						<button id="send" name="send" type="submit" class="btn btn-primary">Send</button>
					</div>
				</div>

			</fieldset>
		</form>



	</div>
	@stop