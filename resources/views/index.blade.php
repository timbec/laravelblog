@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            @foreach($posts as $post)
            <article class="hentry post post-standard has-post-thumbnail sticky">
                        <div class="post-thumb">
                            <img src="{{ $post->featured }}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{ $post->featured }}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title text-center">
                                        <a href="{{ route('posts.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{ $post->created_at->diffForHumans() }}
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{ route('category.single', ['id' => $post->category->id ]) }}">
                                            {{ $post->category->name }}
                                            </a>
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            @endforeach
                
            </div>
            <div class="col-lg-2"></div>
        </div>

       
        </div>
    </div>

                <div class="padded-50"></div>

            </div>
            </div>
        </div>
    </div>

<!-- Subscribe Form -->

<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="subscribe scrollme">
                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Email Newsletters!</h4>
                        <form class="subscribe-form" method="post" action="">
                            <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
                            <button class="subscr-btn">subscribe
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                        <div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

                    </div>

                    <div class="images-block">
                        <img src="app/img/subscr-gear.png" alt="gear" class="gear">
                        <img src="app/img/subscr1.png" alt="mail" class="mail">
                        <img src="app/img/subscr-mailopen.png" alt="mail" class="mail-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Subscribe Form -->
</div>

@endsection