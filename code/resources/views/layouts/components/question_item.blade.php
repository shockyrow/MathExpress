<div class="col-12">
    <div class="card shadow my-3">
        <a href="{{ route('questions.show', $question->getId()) }}" class="card-body text-dark" style="text-decoration: none;">
            <h5 class="col p-0 text-justify">
                {{ $question->getTitle() }}
            </h5>

            <h4 class="d-flex justify-content-end mb-0">
                <div class="badge badge-success border m-1 p-1 px-2 mx-0">
                    {{ __('Чавобхо') }} : {{ $question->answers->count() }}
                </div>

                <div class="badge badge-primary border m-1 p-1 px-2 mx-0">
                    {{ __('Дидан') }} : {{ $question->getViewCount() }}
                </div>
            </h4>
        </a>
        <h4 class="card-footer d-flex flex-wrap align-items-center py-2 mb-0">
            <div class="badge m-1 p-1 px-0 mx-0">
                {{ __('Тагхо') }} :
            </div>

            @forelse($question->tags as $tag)
                <a class="badge badge-secondary m-1 p-1" href="{{ route('questions.index', ['tag' => $tag->getName()]) }}">
                    {{ $tag->getName() }}
                </a>
            @empty
                <div class="badge font-weight-light m-1 p-1">
                    No tags found!
                </div>
            @endforelse
        </h4>
    </div>
</div>