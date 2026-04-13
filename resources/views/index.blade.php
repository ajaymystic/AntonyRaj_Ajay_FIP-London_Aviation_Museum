@extends('layouts.app')
@section('title', 'Where London Met the Sky')
@section('data-page', 'homepage')

@section('content')
<main>
    <section id="hero-section" class="grid-con">
        <div id="hero-container" class="col-span-full l-col-start-1 l-col-end-13">
            <h1 class="hidden">Welcome to <br> London Aviation Museum</h1>
            <section id="loop-video">
                <h2 class="hidden">Loop Video</h2>
                <div id="lp-container">
                    <video id="lp-player" autoplay muted loop playsinline preload="auto" poster="{{ asset('images/Thumbnail-logo.jpg') }}" aria-label="Loop Video">
                        <source src="{{ asset('video/des-loop-video.mp4') }}" type="video/mp4" media="(max-width: 767px)">
                        <source src="{{ asset('video/des-loop-video.mp4') }}" type="video/mp4" media="(max-width: 1199px)">
                        <source src="{{ asset('video/des-loop-video.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag. Please update your browser or try a different one.
                    </video>
                </div>
            </section>
        </div>

        <div id="hs-container" class="col-span-full l-col-start-1 l-col-end-13">
            <div class="scroll-arrow">
                <i class="fa fa-chevron-down"></i>
            </div>
            <div id="hs-slider">
                <div id="hsi-1" class="hero-sub-container">
                    <div class="hero-sub-img">
                        <picture>
                            <source srcset="{{ asset('images/Homepage/mob-events-thumbnail.webp') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Homepage/tab-events-thumbnail.webp') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" alt="Events">
                        </picture>
                    </div>
                    <span class="hero-sub-heading">Events</span>
                </div>
                <div id="hsi-2" class="hero-sub-container">
                    <div class="hero-sub-img">
                        <picture>
                            <source srcset="{{ asset('images/Homepage/mob-guide-thumbnail.webp') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Homepage/tab-guide-thumbnail.webp') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" alt="Guide Tour">
                        </picture>
                    </div>
                    <span class="hero-sub-heading">Guide Tour</span>
                </div>
                <div id="hsi-3" class="hero-sub-container">
                    <div class="hero-sub-img">
                        <picture>
                            <source srcset="{{ asset('images/Homepage/mob-gallery-thumbnail.webp') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Homepage/tab-gallery-thumbnail.webp') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Homepage/des-gallery-thumbnail.webp') }}" alt="Gallery">
                        </picture>
                    </div>
                    <span class="hero-sub-heading">Gallery</span>
                </div>
            </div>
        </div>
    </section>

    <section id="our-museum" class="grid-con">
        <h1 id="mobile-om-heading" class="col-span-full">Our Museum</h1>
        <div id="om-right-content" class="col-span-full m-col-start-5 m-col-end-9 l-col-start-7 l-col-end-13">
            <h2 id="desktop-om-heading">Our Museum</h2>
            <div id="om-block-1" class="om-blocks">
                <picture>
                    <source srcset="{{ asset('images/Homepage/mob-name-1.webp') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Homepage/tab-name-1.webp') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Homepage/des-name-1.webp') }}" alt="Name #1">
                </picture>
            </div>
            <div id="om-block-3" class="om-blocks">
                <picture>
                    <source srcset="{{ asset('images/Homepage/des-name-3.jpg') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Homepage/des-name-3.jpg') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Homepage/des-name-3.jpg') }}" alt="Name #3">
                </picture>
            </div>
        </div>
        <div id="om-left-content" class="col-span-full m-col-start-1 m-col-end-5 l-col-start-2 l-col-end-7">
            <div id="om-text-block">
                <p id="om-text" class="om-text-body">
                    427 Wing's museum is housed in a 1943 airmen's canteen at the London International Airport. The canteen is the last surviving building from the British Commonwealth Air Training Plan (BCATP) base that existed at London's airport during World War II. It is a London landmark and is listed in the city's Register of Cultural Heritage Resources.
                    The museum commemorates the thousands of Canadian and Commonwealth airmen who trained at this site, as well as the military and civilian personnel who supported and instructed them. It will also commemorate the nearly 250 London men who lost their lives while serving with the RCAF during World War Two.
                    The museum is currently installing a permanent exhibition in the main hall of the canteen building, illustrating the history of military and civilian aviation in the London region. It will focus primarily on the two BCATP training schools - a navigator's school and an elementary flying school. The exhibit will incorporate uniforms, a variety of artifacts, historic images and several model aircraft from the museum's collection, including a Spitfire and a Lancaster. The exhibition is slated to open in the fall of 2026.
                </p>
            </div>
            <div id="om-block-2-4">
                <div id="om-block-2" class="om-blocks">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-name-2.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-name-2.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-name-2.jpg') }}" alt="Name #2">
                    </picture>
                </div>
                <div id="om-block-4" class="om-blocks">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-name-4.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-name-4.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-name-4.jpg') }}" alt="Name #4">
                    </picture>
                </div>
            </div>
        </div>
        <section id="intro-video" class="col-span-full l-col-start-2 l-col-end-12">
            <h2 class="hidden">Intro Video</h2>
            <div class="intro-video-container">
                <div class="intro-video-player plyr__video-embed" id="intro-player">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fundkBtFOrQ?si=FRaNywsbaX1jMGqU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <div id="gutter-1" class="gutter"></div>
    </section>

    <section id="whats-on" class="grid-con">
        <h1 id="wo-heading" class="sub-headings col-span-full l-col-start-1 l-col-end-13">What is on?</h1>
        <button class="slide-prev">&#10094;</button>
        <button class="slide-next">&#10095;</button>
        <div id="wo-content" class="col-span-full l-col-start-1 l-col-end-13">
            <div id="wo-block-1" class="wo-blocks">
                <div class="wo-block-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-wo-exhibtion.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-wo-exhibtion.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-wo-exhibtion.jpg') }}" alt="Exhibitions">
                    </picture>
                </div>
                <h2 class="wo-block-headings">Permanent Exhibition — Opening Fall 2026</h2>
                <p class="wo-block-texts">Military & civilian aviation history of the London region</p>
            </div>
            <div id="wo-block-2" class="wo-blocks">
                <div class="wo-block-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-wo-activities.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-wo-activities.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-wo-activities.jpg') }}" alt="Activities and Experiences">
                    </picture>
                </div>
                <h2 class="wo-block-headings">Explore the Aviation Timeline</h2>
                <p class="wo-block-texts">From early flight to WWII — key events in London's aviation story</p>
            </div>
            <div id="wo-block-3" class="wo-blocks">
                <div class="wo-block-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-wo-exhibtion2.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-wo-exhibtion2.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-wo-exhibtion2.jpg') }}" alt="Exhibitions">
                    </picture>
                </div>
                <h2 class="wo-block-headings">Book of Remembrance</h2>
                <p class="wo-block-texts">Honouring those who gave their lives in BCATP training</p>
            </div>
        </div>
        <button id="wo-content-btn" class="col-span-full l-col-start-1 l-col-end-13">More Activities & Exhibition</button>
        <div id="gutter-2" class="gutter"></div>
    </section>

    <section id="support-us" class="grid-con">
        <h1 id="ss-heading" class="sub-headings col-span-full l-col-start-1 l-col-end-13">Support Us!</h1>
        <div id="gutter-3" class="col-span-full l-col-start-3 l-col-end-13"></div>
        <button class="slide-prev">&#10094;</button>
        <button class="slide-next">&#10095;</button>
        <div id="ss-content" class="col-span-full l-col-start-1 l-col-end-13">
            <div id="ss-block-1" class="ss-blocks">
                <div class="ss-block-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-ss-donate.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-ss-donate.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-ss-donate.jpg') }}" alt="Donate">
                    </picture>
                </div>
                <h2 class="ss-block-headings">DONATE</h2>
                <p class="ss-block-texts">Help preserve London's aviation heritage and fund our 2026 exhibition</p>
            </div>
            <div id="ss-block-2" class="ss-blocks">
                <div class="ss-block-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-ss-charity.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-ss-charity.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-ss-charity.jpg') }}" alt="Charity">
                    </picture>
                </div>
                <h2 class="ss-block-headings">CHARITY</h2>
                <p class="ss-block-texts">Support 427 Wing RCAF Association's community commemoration programs</p>
            </div>
            <div id="ss-block-3" class="ss-blocks">
                <div class="ss-block-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-ss-lunch.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-ss-lunch.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-ss-lunch.jpg') }}" alt="Lunch Charity">
                    </picture>
                </div>
                <h2 class="ss-block-headings">LUNCH CHARITY</h2>
                <p class="ss-block-texts">Join us for our annual fundraising luncheon honouring RCAF veterans and their families</p>
            </div>
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