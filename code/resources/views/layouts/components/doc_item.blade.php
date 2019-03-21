<div class="col-12">
    <a href="{{route("docs.show", $doc->getId())}}" class="p-0 card shadow my-3 bg-light text-dark doc-item">
        <div class="card-body">
            <div class="row d-flex flex-wrap justify-content-center">
                <div class="mx-2 my-0" style="width: 160px;">
                    <img src="{{ Storage::url($doc->getThumbnail()) }}" class="rounded shadow-sm w-100"/>
                </div>

                <div class="col-sm">
                    <h4>
                        {{ $doc->getTitle() }}
                        <div class="small">
                            by {{ $doc->getAuthor() }}
                        </div>
                    </h4>
                    <hr>
                    <div>
                    </div>
                    <p class="text-justify">
                        {{ $doc->getDescription() }}
                    </p>
                </div>
            </div>
        </div>
    </a>
</div>