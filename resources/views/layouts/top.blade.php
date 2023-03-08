@php
    $path = Request::getRequestUri();
    $path = explode('/', $path);
@endphp
<!-- start banner area -->
<section class="inner-page banner" data-img="{{ asset('assets/bg.png') }}">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content text-center">
                        <h2>contact page</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                                @foreach ($path as $item)
                                    @if ($item != '')
                                        <li class="breadcrumb-item active" aria-current="page">{{ $item }}</li>
                                    @endif
                                @endforeach
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner area -->
