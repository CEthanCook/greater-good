@extends('layouts.app')

@section('content')
<html>
	<head>
		<link rel="stylesheet" href="/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<?php

				$numEvents = 1;

				while($numEvents < 5) {
					echo
					"<div class='card text-center'>
					  <div class='card-block'>
						<h4 class='card-title'>You have an upcoming market shift</h4>
						<p class='card-text'>In $numEvents days at $numEvents o clock.</p>
						<a class='btn btn-danger'>Request Off</a>
					  </div>
					</div>";
					$numEvents++;
				}

			?>
		</div
	</body>
</html>
@endsection		