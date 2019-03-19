@extends('template')

@section('content')
<h2>Indice 1</h2>;
<form action="{{ url('quizbla') }}" method="post">
    {{ csrf_field() }}


        <div class="row">
            <div class="col">
                <input type="text" id="name" name="name" required
                       minlength="4" maxlength="8" size="10">
              <p><input type="checkbox" aria-label="Checkbox for following text input" value="q1c2"> <span>Choix 2</span></p>
              <p><input type="checkbox" aria-label="Checkbox for following text input" value="q1c3"> <span>Choix 3</span></p>
            </div>
            <div class="col">
              <p><input type="checkbox" aria-label="Checkbox for following text input" value="q1c4"> <span>Choix 4</span></p>
              <p><input type="checkbox" aria-label="Checkbox for following text input" value="q1c5"> <span>Choix 5</span></p>
              <p><input type="checkbox" aria-label="Checkbox for following text input" value="q1c6"> <span>Choix 6</span></p>

            </div>
        </div>
            <h2>Indice 2</h2>
            <div class="row">
                <div class="col">
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q2c1"> <span>Choix 1</span></p>
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q2c2"> <span>Choix 2</span></p>
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q2c3"> <span>Choix 3</span></p>
                </div>
                <div class="col">
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q2c4"> <span>Choix 4</span></p>
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q2c5"> <span>Choix 5</span></p>
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q2c6"> <span>Choix 6</span></p>

                </div>
          </div>
        <h2>Indice 3</h2>
          <div class="row">
              <div class="col">
                <p><input type="checkbox" aria-label="Checkbox for following text input" value="q3c1"> <span>Choix 1</span></p>
                <p><input type="checkbox" aria-label="Checkbox for following text input" value="q3c2"> <span>Choix 2</span></p>
                <p><input type="checkbox" aria-label="Checkbox for following text input" value="q3c3"> <span>Choix 3</span></p>
              </div>
              <div class="col">
                <p><input type="checkbox" aria-label="Checkbox for following text input" value="q3c4"> <span>Choix 4</span></p>
                <p><input type="checkbox" aria-label="Checkbox for following text input" value="q3c5"> <span>Choix 5</span></p>
                <p><input type="checkbox" aria-label="Checkbox for following text input" value="q3c6"> <span>Choix 6</span></p>
              </div>
          </div>

          <h2>Indice 4</h2>
            <div class="row">
                <div class="col">
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q4c1"> <span>Choix 1</span></p>
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q4c2"> <span>Choix 2</span></p>
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q4c3"> <span>Choix 3</span></p>
                </div>
                <div class="col">
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q4c4"> <span>Choix 4</span></p>
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q4c5"> <span>Choix 5</span></p>
                  <p><input type="checkbox" aria-label="Checkbox for following text input" value="q4c6"> <span>Choix 6</span></p>
                </div>
            </div>
            <h2>Indice 5</h2>
              <div class="row">
                  <div class="col">
                    <p><input type="checkbox" aria-label="Checkbox for following text input" value="q5c1"> <span>Choix 1</span></p>
                    <p><input type="checkbox" aria-label="Checkbox for following text input" value="q5c2"> <span>Choix 2</span></p>
                    <p><input type="checkbox" aria-label="Checkbox for following text input" value="q5c3"> <span>Choix 3</span></p>
                  </div>
                  <div class="col">
                    <p><input type="checkbox" aria-label="Checkbox for following text input" value="q5c4"> <span>Choix 4</span></p>
                    <p><input type="checkbox" aria-label="Checkbox for following text input" value="q5c5"> <span>Choix 5</span></p>
                    <p><input type="checkbox" aria-label="Checkbox for following text input" value="q5c6"> <span>Choix 6</span></p>
                  </div>
              </div>
              <div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-light">Submit</button>
                </div>

            </div>
</form>
@endsection
