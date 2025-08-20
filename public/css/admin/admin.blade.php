@extends('layout')

@section('content')
    <div class="content">
        @foreach($contacts as $contact)
            <ul class="contacts">
                <li>성함: {{ $contact->name }}</li>
                <li>이메일: {{ $contact->email }}</li>
                <li>전화번호: {{ $contact->phone_number }}</li>
                <li>의뢰 내용: {{ $contact->content }}</li>
                <li>날짜: {{ $contact->created_at }}</li>
            </ul>
        @endforeach
    </div>
@endsection