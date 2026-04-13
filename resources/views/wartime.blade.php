@extends('layouts.app')
@section('title', 'London Aviation Museum')
@section('data-page', 'wartime')

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/MotionPathPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/DrawSVGPlugin.min.js"></script>
@endsection

@section('content')
<main>
    <section id="wartime-hero" class="grid-con">
        <h1 class="hidden">Wartime Introduction</h1>
        <div id="wartime-main" class="col-span-full l-col-start-1 l-col-end-13">
            <picture>
                <source srcset="{{ asset('images/Wartime/des-wartime-hero.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Wartime/des-wartime-hero.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Wartime/des-wartime-hero.jpg') }}" alt="Wartime Hero Image">
            </picture>
        </div>
        <div id="wh-container" class="col-span-full l-col-start-1 l-col-end-13">
            <div id="whi-1" class="wh-sub-container">
                <div class="hero-sub-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-events-thumbnail.webp') }}" alt="Events Thumbnail Image">
                    </picture>
                </div>
                <span class="hero-sub-heading">Events</span>
            </div>
            <div id="whi-2" class="wh-sub-container">
                <div class="hero-sub-img">
                    <picture>
                        <source srcset="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Homepage/des-guide-thumbnail.webp') }}" alt="Guide Tour Thumbnail Image">
                    </picture>
                </div>
                <span class="hero-sub-heading">Guide Tour</span>
            </div>
            <div id="whi-3" class="wh-sub-container">
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

    <section id="timeline-section" class="grid-con">
        <h1 id="ts-header" class="sub-headings col-span-full m-col-start-1 m-col-end-5 l-col-start-1 l-col-end-6">Timeline <br> of Aviation <br> History</h1>
        <p id="ts-text" class="col-span-full m-col-start-5 m-col-end-9 l-col-start-6 l-col-end-13">This timeline traces the evolution of aviation in London from early experimentation to post-war development. Visitors are encouraged to consider how technological progress, public interest, and global conflict shaped aviation's role in the city.</p>
        <div id="ts-content" class="col-span-full m-col-start-1 m-col-end-9 l-col-start-1 l-col-end-13">
            <div id="ts1-container" class="ts-container">
                <div class="ts-img">
                    <picture>
                        <source srcset="{{ asset('images/Wartime/des-timeline-1918.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Wartime/des-timeline-1918.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Wartime/des-timeline-1918.jpg') }}" alt="1900-1918 Image">
                    </picture>
                </div>
                <h2 class="ts-year">1900-1918</h2>
                <p class="ts-text">International pioneers and the Silver Dart First recorded flights over London Public reactions to early aircraft Characteristics of early aircraft design</p>
            </div>
            <div id="ts2-container" class="ts-container">
                <div class="ts-img">
                    <picture>
                        <source srcset="{{ asset('images/Wartime/des-timeline-1939.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Wartime/des-timeline-1939.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Wartime/des-timeline-1939.jpg') }}" alt="1919-1939 Image">
                    </picture>
                </div>
                <h2 class="ts-year">1919-1939</h2>
                <p class="ts-text">Increased public enthusiasm following the First World War The proposed London-to-London transatlantic flight Establishment of Lambeth Airfield Formation of flying clubs and local aviation culture</p>
            </div>
            <div id="ts3-container" class="ts-container">
                <div class="ts-img">
                    <picture>
                        <source srcset="{{ asset('images/Wartime/des-timeline-1945.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Wartime/des-timeline-1945.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Wartime/des-timeline-1945.jpg') }}" alt="1940-1945 Image">
                    </picture>
                </div>
                <h2 class="ts-year">1940-1945</h2>
                <p class="ts-text">Establishment of training schools at Crumlin Airport London's role within the British Commonwealth Air Training Plan Training of aircrew from across the Commonwealth Civilian infrastructure adapted for military purposes</p>
            </div>
            <div id="ts4-container" class="ts-container">
                <div class="ts-img">
                    <picture>
                        <source srcset="{{ asset('images/Wartime/des-timeline-postwar.jpg') }}" media="(max-width: 767px)">
                        <source srcset="{{ asset('images/Wartime/des-timeline-postwar.jpg') }}" media="(max-width: 1199px)">
                        <img src="{{ asset('images/Wartime/des-timeline-postwar.jpg') }}" alt="Post War Image">
                    </picture>
                </div>
                <h2 class="ts-year">POST WAR</h2>
                <p class="ts-text">Continued military activity and auxiliary squadrons 420 Squadron operations (1948-1956) Shift toward modern aviation Lasting impact of wartime infrastructure</p>
            </div>
        </div>
    </section>

    <section id="detail-timeline" class="grid-con">
        <h1 id="dt-heading" class="col-span-full m-col-start-1 m-col-end-9 l-col-start-1 l-col-end-13">Detailed Timeline</h1>
        <div id="dt-main-img" class="col-span-full m-col-start-1 m-col-end-4 l-col-start-1 l-col-end-8">
            <picture>
                <source srcset="{{ asset('images/Wartime/des-detail-main.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Wartime/des-detail-main.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Wartime/des-detail-main.jpg') }}" alt="Detail Timeline Gallery Main Image">
            </picture>
        </div>
        <div id="dt-sub-img" class="col-span-full m-col-start-4 m-col-end-9 l-col-start-8 l-col-end-13">
            <picture>
                <source srcset="{{ asset('images/Wartime/des-detail-sub.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Wartime/des-detail-sub.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Wartime/des-detail-sub.jpg') }}" alt="Detail Timeline Gallery Sub Image">
            </picture>
        </div>
        <div id="dt-container" class="col-span-full l-col-start-1 l-col-end-13">
            <div class="dt-img">
                <picture>
                    <source srcset="{{ asset('images/Wartime/des-detail-img-1.jpg') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Wartime/des-detail-img-1.jpg') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Wartime/des-detail-img-1.jpg') }}" alt="Detail Timeline Gallery Image 1">
                </picture>
            </div>
            <div class="dt-img">
                <picture>
                    <source srcset="{{ asset('images/Wartime/des-detail-img-2.jpg') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Wartime/des-detail-img-2.jpg') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Wartime/des-detail-img-2.jpg') }}" alt="Detail Timeline Gallery Image 2">
                </picture>
            </div>
            <div id="dt-img-last" class="dt-img">
                <picture>
                    <source srcset="{{ asset('images/Wartime/des-detail-img-3.jpg') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Wartime/des-detail-img-3.jpg') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Wartime/des-detail-img-3.jpg') }}" alt="Detail Timeline Gallery Image 3">
                </picture>
            </div>
        </div>

        <section id="timeline-animation" class="col-span-full">
            <div id="timeline">
                <svg id="timeline-svg" xmlns="http://www.w3.org/2000/svg" width="370" height="2500" viewBox="0 0 370 2500" fill="none">
                    <path id="mobile-path" class="timeline-path" d="M10 -300 L10 2000" fill="none" stroke="#A08B63" stroke-width="69"/>
                    <path id="path" class="timeline-path" d="M184 -225 L184 3000" fill="none" stroke="#A08B63" stroke-width="69"/>
                    <path class="plane" d="M184.073 552.627L197.086 575.997L248.748 575.779C250.379 579.854 246.366 588.734 246.366 588.734C235.943 602.514 201.28 617.13 201.28 617.13L212.337 753.551L348.014 761.083C370.63 764.216 369.084 780.306 369.084 780.306C369.138 793.251 345.762 797.401 345.762 797.401L210.975 813.232L196.871 852.665L229.067 852.884L229.067 859.296L194.322 859.389C194.322 859.389 187.873 871.409 184.746 871.409C181.619 871.409 175.681 859.468 175.681 859.468L140.048 859.618L140.02 852.884L173.324 852.743L157.474 813.45L24.488 798.759C24.488 798.759 1.04575 794.807 0.991024 781.862C0.991024 781.862 -0.691144 765.786 21.8977 762.462L157.474 753.786L167.401 617.277C167.401 617.277 132.589 602.955 122.077 589.267C122.077 589.267 117.989 580.425 119.586 576.333L171.224 576.114L184.073 552.627Z" fill="#A08B63"/>
                    <path class="mobile-plane" xmlns="http://www.w3.org/2000/svg" d="M24.2128 314.811C13.4767 305.141 -0.0236981 272.033 2.56045e-05 257.676L0.421024 2.36603e-05L50.3211 6.17008e-05L50.4073 32.2768L50.599 106.063L50.7906 179.838L49.3515 258.78C48.776 273.521 32.6248 307.425 24.7284 314.802L24.2128 314.811Z" fill="#A08B63"/>
                </svg>
            </div>

            <div id="timeline-1918" class="timeline-event">
                <div class="te-content">
                    <div id="img-1918" class="te-img">
                        <picture>
                            <source srcset="{{ asset('images/Wartime/1900-1918.jpg') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Wartime/1900-1918.jpg') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Wartime/1900-1918.jpg') }}" alt="1900-1918">
                        </picture>
                    </div>
                    <h2 id="heading-1918" class="te-heading">19<br>00<br>|<br>19<br>18</h2>
                    <div id="content-1918" class="tc-content">
                        <h3 class="tc-heading">1900-1918</h3>
                        <p id="des-1918" class="tc-description">The earliest chapter in London's aviation history was shaped by international pioneers whose daring flights captivated local communities. Public demonstrations introduced the city to heavier-than-air flight, and the characteristics of early aircraft design — fragile frames, open cockpits, and uncertain engines — made every flight an act of bravery.</p>
                    </div>
                </div>
            </div>

            <div id="timeline-1939" class="timeline-event">
                <div class="te-content">
                    <div id="img-1939" class="te-img">
                        <picture>
                            <source srcset="{{ asset('images/Wartime/1919-1939.png') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Wartime/1919-1939.png') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Wartime/1919-1939.png') }}" alt="1919-1939">
                        </picture>
                    </div>
                    <h2 id="heading-1939" class="te-heading">19<br>19<br>|<br>19<br>39</h2>
                    <div id="content-1939" class="tc-content">
                        <h3 class="tc-heading">1919-1939</h3>
                        <p id="des-1939" class="tc-description">The interwar years brought a surge of public enthusiasm for aviation. Post-war aerial photography awakened civilian interest, while ambitious plans — including the proposed London-to-London transatlantic flight — captured the imagination of the city. The formation of Lambeth Airfield and the establishment of flying clubs transformed aviation from spectacle into an accessible community endeavour.</p>
                    </div>
                </div>
            </div>

            <div id="timeline-1945" class="timeline-event">
                <div class="te-content">
                    <div id="img-1945" class="te-img">
                        <picture>
                            <source srcset="{{ asset('images/Wartime/1940-1945.jpg') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Wartime/1940-1945.jpg') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Wartime/1940-1945.jpg') }}" alt="1940-1945">
                        </picture>
                    </div>
                    <h2 id="heading-1945" class="te-heading">19<br>40<br>|<br>19<br>45</h2>
                    <div id="content-1945" class="tc-content">
                        <h3 class="tc-heading">1940-1945</h3>
                        <p id="des-1945" class="tc-description">London's wartime role was defined by the British Commonwealth Air Training Plan — a massive international effort that trained thousands of aircrew from Canada, Britain, Australia, New Zealand, and other Allied nations. Two major BCATP schools operated at Crumlin Airport, transforming civilian infrastructure into a vital engine of the Allied war machine.</p>
                    </div>
                </div>
            </div>

            <div id="timeline-post" class="timeline-event">
                <div class="te-content">
                    <div id="img-post" class="te-img">
                        <picture>
                            <source srcset="{{ asset('images/Wartime/POST WAR.jpg') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Wartime/POST WAR.jpg') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Wartime/POST WAR.jpg') }}" alt="Post War">
                        </picture>
                    </div>
                    <h2 id="heading-post" class="te-heading">P<br>O<br>S<br>T<br>|<br>W<br>A<br>R</h2>
                    <div id="content-post" class="tc-content">
                        <h3 class="tc-heading">POST-WAR</h3>
                        <p id="des-post" class="tc-description">The post-war years saw London transition from a wartime training hub to a modern aviation centre. Auxiliary squadrons maintained military readiness, while the infrastructure built for the BCATP became the foundation of the London International Airport. The wartime canteen — now the museum — stands as the last surviving link to this transformative era.</p>
                    </div>
                </div>
            </div>
        </section>
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