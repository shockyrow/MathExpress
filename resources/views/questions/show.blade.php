@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>How to solve this problem?</h2>
            </div>
            <div class="col  d-flex justify-content-end">
                <a
                 class="btn btn-primary"
                 href="{{ route('questions.create') }}">
                     Ask Question
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a magna risus. Praesent
                    lobortis tellus fermentum nisl condimentum mollis. Proin at bibendum eros, nec sollicitudin
                    erat. Ut non bibendum nisl. Fusce lacinia lacus quis mi tempus blandit. Proin vitae magna
                    eget dui elementum pharetra. Etiam ut volutpat diam. Aenean mattis sapien vel felis
                    accumsan, eget tristique mi consequat. Nulla nec odio dolor. Phasellus vehicula sodales
                    justo, id faucibus nulla cursus at. Maecenas laoreet et purus eget scelerisque. Suspendisse
                    aliquam iaculis metus ac lacinia. Praesent sed venenatis erat. Mauris et purus scelerisque,
                    vulputate metus ac, lacinia dui. Vivamus vitae suscipit nulla. Integer rutrum et mauris quis
                    consectetur.
                </p>
                <div class="text-center">
                    <img src="{{ asset('img/math-example-1.png') }}"
                         class="rounded my-3 shadow-sm border p-2"
                         style="max-width: 100%"
                    />
                </div>
                <p>
                    Phasellus urna neque, molestie eget lobortis quis, imperdiet id justo. Pellentesque nisi
                    arcu, maximus et quam eu, dignissim efficitur mauris. Proin tincidunt nisi ligula, nec
                    luctus erat eleifend in. Sed vitae ligula sodales, semper augue vel, congue nunc. Ut eu
                    magna et nibh posuere auctor ultricies id tellus. Nulla efficitur quis dui sit amet
                    eleifend. Donec nulla velit, euismod a lobortis a, consequat pretium nisi.
                </p>
                <hr>
            </div>
            <div class="col-12 mt-5">
                <form>
                    <div class="form-group">
                        <label for="questionDescriptionInput">Description</label>
                        <textarea class="form-control" id="questionDescriptionInput" rows="5" placeholder="Give more description about question"></textarea>
                    </div>

                    <div class="mb-5">
                        <h4>Above input should be here.</h4>
                    </div>
                    <button
                     type="button" 
                     class="btn btn-primary mt-5"
                     href="{{ route('questions.create') }}">
                         Post Your Answer
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
