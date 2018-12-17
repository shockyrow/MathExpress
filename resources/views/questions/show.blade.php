@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>Масохати секунчаро читавр меёбед?</h2>
            </div>
            <div class="col  d-flex justify-content-end">
                <a
                 class="btn btn-primary"
                 href="{{ route('questions.create') }}">
                     Савоми нав
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад. Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад.
                </p>
                <div class="text-center">
                    <img src="{{ asset('img/math-example-1.png') }}"
                         class="rounded my-3 shadow-sm border p-2"
                         style="max-width: 100%"
                    />
                </div>
                <p>
                    Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад. Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад.
                </p>
                <hr>
            </div>
            <div class="col-12 mt-5">
                <form>
                    <div class="form-group">
                        <label for="answerInput">Чавоби шумо</label>
                        <textarea class="form-control" id="answerInput" rows="5" placeholder="Чавобатонро дар инчо набисед."></textarea>
                    </div>

                    <div class="mb-5">
                        <h4>Above input should be here.</h4>
                    </div>
                    <button
                     type="button" 
                     class="btn btn-primary mt-5"
                     href="{{ route('questions.create') }}">
                         Чавобро боргузоред.
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
