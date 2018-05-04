@extends('welcome')
@section('title', 'Contact')
@section('content')
<div class="jumbotron">
    <h3>Contact Us</h3>
    <hr>

    <div class="row">
        <div class="col-md-6">
            @if (Session::has('flash_message'))
            <div class="alert alert-success msg"><strong>{{ Session::get('flash_message') }}</strong></div>
            @endif
            <form class="" action="{{ route('contact.store') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="name">Fullname</label>
                  <input type="text" class="form-control" name="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                  <label for="email">Your Email Address</label>
                  <input type="email" class="form-control" name="email" placeholder="johndoe@example.com">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" name="mobile" placeholder="+91-1234567890">
                </div>
                <div class="form-group">
                  <label for="msgbody">Message</label>
                  <textarea class="form-control" name="msgbody" rows="5" placeholder="Type your message for us..."></textarea>
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

</div>

@endsection
