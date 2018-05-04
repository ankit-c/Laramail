@extends('welcome')
@section('content')
<div class="col-md-6 pull-right">
        <div class="jumbotron">
            <header>
                <h1>Compose Mail</h1>
            </header>
            @if (Session::has('flash_message'))
            <div class="alert alert-success msg"><strong>{{ Session::get('flash_message') }}</strong></div>
            @endif

            <form action="{{route('email.send')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                  <label for="name">Fullname</label>
                  <input type="text" class="form-control" name="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                  <label for="from">Sender E-mail Address</label>
                  <input type="email" class="form-control" name="from" placeholder="From : johndoe@example.com">
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" name="subject" placeholder="This is subject...">
                </div>
                <div class="form-group">
                  <label for="to">Recipent E-mail Address</label>
                  <input type="email" class="form-control" name="to" placeholder="To : johndoe@example.com">
                </div>
                <div class="form-group">
                  <label for="msg">Message</label>
                  <textarea type="text" class="form-control" name="msgbody" row="15" placeholder="This is sample text."></textarea>
                </div>
                <div class="form-group">
                  <label for="attach_file">Attach File</label>
                  <input type="file" class="form-control" name="attach_file">
                </div>
                <div class="btn btn-group">
                  <button class="btn btn-primary" type="submit">Send</button>
                </div>
                <div class="btn btn-group">
                  <button class="btn btn-secondary" type="reset" value="Reset">Reset</button>
                </div>
            </form>
        </div>
    </div>

@endsection
