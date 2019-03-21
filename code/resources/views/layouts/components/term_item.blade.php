<div class="col-12">
    <div class="card bg-white shadow-sm my-3">
        <div class="card-body d-flex align-items-center">
            <div class="btn p-0">
                <h3 class="mb-0" id="heading{{$term->getId()}}" data-toggle="collapse" data-target="#collapse{{$term->getId()}}" aria-expanded="false" aria-controls="collapse{{$term->getId()}}">
                    {{$term->getTitle()}}
                </h3>
            </div>

            <div class="ml-auto">
                @auth
                    @if (Auth::user()->hasAnyRole([\App\Role::ROLE_ADMIN, \App\Role::ROLE_TEACHER]))
                        <a href="{{route('terms.edit', $term->getId())}}" class="btn btn-sm mx-1">
                            <i class="fa fa-pencil-alt"></i>
                        </a>

                        <button type="submit" form="delete{{ $term->getId() }}" href="{{ route('terms.destroy', $term->getId()) }}" class="btn btn-sm text-danger mx-1">
                            <i class="fa fa-trash"></i>
                        </button>
                    @endif
                @endauth
            </div>
        </div>

        <div class="collapse"  id="collapse{{ $term->getId() }}" aria-labelledby="heading{{ $term->getId() }}" data-parent="#list">
            <div class="card-footer">
                {{ $term->getBody() }}
            </div>
        </div>
    </div>
</div>

<form id="delete{{ $term->getId() }}" action="{{ route($term->getTable() . '.destroy', $term->getId()) }}" method="post" class="d-none">
    @csrf
    @method('delete')
</form>