@extends('template')

@section('content')


<h2>Code 1 <span id="q1" class="badge {{$badge1}}"><i class="fas fa-check"></i></span> </h2>
<form action="{{ url('quizbla') }}" method="post">
    {{ csrf_field() }}

        <div class="row">
            <div class="col">
                <input type="text" id="q1" name="q1" required
                       minlength="0" maxlength="50" size="50"  placeholder="<p>hello world</p>">
            </div>
        </div> <br>

            <h2>Code 2 <span id="q2" class="badge {{$badge2}}"><i class="fas fa-check"></i></span> </h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="q2" name="q2" required
                           minlength="0" maxlength="50" size="50" placeholder="console.log('hello world');">
                </div>
            </div> <br>

        <h2>Code 3 <span id="q3" class="badge {{$badge3}}"><i class="fas fa-check"></i></span> </h2>
        <div class="row">
            <div class="col">
                <input type="text" id="q3" name="q3" required
                       minlength="0" maxlength="50" size="50" placeholder="echo 'hello world';">
            </div>
        </div> <br>

          <h2>Code 4 <span id="q4" class="badge {{$badge4}}"><i class="fas fa-check"></i></span></h2>
          <div class="row">
              <div class="col">
                  <input type="text" id="q4" name="q4" required
                         minlength="0" maxlength="50" size="50" placeholder="print('hello world')">
              </div>
          </div> <br>

            <h2>Code 5 <span id="q4" class="badge {{$badge5}}"><i class="fas fa-check"></i></span></h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="q5" name="q5" required
                           minlength="0" maxlength="50" size="50" placeholder=" c'est trop long a écrire en Django ">
                </div>
            </div> <br>

          <br><div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-light"><i class="fas fa-laptop-code"></i></button>
                </div>
              </div>
</form> <br>




@endsection
