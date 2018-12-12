@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">Title goes here!</h3>
                    </div>

                    <div class="card-body text-justify">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a magna risus. Praesent
                            lobortis tellus fermentum nisl condimentum mollis. Proin at bibendum eros, nec sollicitudin
                            erat. Ut non bibendum nisl. Fusce lacinia lacus quis mi tempus blandit. Proin vitae magna
                            eget dui elementum pharetra. Etiam ut volutpat diam. Aenean mattis sapien vel felis
                            accumsan, eget tristique mi consequat. Nulla nec odio dolor. Phasellus vehicula sodales
                            justo, id faucibus nulla cursus at. Maecenas laoreet et purus eget scelerisque. Suspendisse
                            aliquam iaculis metus ac lacinia. Praesent sed venenatis erat. Mauris et purus scelerisque,
                            vulputate metus ac, lacinia dui. Vivamus vitae suscipit nulla. Integer rutrum et mauris quis
                            consectetur.
                        </p>
                        <div class="text-center">
                            <img src="{{ asset('img/math-example-1.png') }}"
                                 class="rounded my-3 shadow-sm border p-2"
                                 style="max-width: 100%"
                            />
                        </div>
                        <p>
                            Morbi bibendum sollicitudin fringilla. Phasellus et mauris vel leo mollis ultrices. Aenean
                            aliquam nibh ut metus congue suscipit. Aliquam auctor nunc quis turpis blandit, a facilisis
                            sapien vulputate. Vestibulum vehicula justo ut sapien porta, id imperdiet felis ultricies.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. Cras accumsan erat non efficitur imperdiet. Nullam lacinia urna risus, et rhoncus
                            lorem consectetur vel.
                        </p>
                        <div class="text-center">
                            <img src="{{ asset('img/math-example-2.png') }}"
                                 class="rounded my-3 shadow-sm border p-2"
                                 style="max-width: 100%"
                            />
                        </div>
                        <p>
                            Praesent massa turpis, suscipit vel vehicula in, laoreet eu diam. Donec ut ipsum sed enim
                            volutpat rutrum. Donec gravida tortor augue, eget porttitor ex ultrices accumsan. Aenean
                            varius id sapien ac vulputate. Etiam nisl sapien, commodo quis tristique quis, condimentum
                            nec mi. Aliquam mauris lectus, commodo ut mi non, suscipit egestas elit. Nullam rutrum elit
                            rhoncus nunc consequat, eu fringilla sapien tempor. Maecenas laoreet felis id luctus
                            accumsan. Pellentesque lacinia ex non vestibulum mollis. Suspendisse ullamcorper tortor et
                            ullamcorper dignissim. Sed pretium posuere orci in venenatis. Nam lacinia rutrum mi, sed
                            placerat massa ullamcorper sit amet. Morbi rutrum dictum nibh id consequat. Sed vehicula
                            aliquet mauris, quis malesuada urna elementum sit amet.
                        </p>
                        <p>
                            Mauris fringilla, ligula ut fringilla mollis, risus leo posuere est, nec rhoncus orci felis
                            ut nibh. Donec aliquam auctor nunc, in tristique massa laoreet sit amet. Curabitur porta
                            magna sed feugiat semper. Curabitur luctus, risus sed accumsan scelerisque, mi mauris auctor
                            ante, quis maximus nulla tortor at diam. Orci varius natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Morbi imperdiet velit eros, non volutpat neque
                            consectetur sit amet. Pellentesque euismod rutrum mattis. Donec pellentesque felis augue,
                            vel eleifend tortor ultricies in.
                        </p>
                        <div class="text-center">
                            <img src="{{ asset('img/math-example-3.png') }}"
                                 class="rounded my-3 shadow-sm border p-2"
                                 style="max-width: 100%"
                            />
                        </div>
                        <p>
                            Phasellus urna neque, molestie eget lobortis quis, imperdiet id justo. Pellentesque nisi
                            arcu, maximus et quam eu, dignissim efficitur mauris. Proin tincidunt nisi ligula, nec
                            luctus erat eleifend in. Sed vitae ligula sodales, semper augue vel, congue nunc. Ut eu
                            magna et nibh posuere auctor ultricies id tellus. Nulla efficitur quis dui sit amet
                            eleifend. Donec nulla velit, euismod a lobortis a, consequat pretium nisi.
                        </p>
                    </div>

                    <div class="card-footer small text-muted">
                        <div>
                            <strong>Lecturer:</strong>
                            Ibrokhim Shokirov
                        </div>
                        <div>
                            <strong>Date:</strong>
                            23 Jan
                        </div>
                        <div>
                            <strong>Extras:</strong>
                            video, audio, presentation
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
