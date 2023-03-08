@extends('layouts.app')

@section('content')
    @include('layouts.top')

    <!-- start blog area -->
    <section class="home1 blog-page blog pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                        <h2>latest news</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim to eismud </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                                    <div class="image">
                                        <a href="blog-detail.html">
                                            <img src="{{ asset($post->featured_image) }}" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="content">

                                        <a href="blog-detail.html">
                                            <h6>{{ $post->title }}</h6>
                                        </a>
                                        <ul class="d-flex align-item-center">
                                            <li><a href="#!"><i
                                                        class="fas fa-user"></i>{{ $post->user->name ?? '' }}</a></li>
                                            <li><a href="#!"><i
                                                        class="fas fa-comment"></i>{{ date('M', strtotime($post->created_at)) }},
                                                    {{ date('d Y', strtotime($post->created_at)) }}</a>
                                            </li>
                                        </ul>
                                        <p>{{ $post->summary }}</p>
                                        <a href="{{ route('blog.single', $post->id) }}" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog area -->
@endsection
