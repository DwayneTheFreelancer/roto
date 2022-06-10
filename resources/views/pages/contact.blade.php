@extends('layouts.main')

@section('title', 'Contact')

@section('content')
    <div class="conatiner mt-5 d-flex flex-column contact-page">
        <h1 style="font-family: 'Times New Roman', Times, serif" class="animate__animated animate__bounce text-center">Have Any Questions? Contact Us</h1>
        <div class="col-md-8 col-sm-12 mx-auto">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="subject">Subject</label>
                    <input class="form-control" type="text" name="subject" id="subject">
                </div>
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" name="message" id="message"></textarea>
            </form>
        </div>
    </div>
@endsection