@extends('partials.layout')
@section('content')

    <section class="container mt-5">
        <p class="lead text-center text-primary">Fastlane Minimalist Cinema and Movie Platform</p>
        <nav class="text-center">
            @if(!auth()->user())
                <a href="{{route('user.auth')}}">Login</a>
            @else
                <a href="{{route('get.dashboard')}}" class="href">Dashboard</a>
            @endif

        </nav>
        <div class="row mt-5">
            
            @foreach($movies as $mv)
                <div class="col-md-4">
                    <div class="card card-body">
                        <div class="card-image">
                            <img src="{{asset('poster/'.$mv->movie_poster)}}"  class="img-fluid" style='width:100%;' alt="">
                        </div>
                        <div class="misc my-2">
                            Cinema Location : {{$mv->cinema->location}} <br>
                            Time : {{$mv->showtime}}
                        </div>
                        <div class="card-text">
                            <strong>Synopsis</strong>
                            <p class="lead">{{substr($mv->synopsis, 0, 100)}} </p>
                            <button class="btn btn-block btn-danger">Get ticket</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{asset('js/movie.js')}}"></script>
@endpush