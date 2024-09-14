@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Artikel Terbaru</h1>
        @foreach ($articles as $article)
            <div class="article-preview">
                <h2>{{ $article->judul }}</h2>
                <p>{{ Str::limit($article->isi, 150) }}</p>
                <a href="{{ route('articles.show', $article->id) }}">Baca selengkapnya</a>
            </div>
        @endforeach
    </div>
@endsection
