@extends('template')

@section('content')


<h2>Code 1 <span id="q1" class="badge {{$badge1}}"><i class="fas fa-dot-circle"></i></span> </h2>
<form action="{{ url('quizbla') }}" method="post">
    {{ csrf_field() }}

        <div class="row">
            <div class="col">
                <input type="text" id="q1" name="q1" required
                       minlength="0" maxlength="50" size="50" value="{{$quizRep1}}"  placeholder="<p>hello world</p>">
            </div>
        </div> <br>

            <h2>Code 2 <span id="q2" class="badge {{$badge2}}"><i class="fas fa-dot-circle"></i></span> </h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="q2" name="q2" required
                           minlength="0" maxlength="50" size="50" value="{{$quizRep2}}" placeholder="console.log('hello world');">
                </div>
            </div> <br>

        <h2>Code 3 <span id="q3" class="badge {{$badge3}}"><i class="fas fa-dot-circle"></i></span> </h2>
        <div class="row">
            <div class="col">
                <input type="text" id="q3" name="q3" required
                       minlength="0" maxlength="50" size="50" value="{{$quizRep3}}" placeholder="echo 'hello world';">
            </div>
        </div> <br>

          <h2>Code 4 <span id="q4" class="badge {{$badge4}}"><i class="fas fa-dot-circle"></i></span></h2>
          <div class="row">
              <div class="col">
                  <input type="text" id="q4" name="q4" required
                         minlength="0" maxlength="50" size="50" value="{{$quizRep4}}" placeholder="print('hello world')">
              </div>
          </div> <br>

            <h2>Code 5 <span id="q4" class="badge {{$badge5}}"><i class="fas fa-dot-circle"></i></span></h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="q5" name="q5" required
                           minlength="0" maxlength="50" size="50" value="{{$quizRep5}}" placeholder=" c'est trop long a écrire en Django ">
                </div>
            </div> <br>

          <br><div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-light"><i class="fas fa-laptop-code"></i></button>
                </div>
              </div>
</form> <br>

<button class="btn btn-default" data-toggle="modal"  data-target=".bs-example-modal-lg">Large modal</button> </center>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>Your title goes here</h4>
        </div>
        <div class="modal-body">
         Your content goes here
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
        </div>
      </div>

    </div>
</div>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#onload').modal('show');
    });
</script>



@endsection
