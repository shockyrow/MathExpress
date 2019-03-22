@extends('layouts.app')

@section('content')
    @component('layouts.components.auth')
        <h2 class="mb-3">
            {{ __('Тасдики сурогаи электрони') }}
        </h2>

        {{ __('Ба сурогаи электрони линк равона кардаем. Лутфан ончо равед.') }}
        {{ __('Агар мактуб нагирифта бошед, лутфан') }}, <a
                href="#">{{ __('инчоро зер кунед') }}</a>.
    @endcomponent
@endsection
