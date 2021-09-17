@extends('layouts.checkout')

@section('title')
    succes
@endsection

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="frontend/images/ic_mail.png" alt="">
            <h1>Yay! Success</h1>
            <p>We’ve sent you email for trip instruction 
                please read it as well</p>
            <a href="{{ Route('home') }}" class="btn btn-homepage my-3 px-5">Home Page</a>
        </div>
    </div>
</main>
@endsection