@extends('_layouts.master')

@section('body')
<!-- Path: {{ $page->getPath() }} -->
    <section id="articles" class="about-section py-4">
        <div class="container">
            <div class="row text-center-xs pb-5 articlepost">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="wt-blog__post__meta">
                        <a href="#">Marketing</a> | 4 min read
                    </div>
                    <h2 class="title">{{ $page->title }}</h2>
                    <!-- <div class="media">
                        <img class="mr-3 img-responsive" src="https://blog.hubspot.com/hubfs/retouched_headshot.jpg?t=1539890146331" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Written by
                                <a href="#">Sophia Bernazzani</a>
                            </h5>
                            <a href="https://twitter.com/soph_bern" target="_blank" class="wt-blog__post__author__social" data-type="twitter">
                                @soph_bern
                            </a>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-12 content-part">
                    <img src="/assets/images/excel_featured_photo.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 m-auto d-block"  id="makeStickyAfter">
                <article class="wt-blog__post__content">
                    
                    <section class="wt-blog__post__footer" role="complementary">

                        @yield('postContent')

                        <em>Originally published Jul 23, 2018 11:50:00 PM, updated July 24 2018</em>

                        <div class="wt-blog__post__topics">

                            Topics:

                            <a href="https://example.com/marketing/microsoft-excel">Excel</a>

                        </div>

                    </section>

                </article>
            </div>
        </div>
    </section>
@endsection