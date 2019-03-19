@extends('template')

@section('content')
<h2>Indice 1</h2>
<form action="{{ url('quizbla') }}" method="post">
    {{ csrf_field() }}

        <div class="row">
            <div class="col">
                <input type="text" id="name" name="name" required
                       minlength="4" maxlength="50" size="50" placeholder="<p>hello world</p>">
            </div>
        </div>

            <h2>Indice 2</h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="name" name="name" required
                           minlength="4" maxlength="50" size="50" placeholder="console.log('hello world');">
                </div>
            </div>

        <h2>Indice 3</h2>
        <div class="row">
            <div class="col">
                <input type="text" id="name" name="name" required
                       minlength="4" maxlength="50" size="50" placeholder="echo 'hello world';">
            </div>
        </div>

          <h2>Indice 4</h2>
          <div class="row">
              <div class="col">
                  <input type="text" id="name" name="name" required
                         minlength="4" maxlength="50" size="50" placeholder="print('hello world')">
              </div>
          </div>

            <h2>Indice 5</h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="name" name="name" required
                           minlength="4" maxlength="50" size="50" placeholder=" c'est trop long a écrire en Django ">
                </div>
            </div>

              <div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-light">Valider</button>
                </div>
              </div>
</form>
@endsection
