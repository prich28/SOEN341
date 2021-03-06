@extends('layouts.app')

@section('extra-content')
<!-- FIRST WIZARD -->
              <div class="panel panel-default">
                  <div class="panel-heading">Wizard</div>

                  <div class="panel-body">

                    {{-- Message --}}
                    <div class="well">
                      Welcome! Before we start, I need to know a little more about you.
                    </div>

                    {{-- error --}}
                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif

                    {{-- Content --}}
                    <form class="" action="/wizard/title" method="post">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="role">Are you a...</label>
                        <select class="form-control" name="title">
                          <option value="student">Student</option>
                          <option value="ta">Teacher Assistant</option>
                          <option value="teacher">Teacher</option>
                        </select>
                      </div>
                      <button type="submit" name="button" value="submit">Next</button>
                    </form>
                    {{-- End Content--}}

                  </div>
              </div>
<!-- END FIRST WIZARD -->
      <script type="text/javascript" src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery.steps.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/wizard.js') }}"></script>

@endsection
@include('common')
