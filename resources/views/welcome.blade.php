@extends('layouts.app')

@section('content')
    <div class="p-3 text-center">
        <img src="{{asset('img/logo.png')}}"
             class="w-50"
        />
    </div>

    <div class="d-flex justify-content-around align-items-stretch row">
        <div class="col-12 col-lg-4 my-3">
            <div class="card h-100">
                <div class="card-header font-weight-bold"
                     style="padding-left: 64px;"
                >
                    <div class="d-inline-flex justify-content-center align-items-center position-absolute bg-primary text-light p-2 rounded border shadow-sm"
                         style="top:-8px; left: 8px; width: 48px; height: 48px;"
                    >
                        <i class="fas fa-graduation-cap fa-lg"
                        ></i>
                    </div>
                    Updating Lectures
                </div>
                <div class="card-body text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin scelerisque ante id nisl tempor, non
                    rutrum metus consectetur. Mauris at mauris id massa fermentum viverra et eu ligula. Praesent posuere
                    nunc elit, sed laoreet metus blandit sit amet. Nunc pretium venenatis massa, facilisis mattis nibh
                    facilisis vel. Sed ut pharetra est. Nulla facilisi. Quisque luctus, mi dictum posuere rutrum, tellus
                    arcu fermentum lacus, id molestie nunc turpis sed lorem. Praesent ac pulvinar nisi.
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 my-3">
            <div class="card h-100">
                <div class="card-header font-weight-bold"
                     style="padding-left: 64px;"
                >
                    <div class="d-inline-flex justify-content-center align-items-center position-absolute bg-primary text-light p-2 rounded border shadow-sm"
                         style="top:-8px; left: 8px; width: 48px; height: 48px;"
                    >
                        <i class="fas fa-user-tie fa-lg"
                        ></i>
                    </div>
                    Updating Lectures
                </div>
                <div class="card-body text-justify">
                    Phasellus lobortis magna volutpat risus laoreet, non ultricies leo viverra. Donec mattis dolor at
                    justo egestas cursus. Fusce molestie dui felis, in elementum velit convallis quis. Morbi rhoncus
                    libero eu felis pellentesque consequat. Proin ac efficitur sem. Etiam pretium venenatis
                    pellentesque. Nulla ut libero ligula. Fusce laoreet lectus purus, vulputate scelerisque sapien
                    blandit accumsan. Sed pulvinar, dui ac fringilla vehicula, nisi neque rhoncus nibh, a dictum felis
                    magna non magna. Aenean molestie ultrices metus vitae fringilla. Integer consectetur faucibus odio,
                    sed sagittis neque malesuada quis. Etiam eget lacus at ipsum tempus lobortis at id quam. Aliquam
                    volutpat elementum elit. Fusce eget pellentesque est. Donec condimentum augue ex, vitae volutpat
                    sapien volutpat ac.
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 my-3">
            <div class="card h-100">
                <div class="card-header font-weight-bold"
                     style="padding-left: 64px;"
                >
                    <div class="d-inline-flex justify-content-center align-items-center position-absolute bg-primary text-light p-2 rounded border shadow-sm"
                         style="top:-8px; left: 8px; width: 48px; height: 48px;"
                    >
                        <i class="fas fa-mouse-pointer fa-lg"
                        ></i>
                    </div>
                    Updating Lectures
                </div>
                <div class="card-body text-justify">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam non
                    ligula magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    Curae; Duis nec sapien at libero fringilla vulputate at non nisl. Nam non porttitor tellus, ac
                    tincidunt eros. In vitae libero dignissim, feugiat ante sit amet, finibus eros. Nulla commodo
                    posuere dui, quis varius leo sagittis eget. Etiam semper, velit et eleifend sollicitudin, est velit
                    faucibus nisl, et rutrum ligula tellus eu urna. Nulla facilisi. Sed nunc nisi, auctor in mauris
                    consequat, rhoncus cursus velit.
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around align-items-stretch row">
        <div class="col-12 col-md-10 my-3 text-center py-5">
            <h3>
                Our portal is used by <strong class="text-primary">1,000,000+</strong> users around the globe.
            </h3>
            <h5>
                Donec tempus dignissim dui, at laoreet urna. Nam vel odio ligula. Nam faucibus ligula commodo lectus
                elementum, tincidunt consectetur elit porttitor. Nunc finibus pharetra massa, id bibendum sem fermentum
                iaculis. Nam gravida elementum orci, ac consectetur lectus interdum vitae. Nam et vestibulum tellus, ac
                volutpat libero. Duis porta odio ex, at molestie purus semper ut.
            </h5>
        </div>
    </div>

    <div class="d-flex justify-content-around align-items-stretch row">
        <div class="col-12 col-sm-6 col-md-3 my-3 text-center">
            <div class="card bg-dark text-white shadow-sm">
                <div class="card-body">
                    <h2 class="font-weight-bold">
                        20,000
                    </h2>
                    <h4>
                        Students
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 my-3 text-center">
            <div class="card bg-dark text-white shadow-sm">
                <div class="card-body">
                    <h2 class="font-weight-bold">
                        124
                    </h2>
                    <h4>
                        Mentors
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 my-3 text-center">
            <div class="card bg-dark text-white shadow-sm">
                <div class="card-body">
                    <h2 class="font-weight-bold">
                        600
                    </h2>
                    <h4>
                        Lectures
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 my-3 text-center">
            <div class="card bg-dark text-white shadow-sm">
                <div class="card-body">
                    <h2 class="font-weight-bold">
                        150
                    </h2>
                    <h4>
                        Docs
                    </h4>
                </div>
            </div>
        </div>
    </div>
@endsection
