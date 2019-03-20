<div class="col-12">
    <div class="card bg-white shadow-sm my-3">
        <div class="btn card-body d-flex" id="heading{{$term->getId()}}" data-toggle="collapse" data-target="#collapse{{$term->getId()}}" aria-expanded="false" aria-controls="collapse{{$term->getId()}}">
            <h3 class="mb-0">
                {{$term->getTitle()}}
            </h3>

            <div class="ml-auto">
                @auth
                    @if (Auth::user()->hasAnyRole([\App\Role::ROLE_ADMIN, \App\Role::ROLE_TEACHER]))
                        <a href="{{route('terms.edit', $term->getId())}}" class="btn btn-sm mx-1">
                            <i class="fa fa-pencil-alt"></i>
                        </a>

                        <a href="{{route('terms.destroy', $term->getId())}}" class="btn btn-sm text-danger mx-1">
                            <i class="fa fa-trash"></i>
                        </a>
                    @endif
                @endauth
            </div>
        </div>

        <div class="collapse"  id="collapse{{$term->getId()}}" aria-labelledby="heading{{$term->getId()}}" data-parent="#list">
            <div class="card-footer">
                {{$term->getBody()}}
            </div>
        </div>
    </div>
</div>