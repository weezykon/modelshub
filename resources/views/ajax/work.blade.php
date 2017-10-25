@if(count($works))	
	@foreach($works as $work)
	<div class="row" id='pre{{$work->id}}'>
		<div class="col-md-12">
			<div class="col-md-2 account-icon">
				<i class="fa fa-building-o"></i>
			</div>
			<div class="col-md-8">
				<b class="custom-head">{{ $work->title }}</b><br/>
				<span class="account-details">{{ $work->company }}</span><br/>
				<span>{{$work->start}} -  {{$work->end}}</span><br/>
				<p>{{$work->location}}</p><br/>
				<span style="margin-top: 10px;">{{$work->description}}</span>
			</div>
			<div class="col-md-2">
				<i class="fa fa-trash-o text-amber work-delete-button" wid="{{$work->id}}"></i>
			</div>
		</div>
	</div>
	@endforeach
@else
  <h3 class="text-center">No Records</h3>
@endif