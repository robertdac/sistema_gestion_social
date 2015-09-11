
@extends('app')
@section('content')

	<select id="name" >
		<option value="">select all</option>
		<option value="1">Text 1</option>
		<option value="2">Text 2</option>
		<option value="3">Text 3</option>
	</select>

	<select id="name2" >
		<option value="">select all</option>
		<option value="1">Text 1</option>
		<option value="2">Text 2</option>
		<option value="3">Text 3</option>
	</select>


	<script>

		$(document).ready(function () {

		$('#name2').change(function(){
			$('#name').prop('selectedIndex',0);
		});


		$('#name').change(function(){
			$('#name2').prop('selectedIndex',0);
		});

});
	</script>


{{--	{!! Form::open()   !!}

	<select name="sapo[]" class="selectpicker" multiple>
		<option value="0">Mustard</option>
		<option>Ketchup</option>
		<option>Relish</option>
	</select>


	{!! Form::submit('Registrar',['class'=>'btn btn-primary']);   !!}







	{!! Form::close()   !!}--}}




{{--<div class="container">


	<!-- Static navbar -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">

					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DEFINICIONES <span class="caret"></span></a>

						<ul class="dropdown-menu" role="menu">
								<li class="dropdown-submenu">
								<a href="#">Unidades Administrativas</a>
								<ul class="dropdown-menu">
									<li><a href="#">Secretaria</a></li>
									<li><a href="#">consulta</a></li>
								</ul>
							</li>

							<li class="dropdown-submenu">
								<a href="#">Conceptos</a>
								<ul class="dropdown-menu">
									<li><a href="#">Discapacidades</a></li>
									<li><a href="#">Fuentes de Recepcion</a></li>
								</ul>
							</li>




						</ul>
					</li>






				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
					<li><a href="../navbar-static-top/">Static top</a></li>
					<li><a href="../navbar-fixed-top/">Fixed top</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>







	<div class="row">
		<h2>Multi level dropdown menu in Bootstrap 3</h2>
		<hr>
		<div class="dropdown">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				Dropdown <span class="caret"></span>
			</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li><a href="#">Some action</a></li>
				<li><a href="#">Some other action</a></li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Hover me for more options</a>
					<ul class="dropdown-menu">
						<li><a tabindex="-1" href="#">Second level</a></li>
						<li class="dropdown-submenu">
							<a href="#">Even More..</a>
							<ul class="dropdown-menu">
								<li><a href="#">3rd level</a></li>
								<li><a href="#">3rd level</a></li>
							</ul>
						</li>
						<li><a href="#">Second level</a></li>
						<li><a href="#">Second level</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>

	<style>


		.dropdown-submenu {
			position: relative;
		}

		.dropdown-submenu>.dropdown-menu {
			top: 0;
			left: 100%;
			margin-top: -6px;
			margin-left: -1px;
			-webkit-border-radius: 0 6px 6px 6px;
			-moz-border-radius: 0 6px 6px;
			border-radius: 0 6px 6px 6px;
		}

		.dropdown-submenu:hover>.dropdown-menu {
			display: block;
		}

		.dropdown-submenu>a:after {
			display: block;
			content: " ";
			float: right;
			width: 0;
			height: 0;
			border-color: transparent;
			border-style: solid;
			border-width: 5px 0 5px 5px;
			border-left-color: #ccc;
			margin-top: 5px;
			margin-right: -10px;
		}

		.dropdown-submenu:hover>a:after {
			border-left-color: #fff;
		}

		.dropdown-submenu.pull-left {
			float: none;
		}

		.dropdown-submenu.pull-left>.dropdown-menu {
			left: -100%;
			margin-left: 10px;
			-webkit-border-radius: 6px 0 6px 6px;
			-moz-border-radius: 6px 0 6px 6px;
			border-radius: 6px 0 6px 6px;
		}




	</style>--}}

<div role="tabpanel">

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
		<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="home">

			Robertdac exclusive mix !

		</div>
		<div role="tabpanel" class="tab-pane" id="profile">....	</div>
		<div role="tabpanel" class="tab-pane" id="messages">...</div>
		<div role="tabpanel" class="tab-pane" id="settings">...</div>
	</div>

</div>




@endsection



