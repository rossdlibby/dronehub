@include('includes.head')
<div class="container">
	<br><br><br><br><br><br><br>
	<div class="row text-center">
		<h1>FIND DRONE PILOTS</h1>
	</div>
	<div class="row text-center">
		<p class="h5 fg-scheme-white">SEARCH FOR DRONE PILOTS IN YOUR AREA</p>
	</div>
	<br><br><br><br>
	<div class="row">
		{{ Form::open(['url' => 'pilots', 'class' => 'col-md-10 col-md-offset-1 text-center form-horizontal']) }}
			<div class="row">
				<div class="col-lg-3">
					{{ Form::text('keywords', null, ['placeholder' => 'Keywords', 'class' => 'form-control']) }}
				</div>
				{{ Form::hidden('map', null, ['id' => 'mapholder']) }}
				<div class="col-lg-3">
					<div class="input-group">
						{{ Form::text('location', null, ['placeholder' => 'Location', 'class' => 'form-control', 'id' => 'location']) }}
						<span class="input-group-addon"><a href="#" class="fg-scheme-gray" id="findLocation"><i class="fa fa-location-arrow" id="locIcon"></i></a></span>
					</div>
				</div>
				<div class="col-lg-3">
					{{ Form::select('keywords', ['0' => 'Any category', '1' => 'Drone Pilot', '2' => 'Drone Repair Services', '3' => 'Photo &amp; Video Editing Services'], null, ['class' => 'form-control']) }}
				</div>
				<div class="col-lg-3">
					{{ Form::submit('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search Listings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', ['class' => 'btn btn-info']) }}
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>
@include('includes.foot')