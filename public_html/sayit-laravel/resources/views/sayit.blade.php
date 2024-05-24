@extends('layouts.main')
@section('title', 'SayIt!')
@section('buttons')
	<a class="button" href="./logout.php">Logout</a>
	<a class="button" href="./login.php">Login</a>
	<a class="button" href="./signup.php">Signup</a> 
@stop

@section('content')
	<div class="grid_6">
		<h2>What's Been Said ...</h2>
		<div id="beensaid">
				<section id="mid_2">
					<div class="content">
					<span class=" topic">Fun Stuff</span>
						<span class="who">Mary Says</span>
						So fun
					</div>
					<hr>
				</section>
				<section id="mid_3">
					<div class="content">
					<span class=" topic">Super fun</span>
						<span class="who">Mary Says</span>
						So fun
					</div>
					<hr>
				</section>
		</div>
		<button class="big-button" id="update">Update!</button>
	</div>

	<div class="grid_6">
			<h2>Say It Yourself ...</h2>
			<div id="sayit">
				<form method="POST" action="./index.php">
					<label>Topic:</label>
					<select name="existing-topic">
					<option selected=\"selected\">Fun Stuff</option>
						
					</select>
					or
					<input type="text" name="new-topic" />
					<div class="error"></div>
					<div class="clear"></div>
					<div class="error"></div>
					<div class="clear"></div>
					<label>Message (limit 500 chars)</label><br />
					<textarea name="message"></textarea>
					
					<button class="big-button">Say It!</button>
				</form>
			</div>
		</div>

@stop

