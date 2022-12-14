@extends('layouts.app')

@section('content')
<div class="row justify-content-center">

	<div class="col-12 col-md-12">

		<div class="card">
			<div class="card-header">
				<div class="col">
					<h5><a href="#" class="header-pretitle">{{ $info->name }} Method</a></h5>


				</div>
			</div>
			<div class="card-body">
				<form method="post" class="basicform" action="{{ route('seller.payment.update',$info->active_getway->id) }}">
					@csrf

					<div class="card-body">
						<div class="form-group">
							<label>Display name at checkout</label>
							<input class="form-control" autofocus="" required="" name="name" type="text" value="{{ $data->title ?? '' }}">
							<small class="form-text text-muted">Customers will see this when checking out.</small>
						</div>


						<div class="form-group">
							<label>Public Key</label>
							<input class="form-control" required="" value="{{ $data->public_key }}" name="public_key" required="" type="text">
						</div>

						<div class="form-group">
							<label>Access Token</label>
							<input class="form-control" required="" value="{{ $data->access_token }}" name="access_token" required="" type="text">
						</div>
						<div class="form-group">
							<div class="custom-control custom-switch">
								<input id="test" class="custom-control-input" name="env" type="checkbox" value="sandbox" @if($data->env=='sandbox') checked="" @endif>
								<label class="custom-control-label" for="test">Test mode (Developer only)</label>
								<small class="form-text text-muted">Test your {{ $info->name }}  setup by simulating successful and failed transactions.</small>
							</div>
						</div>



						<div class="form-group">
						<div class="custom-control custom-switch">
							<input id="enabled" class="custom-control-input" name="status" type="checkbox" value="1" @if($info->active_getway->status==1) checked="" @endif>
							<label class="custom-control-label" for="enabled">Enable</label>
						</div>
					</div>
					<div class="card-footer clearfix text-muted">

						<div class="float-left clear-both">
							<a class="btn btn-white" href="{{ route('seller.settings.show','payment') }}">Cancel</a>
							<button type="submit" class="btn btn-primary basicbtn">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
@push('js')
<script type="text/javascript" src="{{ asset('assets/js/form.js') }}"></script>
@endpush
