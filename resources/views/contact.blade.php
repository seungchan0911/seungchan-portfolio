@extends('layout')

@section('content')
    <section class="contact">
        <div class="start">
            <div class="text-group">
                <div class="title">Contact Me.</div>
                <div class="subtitle">Speed in execution, precision in every detail.</div>
            </div>
            <div class="email"><a href="">imrealsexy00@gmail.com</a></div>
        </div>
        <div class="border"></div>
        <div class="end">
            <div class="section-title">contact</div>
            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-title">name</div>
                    <input type="text" name="name" required>
                </div>
                <div class="input-group">
                    <div class="input-title">email</div>
                    <input type="text" name="email" required>
                </div>
                <div class="input-group">
                    <div class="input-title">phone number</div>
                    <input type="text" name="phone_number" required>
                </div>
                <div class="input-group">
                    <div class="input-title">content</div>
                    <textarea name="content" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="button-group">
                    <button type="submit"><div class="button">contact</div></button>
                </div>
            </form>
        </div>
    </section>
    <section class="capabilities">
        <div class="section-title">capabilities</div>
        <div class="table">
            <div class="table-group">
                <div class="h">design</div>
                <div class="h">code</div>
                <div class="r">You get a clean interface, built to function without distraction.</div>
                <div class="r">You can expect solid structure, written to work without surprises.</div>
            </div>
            <div class="table-group">
                <div class="h">speed</div>
                <div class="h">accuracy</div>
                <div class="r">You send a message, I respond and deliver without delay.</div>
                <div class="r">You receive results as intended, with no detail left behind.</div>
            </div>
        </div>
    </section>
@endsection