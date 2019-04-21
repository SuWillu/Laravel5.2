@extends('layouts.master')
@section('title')
	Contact
@stop
@section('body')
	<div id="content">
		<div class="inner">
			<div id="contact" class="wrap clearFix">
				<h3>Contact me:</h3>
				@include('includes.message-block')
				<form method="POST" action="{{ route('contact_store') }}" accept-charset="UTF-8" class="contact_form">
				<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="Your Name">Your Name</label><br />
					<input required="required" class="form-control" placeholder="Your name" name="name" type="text"
					value={{ Request::old('name') }}>
				</div>
				<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
					<label for="Your E-mail Address">Your E-mail Address</label><br />
					<input required="required" class="form-control" placeholder="Your e-mail address" name="email" type="text"
					value={{ Request::old('email') }}>
				</div>
				<div class="form-group">
					<label for="Your Message">Your Message</label><br />
					<textarea required="required" class="form-control" placeholder="Your message" name="message" cols="50" 
					rows="5" value={{ Request::old('message') }}></textarea>
				</div>
				<div class="form-group">
					<label for="Website">Your Website (not required)</label><br />
					<input class="form-control" placeholder="Your Website" name="website" type="text"
					 value={{ Request::old('website') }}>
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Contact Us!">
				</div>
				<input name="_token" type="hidden" value="{{ Session::token() }}">
				<input name="bot" type="hidden" value="">
				</form>
            </div>
        </div>
	</div>
@stop
