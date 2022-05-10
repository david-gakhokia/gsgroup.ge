@extends('frontend.layouts.app')

@section('title', __('News'))

@section('content')


    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">Teamwork</a>
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-4">Commodo Dolor Bibendum Parturient Cursus Mollis</h1>
                        <ul class="post-meta mb-5">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Jul 2021</span></li>
                            <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a>
                            </li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span>
                                        Comments</span></a></li>
                            <li class="post-likes"><a href="#"><i class="uil uil-heart-alt"></i>3<span> Likes</span></a>
                            </li>
                        </ul>
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n17">
                        <div class="card">
                            <figure class="card-img-top"><img src="{{ asset('frontend/assets/img/photos/b1.jpg') }}" alt=""></figure>
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">Cras mattis consectetur purus fermentum</h2>
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                fermentum massa justo sit amet. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet
                                                fermentum. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit
                                                tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum.</p>
                                            <p>Donec sed odio dui consectetur adipiscing elit. Etiam adipiscing tincidunt
                                                elit, eu convallis felis suscipit ut. Phasellus rhoncus tincidunt auctor.
                                                Nullam eu sagittis mauris. Donec non dolor ac elit aliquam tincidunt at at
                                                sapien. Aenean tortor libero, condimentum ac laoreet vitae, varius tempor
                                                nisi. Duis non arcu vel lectus urna mollis ornare vel eu leo.</p>
                                            <div class="row g-6 mt-3 mb-10">
                                                <div class="col-md-6">
                                                    <figure class="hover-scale rounded cursor-dark"><a
                                                            href="assets/img/photos/b8-full.jpg"
                                                            data-glightbox="title: Heading; description: Purus Vulputate Sem Tellus Quam"
                                                            data-gallery="post"> <img src="assets/img/photos/b8.jpg"
                                                                alt=""></a></figure>
                                                </div>
                                                <!--/column -->
                                                <div class="col-md-6">
                                                    <figure class="hover-scale rounded cursor-dark"><a
                                                            href="assets/img/photos/b9-full.jpg" data-glightbox=""
                                                            data-gallery="post"> <img src="assets/img/photos/b9.jpg"
                                                                alt=""></a></figure>
                                                </div>
                                                <!--/column -->
                                                <div class="col-md-6">
                                                    <figure class="hover-scale rounded cursor-dark"><a
                                                            href="assets/img/photos/b10-full.jpg" data-glightbox=""
                                                            data-gallery="post"> <img src="assets/img/photos/b10.jpg"
                                                                alt=""></a></figure>
                                                </div>
                                                <!--/column -->
                                                <div class="col-md-6">
                                                    <figure class="hover-scale rounded cursor-dark"><a
                                                            href="assets/img/photos/b11-full.jpg" data-glightbox=""
                                                            data-gallery="post"> <img src="assets/img/photos/b11.jpg"
                                                                alt=""></a></figure>
                                                </div>
                                                <!--/column -->
                                            </div>
                                            <!-- /.row -->
                                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis
                                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Maecenas
                                                faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.
                                                Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis.
                                                Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus
                                                magna.</p>
                                            <blockquote class="fs-lg my-8">
                                                <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi
                                                    erat porttitor ligula lacinia odio sem nec elit purus.</p>
                                                <footer class="blockquote-footer">Very important person</footer>
                                            </blockquote>
                                            <h3 class="h2 mb-4">Sit Vulputate Bibendum Purus</h3>
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed
                                                consectetur. Cras mattis consectetur purus sit amet fermentum. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id
                                                ligula porta felis euismod semper.</p>
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                fermentum massa justo sit amet risus. Donec sed odio dui. Cras justo odio,
                                                dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus
                                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                                risus. Sed posuere consectetur est at lobortis. Donec id elit non mi porta
                                                gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Cum sociis
                                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                        </div>
                                        <!-- /.post-content -->
                                        <div
                                            class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                            <div>
                                                <ul class="list-unstyled tag-list mb-0">
                                                    <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">Still
                                                            Life</a></li>
                                                    <li><a href="#"
                                                            class="btn btn-soft-ash btn-sm rounded-pill mb-0">Urban</a></li>
                                                    <li><a href="#"
                                                            class="btn btn-soft-ash btn-sm rounded-pill mb-0">Nature</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mb-0 mb-md-2">
                                                <div class="dropdown share-dropdown btn-group">
                                                    <button
                                                        class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="uil uil-share-alt"></i> Share </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="uil uil-twitter"></i>Twitter</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="uil uil-facebook-f"></i>Facebook</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="uil uil-linkedin"></i>Linkedin</a>
                                                    </div>
                                                    <!--/.dropdown-menu -->
                                                </div>
                                                <!--/.share-dropdown -->
                                            </div>
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /.post -->
                                </div>
                                <!-- /.classic-view -->
                                <hr>
                                <div class="author-info d-md-flex align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <figure class="user-avatar"><img class="rounded-circle" alt=""
                                                src="{{ asset('frontend/assets/img/avatars/u5.jpg') }}"></figure>
                                        <div>
                                            <h6><a href="#" class="link-dark">Nikolas Brooten</a></h6>
                                            <span class="post-meta fs-15">Sales Manager</span>
                                        </div>
                                    </div>
                                    <div class="mt-3 mt-md-0 ms-auto">
                                        <a href="#"
                                            class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i
                                                class="uil uil-file-alt"></i> All Posts</a>
                                    </div>
                                </div>
                                <!-- /.author-info -->
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                                    massa justo sit amet risus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac.
                                    Maecenas faucibus mollis interdum.</p>
                                <nav class="nav social">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                                <hr>
                                <h3 class="mb-6">You Might Also Like</h3>
                                <div class="carousel owl-carousel blog grid-view mb-16" data-margin="30" data-dots="true"
                                    data-autoplay="false" data-autoplay-timeout="5000"
                                    data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "2"}}'>
                                    <div class="item">
                                        <article>
                                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                                        src="{{ asset('frontend/assets/img/photos/b4.jpg') }}" alt=""></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Read More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                        href="blog-post.html">Ligula tristique quis risus</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14
                                                            Apr 2021</span></li>
                                                    <li class="post-comments"><a href="#"><i
                                                                class="uil uil-comment"></i>4</a></li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <article>
                                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                                        src="{{ asset('frontend/assets/img/photos/b5.jpg') }}" alt=""></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Read More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Workspace</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                        href="blog-post.html">Nullam id dolor elit id nibh</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29
                                                            Mar 2021</span></li>
                                                    <li class="post-comments"><a href="#"><i
                                                                class="uil uil-comment"></i>3</a></li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <article>
                                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                                        src="{{ asset('frontend/assets/img/photos/b6.jpg') }}" alt=""></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Read More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Meeting</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                        href="blog-post.html">Ultricies fusce porta elit</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta mb-0">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                                                    <li class="post-comments"><a href="#"><i
                                                                class="uil uil-comment"></i>6</a></li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <article>
                                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                                        src="{{ asset('frontend/assets/img/photos/b7.jpg') }}" alt=""></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Read More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Business Tips</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                        href="blog-post.html">Morbi leo risus porta eget</a></h2>
                                            </div>
                                            <div class="post-footer">
                                                <ul class="post-meta mb-0">
                                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7
                                                            Jan 2021</span></li>
                                                    <li class="post-comments"><a href="#"><i
                                                                class="uil uil-comment"></i>2</a></li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                        <!-- /article -->
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.owl-carousel -->

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

@endsection
