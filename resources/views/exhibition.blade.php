@extends('layouts.app')
@section('title', 'Exhibition')
@section('data-page', 'exhibition')

@section('content')
<main>
    <section id="exhibition-hero" class="grid-con">
        <h1 class="hidden">Exhibition Introduction</h1>
        <div id="exhibition-main" class="col-span-full l-col-start-1 l-col-end-13">
            <picture>
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-hero.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-hero.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Exhibtion/des-exhibtion-hero.jpg') }}" alt="Exhibition Hero Image">
            </picture>
        </div>
        <div id="eh-container" class="col-span-full l-col-start-1 l-col-end-13">
            <div id="ehi-1" class="eh-sub-container">
                <div class="hero-sub-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" alt="Events Thumbnail Image">
                    </picture>
                </div>
                <span class="hero-sub-heading">Events</span>
            </div>
            <div id="ehi-2" class="eh-sub-container">
                <div class="hero-sub-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" alt="Guide Tour Thumbnail Image">
                    </picture>
                </div>
                <span class="hero-sub-heading">Guide Tour</span>
            </div>
            <div id="ehi-3" class="eh-sub-container">
                <div class="hero-sub-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-gallery-thumbnail.webp') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-gallery-thumbnail.webp') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-gallery-thumbnail.webp') }}" alt="Gallery Thumbnail Image">
                    </picture>
                </div>
                <span class="hero-sub-heading">Gallery</span>
            </div>
        </div>
    </section>

    <section id="exhibition-social" class="grid-con">
        <h1 id="es-heading" class="sub-headings col-span-full l-col-start-1 l-col-end-13">A City in the Air London's Aviation Story</h1>
        <div class="video-container col-span-full l-col-start-2 l-col-end-12">
            <video class="video-player" playsinline controls data-poster="" aria-label="Exhibition Video">
                <source src="{{ asset('video/des-loop-video.mp4') }}" type="video/mp4" media="(max-width: 767px)">
                <source src="{{ asset('video/des-loop-video.mp4') }}" type="video/mp4" media="(max-width: 1199px)">
                <source src="{{ asset('video/des-loop-video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag. Please update your browser or try a different one.
            </video>
        </div>
        <div id="es-content" class="col-span-full l-col-start-1 l-col-end-13">
            <div class="es-container">
                <div class="es-sub-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" alt="Name #1 Image">
                    </picture>
                </div>
                <h2 class="es-sub-heading">Events</h2>
                <div class="es-gutter"></div>
                <p class="es-sub-text">Opened June 24, 1940 at Crumlin Airport, this school provided primary pilot training using Fleet Finch II aircraft. Student pilots learned fundamental flight skills, aerobatics, and basic navigation — both Canadian and international trainees progressed from here to advanced training schools across the Commonwealth.</p>
            </div>
            <div class="es-container">
                <div class="es-sub-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" alt="Name #2 Image">
                    </picture>
                </div>
                <h2 class="es-sub-heading">Guided Tour</h2>
                <div class="es-gutter"></div>
                <p class="es-sub-text">Opened December 17, 1940, this school trained navigators and air observers using the Avro Anson and Harvard aircraft. Trainees from New Zealand, the United States, and across the Commonwealth completed navigation, bombing, gunnery, and map-reading courses, supported by Link trainers for instrument flight simulation.</p>
            </div>
            <div class="es-container">
                <div class="es-sub-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-gallery-thumbnail.webp') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-gallery-thumbnail.webp') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-gallery-thumbnail.webp') }}" alt="Name #3 Image">
                    </picture>
                </div>
                <h2 class="es-sub-heading">Gallery</h2>
                <div class="es-gutter"></div>
                <p class="es-sub-text">A lasting tribute to those who lost their lives during aviation training in and around London. The Book of Remembrance records the names of aircrew, instructors, and support personnel who made the ultimate sacrifice preparing to defend freedom.</p>
            </div>
        </div>
        <div id="es-sub-content" class="col-span-full l-col-start-1 l-col-end-13">
            <div id="es-about-img">
                <picture>
                    <source srcset="{{ asset('images/Exhibtion/des-exhibtion-about.jpg') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Exhibtion/des-exhibtion-about.jpg') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Exhibtion/des-exhibtion-about.jpg') }}" alt="About Image">
                </picture>
            </div>
            <div id="es-about-text">
                <h2 id="es-about-heading" class="sub-headings">About London Aviation Museum</h2>
                <p id="es-about-description">A project of 427 Wing (London), Royal Canadian Air Force Association. The museum is housed in a 1943 airmen's canteen at the London International Airport — the last surviving building from the British Commonwealth Air Training Plan (BCATP) base that existed at London's airport during World War II.</p>
            </div>
        </div>
    </section>

    <section id="exhibition-gallery" class="grid-con">
        <h1 id="eg-heading" class="sub-headings col-span-full l-col-start-1 l-col-end-13">Gallery Collection</h1>
        <div class="gallery-box col-span-full m-col-start-1 m-col-end-5 l-col-start-1 l-col-end-4">
            <picture>
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-1.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-1.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-1.jpg') }}" alt="Gallery Image 1">
            </picture>
        </div>
        <div class="gallery-box col-span-full m-col-start-5 m-col-end-9 l-col-start-4 l-col-end-8">
            <picture>
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-2.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-2.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-2.jpg') }}" alt="Gallery Image 2">
            </picture>
        </div>
        <div class="gallery-box col-span-full m-col-start-1 m-col-end-5 l-col-start-8 l-col-end-13">
            <picture>
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-3.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-3.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-3.jpg') }}" alt="Gallery Image 3">
            </picture>
        </div>
        <div class="gallery-box col-span-full m-col-start-5 m-col-end-9 l-col-start-1 l-col-end-4">
            <picture>
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-4.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-4.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-4.jpg') }}" alt="Gallery Image 4">
            </picture>
        </div>
        <div class="gallery-box col-span-full m-col-start-1 m-col-end-5 l-col-start-4 l-col-end-9">
            <picture>
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-5.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-5.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-5.jpg') }}" alt="Gallery Image 5">
            </picture>
        </div>
        <div class="gallery-box col-span-full m-col-start-5 m-col-end-9 l-col-start-9 l-col-end-13">
            <picture>
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-6.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-6.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Exhibtion/des-exhibtion-gallery-img-6.jpg') }}" alt="Gallery Image 6">
            </picture>
        </div>
        <div id="eg-btn-container" class="col-span-full m-col-start-1 m-col-end-9 l-col-start-1 l-col-end-13">
            <button id="eg-btn">Show more</button>
        </div>
    </section>

    <section id="newsletter-app">
        <section id="newsletter" class="grid-con">
            <h1 id="nl-header" class="sub-headings col-span-full l-col-start-1 l-col-end-13">Stay Informed!</h1>
            <div id="nl-content" class="col-span-full l-col-start-1 l-col-end-13">
                <p id="nl-text">Sign up for updates on the museum's opening, new exhibitions, and upcoming events honouring London's aviation heritage.</p>
                <form id="nl-form-con" class="col-span-full" @submit.prevent="submitNewsletter">
                    <div id="nl-form">
                        <input type="text" placeholder="Name *" class="nl-field" v-model="firstName" required/>
                        <br />
                        <input type="email" placeholder="Email *" class="nl-field" v-model="email" required/>
                        <br />
                    </div>
                    <button id="nl-subscribe" :disabled="loading">@{{ loading ? 'Subscribing...' : 'Subscribe' }}</button>
                </form>
                <div v-if="feedbackMessage" :class="feedbackClass" id="nl-feedback" v-html="feedbackMessage"></div>
            </div>
        </section>
    </section>
</main>
@endsection