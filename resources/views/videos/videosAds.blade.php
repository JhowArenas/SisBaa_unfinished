@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <!--Modal: Name-->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">
                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Close
                                </button>
                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->

                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg"
                        alt="video"
                        data-toggle="modal" data-target="#modal1"></a>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

                <!--Modal: Name-->
                <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                            allowfullscreen></iframe>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Close
                                </button>
                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->

                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg"
                        alt="video"
                        data-toggle="modal" data-target="#modal6"></a>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4">

                <!--Modal: Name-->
                <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                            allowfullscreen></iframe>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Spread the word!</span>
                                <a type="button" class="btn-floating btn-sm btn-fb"><i class="fa fa-facebook"></i></a>
                                <!--Twitter-->
                                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fa fa-twitter"></i></a>
                                <!--Google +-->
                                <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fa fa-google-plus"></i></a>
                                <!--Linkedin-->
                                <a type="button" class="btn-floating btn-sm btn-ins"><i class="fa fa-linkedin"></i></a>

                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                        data-dismiss="modal">Close
                                </button>

                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->

                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg"
                        alt="video"
                        data-toggle="modal" data-target="#modal4"></a>

            </div>

        </div>
    </div>




@endsection