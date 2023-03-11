@extends('layouts.app')

@section('content')
    @include('layouts.top')

    <!-- start blog area -->
    <section class="blog-page blog-detail p-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- blog area -->
                        <div class="col-xl-9 col-lg-8 all order-1 order-lg-0">
                            <div class="content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- blog image -->
                                        <div class="blog-img wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                            <img src="{{ asset($post->featured_image) }}" alt="Blog">
                                            <div class="option">
                                                <p>{{ date('d', strtotime($post->created_at)) }} <br>
                                                    {{ date('M', strtotime($post->created_at)) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <!-- title -->
                                        <h4 class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                            {{ $post->title }}</h4>
                                        <p class="text-secondary">{{ $post->user->name ?? '' }},
                                            {{ $post->user->email ?? '' }}</p>

                                        {!! $post->body !!}

                                        <!-- share blog -->
                                        <div class="share-blog d-flex justify-content-between wow fadeInUp"
                                            data-wow-delay="0.3s" data-wow-duration="1s">
                                            <div class="left-part d-flex">
                                                <span>share : </span>
                                                <div class="media-body">
                                                    <ul class="social d-flex">
                                                        <li><a href="#!"><i class="flaticon-facebook"></i></a></li>
                                                        <li><a href="https://www.instagram.com/agilecodestudio/?igshid=ZDdkNTZiNTM%3D"
                                                                target="blank"><i class="flaticon-instagram"></i></a></li>
                                                        <li><a href="#!"><i class="flaticon-skype"></i></a></li>
                                                        <li><a href="#!"><i class="flaticon-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="right-part">
                                                <a href="#!" class="d-flex align-items-center">
                                                    <i class="flaticon-chat"></i>
                                                    <p>comments ({{ count($post->comments) }})</p>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- comment part -->
                                        <div class="comment">
                                            <div class="title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                                <h4>recent comments</h4>
                                            </div>
                                            <ul class="all-comment">
                                                @if (count($post->comments) > 0)
                                                    @foreach ($post->comments as $item)
                                                        <li class="wow fadeInUp" data-wow-delay="0.3s"
                                                            data-wow-duration="1s">
                                                            <img src="{{ asset('assets') }}/images/blog/comment3.jpg"
                                                                alt="Comment Author">
                                                            <div class="comment-body">
                                                                <a href="#!" class="reply d-flex align-items-center"><i
                                                                        class="fas fa-reply-all"></i>
                                                                    <p>reply</p>
                                                                </a>
                                                                <a href="#!">
                                                                    <h6>{{ $item->name }}</h6>
                                                                </a>
                                                                <a href="#!">
                                                                    <p class="time">
                                                                        {{ date('M d', strtotime($item->date)) . ', ' . date('Y', strtotime($item->date)) }}
                                                                    </p>
                                                                </a>
                                                                <p>{{ $item->body }}</p>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                                        <h3>No commnet in this post</h3>
                                                    </li>
                                                @endif
                                            </ul>
                                            <div class="title leave wow fadeInUp" id="comments">
                                                <h4>Leave a comment</h4>
                                            </div>
                                            <form action="{{ route('comment.store') }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" name="name" placeholder="name*" required
                                                            class="input-field has-error">
                                                        <div class="invalid-feedback">err</div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="email" name="email" placeholder="email*" required
                                                            class="input-field">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="your comments*" name="body" required class="input-field"></textarea>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="button-style1">post comment<span
                                                                class="btn-dot"></span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar area -->
                        <div class="col-xl-3 col-lg-4 order-0 order-lg-1">
                            <div class="blog-sidebar">
                                <!-- section 1 -->
                                <div class="section search wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                    <div class="search-area">
                                        <input type="search" placeholder="search here..." class="inputs">
                                        <button><i class="flaticon-loupe"></i></button>
                                    </div>
                                </div>
                                <!-- section 2 -->
                                <div class="section category wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                    <div class="title">
                                        <h5>Topics</h5>
                                    </div>
                                    <ul>
                                        @foreach ($post->topic as $item)
                                            <li>
                                                <a href="#!" class="d-flex justify-content-between">
                                                    <p>{{ $item->name }}</p>
                                                    <p>(07)</p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- section 3 -->
                                <div class="section popular wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                    <div class="title">
                                        <h5>popular application</h5>
                                    </div>
                                    <ul class="small-item">
                                        <li class="item d-flex align-items-center">
                                            <div class="image">
                                                <a href="#!">
                                                    <img src="{{ asset('assets') }}/images/blog/img1.jpg"
                                                        alt="Application" />
                                                </a>
                                            </div>
                                            <div class="item-body">
                                                <a href="#!">
                                                    <h6>Attractive Mobile App Build for all</h6>
                                                </a>
                                                <p><i class="far fa-calendar-alt"></i>july 24, 2021</p>
                                            </div>
                                        </li>
                                        <li class="item d-flex align-items-center">
                                            <div class="image">
                                                <a href="#!">
                                                    <img src="{{ asset('assets') }}/images/blog/img2.jpg"
                                                        alt="Application" />
                                                </a>
                                            </div>
                                            <div class="item-body">
                                                <a href="#!">
                                                    <h6>IOS based Mobile App Build for all</h6>
                                                </a>
                                                <p><i class="far fa-calendar-alt"></i>july 25, 2021</p>
                                            </div>
                                        </li>
                                        <li class="item d-flex align-items-center">
                                            <div class="image">
                                                <a href="#!">
                                                    <img src="{{ asset('assets') }}/images/blog/img3.jpg"
                                                        alt="Application" />
                                                </a>
                                            </div>
                                            <div class="item-body">
                                                <a href="#!">
                                                    <h6>Smart Social Media Management</h6>
                                                </a>
                                                <p><i class="far fa-calendar-alt"></i>july 26, 2021</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- section 4 -->
                                <div class="section tags wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                                    <div class="title">
                                        <h5>Tags</h5>
                                    </div>
                                    <div class="all-tag">
                                        @foreach ($post->tags as $item)
                                            <a href="#!">{{ $item->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- section 5 -->
                                <div class="section newsletter wow fadeInUp" data-wow-delay="0.3s"
                                    data-wow-duration="1s">
                                    <div class="title">
                                        <h5>newsletter</h5>
                                    </div>
                                    <div class="search-area form-area">
                                        <input type="text" placeholder="enter email" class="inputs">
                                        <button><i class="far fa-envelope"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog area -->
@endsection

@push('customhtml')
    <meta name="{{ $post->meta['title'] ?? '' }}" content="{{ $post->meta['description'] ?? '' }}">
@endpush
