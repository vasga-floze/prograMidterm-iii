@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><p class="text-center pt-2">{{ __('Has iniciado sesión') }} {{ auth()->user()->name }}!</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <!--Block One-->
                <div class="card-group">
                    <div class="card bg-light mr-4 ml-4">
                        <img src="{{ asset('images/logoTalkfood.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Recipe Name</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card bg-light ml-1 mr-4">
                        <img src="{{ asset('images/logoTalkfood.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Recipe Name</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <!--Block Two-->
                <div class="card-group mt-5 mb-5">
                    <div class="card bg-light mr-4 ml-4">
                        <img src="{{ asset('images/logoTalkfood.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Recipe Name</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card bg-light ml-1 mr-4">
                        <img src="{{ asset('images/logoTalkfood.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Recipe Name</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
