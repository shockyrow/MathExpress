<div class="container">
    <div class="my-3">
        <div class="d-flex flex-wrap justify-content-center">
            @foreach (['А', 'Б', 'В', 'Г','Ғ', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Ӣ', 'Й', 'К', 'Қ', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ӯ', 'Ф', 'Х', 'Ҳ', 'Ч', 'Ҷ', 'Ш', 'ъ', 'Э', 'Ю', 'Я'] as $letter)
                <a class="btn btn-secondary m-1 shadow" href="{{route('terms.index', ['q' => $letter, 'searchType' => 1])}}" style="width: 48px;">
                    {{ $letter }}
                </a>
            @endforeach
        </div>
    </div>
</div>