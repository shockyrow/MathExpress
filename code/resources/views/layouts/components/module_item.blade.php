<div class="col-12 col-md-4">
    <a href="{{ route('modules.show', $module->getId()) }}" class="card text-center zoom shadow my-3">
        <div class="rounded-top" style="overflow: hidden">
            <img src="{{ Storage::url($module->getThumbnail()) }}" class="rounded-top w-100" alt=""/>
        </div>

        <div class="card-body">
            <h5 class="font-weight-bold text-dark m-0">
                {{ $module -> getTitle() }}
                <div class="small">
                    {{ $module->getProfessor() }}
                </div>
                <div class="small text-muted">
                    {{ \Carbon\Carbon::parse($module->created_at)->diffForHumans() }}
                </div>
            </h5>
        </div>
    </a>
</div>

{{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
    <div class="single-module-item">
        <div class="module-thumb">
            <a href="{{ route('modules.show', $module->getId()) }}">
                <img src="{{ Storage::url($module->getThumbnail()) }}" alt=""/>
            </a>
        </div>
        <div class="mx-4 my-4">
            <h4><strong>{{$module -> getTitle()}}</strong></h4>
            <div class="d-flex my-2">
                <p>{{ \Carbon\Carbon::parse($module->created_at)->diffForHumans() }}</p>
                <p class="mx-3">{{$module -> getProfessor()}}</p>
            </div>
        </div>
    </div>
</div>--}}