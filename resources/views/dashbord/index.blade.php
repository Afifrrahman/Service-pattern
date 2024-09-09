@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">Welcome {{ Auth::user()->name }}, 😊</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt maxime optio recusandae consectetur soluta explicabo voluptatibus nulla eum, perferendis, culpa, earum omnis! Aperiam distinctio dolores harum eaque laborum debitis ullam!</p>
            </div>
        </section>
    </div>
</div>
@endsection
