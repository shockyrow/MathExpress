<div class="col-12 col-md-4">
    <a href="{{ route('modules.show', $module->getId()) }}" class="card text-center zoom shadow my-3">
        <div class="rounded-top" style="overflow: hidden">
            <img src="{{ Storage::url($module->getThumbnail()) }}" class="rounded-top w-100" alt=""/>
        </div>

        <div class="card-body">
            <h5 class="font-weight-bold text-dark m-0">
                {{ $module->getTitle() }}
                <div class="small">
                    {{ $module->user->getName() }}
                </div>
                <div class="small text-muted">
                    {{ \Carbon\Carbon::parse($module->created_at)->diffForHumans() }}
                </div>
            </h5>
        </div>
    </a>
</div>
