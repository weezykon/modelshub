@if(count($certificates))
	@foreach($certificates as $certificate)
		<div class="row" id='pre{{$certificate->id}}'>
			<div class="col-md-12">
				<div class="col-md-2 account-icon">
					<i class="fa fa-graduation-cap"></i>
				</div>
				<div class="col-md-8">
					<b class="custom-head">{{ $certificate->cert_name }}</b><br/>
					<span class="account-details">{{ $certificate->start }} - {{ $certificate->end }}. License {{ $certificate->license }}</span><br/>
					<span>{{$certificate->authority}}</span><br/>
					@if(count($certificate->url))
						<a href="{{$certificate.url}}">see certificate</p>
					@endif
				</div>
				<div class="col-md-2">
					<i class="fa fa-trash-o text-amber cert-delete-button" cid="{{$certificate->id}}"></i>
				</div>
			</div>
		</div>	
	@endforeach
@else
  <h3 class="text-center">No Records</h3>
@endif