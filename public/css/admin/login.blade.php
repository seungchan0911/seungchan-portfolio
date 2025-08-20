@extends('layout')

@section('content')
    <section class="admin">
        <div class="start">
            <div class="text-group">
                <div class="title">Hello, Seungchan!</div>
                <div class="subtitle">Seungchan's management page.</div>
            </div>
        </div>
        <div class="border"></div>
        <div class="end">
            <div class="section-title">Log in</div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-title">Code</div>
                    <input type="password" name="code" required>
                </div>
                <div class="button-group">
                    <button type="submit"><div class="button">Log in</div></button>
                </div>
            </form>
        </div>
    </section>
@endsection