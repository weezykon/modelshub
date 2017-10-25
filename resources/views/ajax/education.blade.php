@if(count($educations))	
	@foreach($educations as $education)
	<div class="row" id='pre{{$education->id}}'>
		<div class="col-md-12">
			<div class="col-md-2 account-icon">
				<i class="fa fa-university"></i>
			</div>
			<div class="col-md-8">
				<b class="custom-head">{{ $education->school }}</b><br/>
				<span class="account-details">{{ $education->degree }},{{ $education->field }},{{ $education->grade }}</span><br/>
				<p>{{$education->from}} -  {{$education->to}}</p><br/>
				<span style="padding-top: 10px;">{{$education->description}}</p>
			</div>
			<div class="col-md-2">
				<i class="fa fa-trash-o text-amber education-delete-button" eid="{{$education->id}}"></i>
			</div>
		</div>
	</div>
	@endforeach
@else
  <h3 class="text-center">No Records</h3>
@endif