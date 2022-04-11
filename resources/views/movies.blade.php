@extends('partials.layout')
@section('content')

    <section class="container mt-5">
        <p class="lead text-center text-primary">Fastlance Cinema Dashboard</p>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                welcome to movies
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{asset('js/movie.js')}}"></script>
@endpush