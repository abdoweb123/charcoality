<form action="{{ route('client.donation', $Donation) }}" method="post" style="display: contents">
    @csrf
    <div class="card" style="border-radius: 25px;">
        <img class="card-img-top" src="{{ asset($Donation->image) }}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{ $Donation->title() }}</h5>
        <small class="card-text text-muted"><i class="fa-solid fa-location-dot mx-1"></i>{!! $Donation['location_'.lang()] !!}</small>
        <div class="row p-0">
            <div class="col-4 text-center">
                <p>@lang('trans.amount')</p>
                <p>{{ $Donation->target_donations }}</p>
                <p>BHD</p>
            </div>
            <div class="col-4 text-center">
                <p>@lang('trans.beneficiaries_no')</p>
                <p>{{ $Donation->target_beneficiaries }}</p>
                <p>@lang('trans.beneficiary')</p>
            </div>
            <div class="col-4 text-center">
                <p>@lang('trans.target')</p>
                <img style="height: 40px;" src="{{ asset($Donation->Beneficiary->image) }}" alt="{{ $Donation->Beneficiary->title() }}">
                <p>{{ $Donation->Beneficiary->title() }}</p>
            </div>
        </div>
        @php($progress =  amount_format($Donation->paid / $Donation->target_donations * 100 ) )
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated main_bg" role="progressbar" style="width: {{ $progress > $progress ? $progress : 20 }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">{{ $progress }}%</div>
        </div>
        <hr>
        <div class="row">
            <div class="col-8 m-auto">@lang('trans.amount')</div>
            <div class="col-4"><input required type="number" min="0" step="0.01" class="form-control py-1" id="amount" name="amount" value="0.01"></div>
        </div>
        <div class="text-center my-3">
            <button type="submit" class="main_btn rounded border-0" style="padding: 11px 65px;"> @lang('trans.donation') </button>
        </div>
        </div>
    </div>
</form>