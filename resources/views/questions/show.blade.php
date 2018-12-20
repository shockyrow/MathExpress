@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h2>
                    Масохати секунчаро читавр меёбед?
                    <a
                            class="btn btn-primary float-right"
                            href="{{ route('questions.create') }}">
                        Савоми нав
                    </a>
                </h2>
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
                <div class="text-right">
                    <small>Аз тарафи <strong>Али Валиев</strong> пурсида шуд</small>
                </div>
                <hr>
            </div>
            <div class="col-12">
                <label><h3>4 чавоб</h3></label>
                <hr>
                <div>
                    <p>
                        Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад. Мувофиқат функсионалӣ, ё ки функсия номида мешавад, агар графики он ҷуфтҳое, ки координатаи якумашон якхела буда, координатаи дуюмашон гуногун бошад, надошта бошад.
                    </p>
                </div>
            </div>
            <div class="col-12 mt-5">
                <form>
                    <div class="form-group">
                        <label for="answerInput"><h3>Чавоби шумо</h3></label>
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
