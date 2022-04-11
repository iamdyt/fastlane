@extends('partials.layout')
@section('content')

    <section class="container mt-5">
        <p class="lead text-center text-primary">Welcome,  {{auth()->user()->email}}</p>
        <p class="lead text-center text-primary">Fastlance Cinema Dashboard</p>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <span class="text-danger d-block my-1">Please fill in all fields *</span>
                <div class="card card-body">
                    <form id="addmovie">
                        <div class="title">
                            <input type="text" name="title" required placeholder="Movie title" id="" class="form-control">
                        </div>

                        <div class="synopsis my-2">
                            <textarea name="synopsis" id="" required cols="5" placeholder="Movie storyline" rows="2" class="form-control"></textarea>
                        </div>

                        <div class="showtime">
                            <input type="text" name="showtime" required placeholder="Movieshow time interval" id="" class="form-control">
                        </div>

                        <div class="cinema my-2">
                            <select name="cinema_id" id="" required class="form-control">
                                @foreach($cinema as $cin)
                                    <option value="{{$cin->id}}">{{$cin->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="status">
                            <select name="status" id="" required class="form-control">
                                <option value="published">Published</option>
                                <option value="private">Private</option>
                            </select>
                        </div>

                        <div class="image">
                            <label for="poster" class="my-1 bg-secondary btn d-block"> Movie Poster</label>
                            <input type="file" name="poster"  class="d-none"  accept="image/*" required  id="poster">
                        </div>

                        <div class="submitmovie mt-2">
                            <button class="btn btn-block btn-primary">Add Movie</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{asset('js/movie.js')}}"></script>
@endpush