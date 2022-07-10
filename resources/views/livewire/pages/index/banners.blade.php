<div>
    <section class="splide" id="splide1">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($data as $item)
                <li class="splide__slide">
                    <div class="card d-none d-md-block text-white rounded-0 border-0">
                        <div class="ratio ratio-21x9">
                            <div class="img-banners"
                                style="background-image: url('/images/banner/{{ $item->images_desktop }}')">
                            </div>
                        </div>
                        @if($item->text_desktop == 1)
                        <div class="position-absolute top-0 start-0 h-100 w-100">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-6">
                                        <h2 class="fw-bold mb-4">{{ $item->title }}</h2>
                                        <p class="fs-5 md-4 mb-lg-5">{{ $item->description }}</p>
                                        @if($item->link != 0)
                                        <a href="{{ $item->link }}"
                                            class="btn btn-outline-light rounded-pill px-4">Details</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="card d-flex d-md-none text-white rounded-0 border-0">
                        <div class="ratio ratio-4x3">
                            <div class="img-banners"
                                style="background-image: url('/images/banner/{{ $item->images_phone }}')">
                            </div>
                        </div>
                        @if($item->text_phone == 1)
                        <div class="position-absolute text-center bottom-0 w-75 px-2 pb-4 mx-auto"
                            style="left: 0; right: 0;">
                            <div class="mb-1">
                                <h5 class="mb-1">{{ $item->title }}</h5>
                                <small class="mb-4">{{ $item->description }}</small>
                            </div>
                            @if($item->links != null)
                            <a href="{{ $item->link }}"
                                class="btn btn-outline-light rounded-pill btn-sm px-4">Details</a>
                            @endif
                        </div>
                        @endif
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
          var splide = new Splide('#splide1');
          splide.mount();
        } );
    </script>
</div>