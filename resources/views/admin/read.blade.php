@extends('layout')

@section('content')
    <div class="contact-read">
        <a href="{{ route('admin.back') }}" class="back">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 20.5L1 10.5M1 10.5L11 0.5M1 10.5H21" stroke="black"/>
            </svg>
        </a>
        <div class="contacted">
            <div class="top">{{ $contact->name }}</div>
            <div class="bottom">
                <div class="email">{{ $contact->email }}</div>
                <div class="bar"></div>
                <div class="phone_number">{{ $contact->phone_number }}</div>
                <div class="bar"></div>
                <div class="created_at">{{ $contact->created_at->format('Y. m. d H:i') }}</div>
            </div>
        </div>
        <div class="content">
            {{ $contact->content }}
        </div>
    </div>
@endsection