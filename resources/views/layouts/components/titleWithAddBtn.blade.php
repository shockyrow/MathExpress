<div class="row mb-3">
    <div class="col">
        <h2>
            {{ $slot }}
            <a
                    class="btn btn-primary float-right"
                    href="{{ route('questions.create') }}"
            >
                {{ $btn_text }}
            </a>
        </h2>
    </div>
</div>