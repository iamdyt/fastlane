@extends('partials.layout')
@section('content')

    <section class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 mt-5">
                    <p class="lead text-center text-danger">Fastlane Cinema Auth Page</p>
                <div class="card card-body">
                    <form id="authform">
                        @csrf
                        <div class="form-email my-2">
                            <input type="email" name="email" placeholder="email" required id="" class="form-control">
                        </div>

                        <div class="form-password">
                            <input type="password" name="password" placeholder="****" required id="" class="form-control">
                        </div>

                        <div class="form button my-2">
                            <button class="btn btn-success btn-block">
                                submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{asset('js/userauth.js')}}"></script>
@endpush