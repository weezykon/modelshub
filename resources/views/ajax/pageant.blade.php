@if(count($pageants))
	@foreach($pageants as $pageant)
	<div class="row" id='pre{{$pageant->id}}'>
		<div class="col-md-12">
			<div class="col-md-2 account-icon">
				<i class="fa fa-graduation-cap"></i>
			</div>
			<div class="col-md-8">
				<b class="custom-head">{{ $pageant->name }}</b><br/>
				<span class="account-details">{{ $pageant->start }} - {{ $pageant->end }}</span><br/>
				@if(count($pageant->url))
					<a href="{{$pageant.url}}">View</p>
				@endif
			</div>
			<div class="col-md-2">
				<i class="fa fa-trash-o text-amber pageant-delete-button" pid="{{$pageant->id}}"></i>
			</div>
		</div>
	</div>
	@endforeach
@else
  <h3 class="text-center">No Records</h3>
@endif