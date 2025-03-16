@extends('tenant.layouts.app')

@section('content')
    @if (session('error'))
        <script>
            window.onload = function() {
                alert("{{ session('error') }}");
            };
        </script>
    @endif
    <tenant-sale-opportunities-index
        :type-user="{{json_encode(Auth::user()->type)}}"
        :can-generate  = "{!! $SellerCanGenerateSaleOpportunities==false?'false':'true' !!}"
    ></tenant-sale-opportunities-index>

@endsection
