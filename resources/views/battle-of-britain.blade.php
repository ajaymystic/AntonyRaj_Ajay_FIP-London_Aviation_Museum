@extends('layouts.app')
@section('title', 'Battle of Britain')
@section('data-page', 'bob')

@section('scripts')
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
@endsection

@section('content')
<main>
    <section id="bob-hero" class="grid-con">
        <div id="bob-content" class="container hero-container col-span-full">
            <div class="bob-slider">
                <div class="active-display"></div>
                <div class="preview-row">
                    <div id="pilot-1" class="item focus-none">
                        <picture>
                            <source srcset="{{ asset('images/Bob/des-pilot-1.jpg') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Bob/des-pilot-1.jpg') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Bob/des-pilot-1.jpg') }}" alt="Smith R.Reilley" />
                        </picture>
                        <div class="content">
                            <h2 class="name">Smith R.Reilley</h2>
                            <button>See More</button>
                        </div>
                    </div>
                    <div id="pilot-2" class="item">
                        <picture>
                            <source srcset="{{ asset('images/Bob/Verschoyle Philip Cronyn.jpg') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Bob/Verschoyle Philip Cronyn.jpg') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Bob/Verschoyle Philip Cronyn.jpg') }}" alt="Verschoyle Philip Cronyn" />
                        </picture>
                        <div class="content">
                            <h2 class="name">Verschoyle Philip Cronyn</h2>
                            <button>See More</button>
                        </div>
                    </div>
                    <div id="pilot-3" class="item">
                        <img src="{{ asset('images/Bob/Smither.jpg') }}" alt="Pilot 3" />
                        <div class="content">
                            <h2 class="name">Smither</h2>
                            <button>See More</button>
                        </div>
                    </div>
                    <div id="pilot-4" class="item">
                        <img src="{{ asset('images/Bob/p3.jpg') }}" alt="Pilot 4" />
                        <div class="content">
                            <h2 class="name">John William.</h2>
                            <button>See More</button>
                        </div>
                    </div>
                    <div id="pilot-5" class="item">
                        <img src="{{ asset('images/Bob/Grassick.jpg') }}" alt="Pilot 5" />
                        <div class="content">
                            <h2 class="name">Grassick</h2>
                            <button>See More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bob-history" class="grid-con">
        <h1 id="bh-heading" class="sub-headings col-span-full">The Battle of Britain</h1>
        <div id="bh-img" class="col-span-full l-col-start-1 l-col-end-6">
            <picture>
                <source srcset="{{ asset('images/Bob/des-history-img.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Bob/des-history-img.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Bob/des-history-img.jpg') }}" alt="Battle of Britain History Image">
            </picture>
        </div>
        <div id="bh-content" class="col-span-full l-col-start-7 l-col-end-13">
            <h2 id="des-bh-heading" class="sub-headings col-span-full">The Battle of Britain</h2>
            <p id="bh-sub-heading" class="bh-text"><strong>A Critical Turning Point in the Second World War</strong></p>
            <p class="bh-text">The Battle of Britain, fought between July and October 1940, marked a critical turning point in the Second World War. It was the first major military campaign fought entirely in the air and played a decisive role in preventing a German invasion of the United Kingdom. While the battle took place overseas, its impact reached far beyond Britain's borders. London, Ontario, played an important supporting role through its connection to aircrew training and aviation preparation.</p>
            <button id="bh-btn">Read More History!</button>
        </div>
    </section>

    <section id="bob-description" class="grid-con">
        <h1 id="bd-heading" class="sub-headings col-span-full">Londoners and the Battle of Britain</h1>
        <div id="bd-img" class="col-span-full l-col-start-7 l-col-end-13">
            <picture>
                <source srcset="{{ asset('images/Bob/des-description-img.jpg') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Bob/des-description-img.jpg') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Bob/des-description-img.jpg') }}" alt="Description Image">
            </picture>
        </div>
        <div id="bd-content" class="col-span-full l-col-start-1 l-col-end-7">
            <p class="bd-text">Individuals from the London region served as pilots, navigators, and ground crew, while others contributed indirectly through training programs that later fed into front-line squadrons. The skills developed in Canadian training schools helped sustain the Royal Air Force during one of its most challenging periods. Remembering these connections helps place London's aviation history within a wider historical and global context.</p>
            <button id="bd-btn" class="col-span-full"><a href="{{ route('bor') }}">Honor & Remember</a></button>
        </div>
    </section>

    <section id="bob-airplane" class="grid-con">
        <h1 id="ba-heading-main" class="ba-heading col-span-full">Aircraft Flown by London's Airmen</h1>
        <div id="ba-content" class="col-span-full">
            <div id="ba-model">
                <model-viewer src="{{ asset('model/propeller airplane 3d model.glb') }}" camera-controls auto-rotate ar></model-viewer>
                <img class="ba-gif" src="{{ asset('images/Bob/Animated GIF.gif') }}">
            </div>
            <div id="ba-text-imgs">
                <h2 id="ba-heading-sub" class="ba-heading">Aircraft Flown by London's Airmen</h2>
                <div id="ba-navbar">
                    <ul id="ba-nav">
                        <li class="nav-item">
                            <button class="ba-tab active" data-content="mechanic">Mechanic</button>
                        </li>
                        <li class="nav-item">
                            <button class="ba-tab" data-content="history">History</button>
                        </li>
                    </ul>
                    <div id="ba-text"></div>
                </div>

                <template class="templates" id="mechanic">
                    <p>The Spitfire Mk I/II–type fighter was powered by the Rolls-Royce Merlin, a liquid-cooled V12 engine producing just over 1,000 horsepower, driving a three-blade propeller for strong speed and climb performance. Its structure used a stressed-skin aluminum airframe, keeping the aircraft lightweight yet strong.</p>
                </template>
                <template class="templates" id="history">
                    <p>The Spitfire Mk I/II–type fighter entered service with the Royal Air Force in the late 1930s and became one of the most important aircraft of the Second World War. It played a crucial role during the Battle of Britain in 1940, where its speed and maneuverability allowed it to effectively engage German fighters and bombers.</p>
                </template>
                <template class="templates" id="mechanic-2">
                    <p>The Fairey Finch Mk II was powered by an Armstrong Siddeley Tiger radial engine producing around 330 horsepower, driving a two-bladed propeller suited for stable, low-speed flight.</p>
                </template>
                <template class="templates" id="history-2">
                    <p>The Fairey Finch Mk II entered service in the early 1930s as a primary trainer for the Royal Air Force and later saw extensive use with the Royal Canadian Air Force.</p>
                </template>
                <template class="templates" id="mechanic-3">
                    <p>The Harvard Mk II–type trainer was powered by a Pratt & Whitney R-1340 Wasp radial engine producing around 600 horsepower, driving a constant-speed propeller that allowed better performance control during training.</p>
                </template>
                <template class="templates" id="history-3">
                    <p>The Harvard Mk II was a version of the North American T-6 Texan advanced trainer, widely used by the Royal Air Force and Commonwealth air forces during the Second World War.</p>
                </template>
                <template class="templates" id="mechanic-4">
                    <p>The Airspeed Oxford was powered by two Armstrong Siddeley Cheetah radial engines, each producing around 350 horsepower, driving two-bladed propellers and providing reliable performance for training purposes.</p>
                </template>
                <template class="templates" id="history-4">
                    <p>The Airspeed Oxford was introduced in 1937 as a twin-engine advanced trainer for the Royal Air Force and became one of the most widely used training aircraft of the Second World War.</p>
                </template>

                <div id="ba-images">
                    <div class="ba-img active" data-model="{{ asset('model/propeller airplane 3d model.glb') }}" data-id="1" data-title="Spitfire Mk I/II–type fighter">
                        <picture>
                            <source srcset="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" alt="Spitfire">
                        </picture>
                    </div>
                    <div class="ba-img" data-model="{{ asset('model/yellow biplane 3d model.glb') }}" data-id="2" data-title="Fairey Finch Mk II">
                        <picture>
                            <source srcset="{{ asset('images/Bob/Fairey Finch Mk2.png') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Bob/Fairey Finch Mk2.png') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Bob/Fairey Finch Mk2.png') }}" alt="Fairey Finch">
                        </picture>
                    </div>
                    <div class="ba-img" data-model="{{ asset('model/yellow propeller airplane 3d model.glb') }}" data-id="3" data-title="Harvard Mk II–type trainer">
                        <picture>
                            <source srcset="{{ asset('images/Bob/Harvard Mk2-type trainer.png') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Bob/Harvard Mk2-type trainer.png') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Bob/Harvard Mk2-type trainer.png') }}" alt="Harvard">
                        </picture>
                    </div>
                    <div class="ba-img" data-model="{{ asset('model/yellow twin-engine airplane 3d model.glb') }}" data-id="4" data-title="Airspeed Oxford">
                        <picture>
                            <source srcset="{{ asset('images/Bob/Airspeed Oxford.png') }}" media="(max-width: 767px)">
                            <source srcset="{{ asset('images/Bob/Airspeed Oxford.png') }}" media="(max-width: 1199px)">
                            <img src="{{ asset('images/Bob/Airspeed Oxford.png') }}" alt="Airspeed Oxford">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bob-gallery" class="grid-con">
        <h1 class="hidden">Battle of Britain Gallery</h1>
        <div id="gutter-6" class="col-span-full"></div>
        <div id="bg-main" class="col-span-full">
            <picture>
                <source srcset="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" media="(max-width: 767px)">
                <source srcset="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" media="(max-width: 1199px)">
                <img src="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" alt="Model Image">
            </picture>
        </div>
        <div id="bg-content" class="col-span-full">
            <div class="bg-img">
                <picture>
                    <source srcset="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Bob/Spitfire Mk12-type fighter.png') }}" alt="Spitfire">
                </picture>
            </div>
            <div class="bg-img">
                <picture>
                    <source srcset="{{ asset('images/Bob/Fairey Finch Mk2.png') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Bob/Fairey Finch Mk2.png') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Bob/Fairey Finch Mk2.png') }}" alt="Fairey Finch">
                </picture>
            </div>
            <div class="bg-img">
                <picture>
                    <source srcset="{{ asset('images/Bob/Harvard Mk2-type trainer.png') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Bob/Harvard Mk2-type trainer.png') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Bob/Harvard Mk2-type trainer.png') }}" alt="Harvard">
                </picture>
            </div>
            <div class="bg-img">
                <picture>
                    <source srcset="{{ asset('images/Bob/Airspeed Oxford.png') }}" media="(max-width: 767px)">
                    <source srcset="{{ asset('images/Bob/Airspeed Oxford.png') }}" media="(max-width: 1199px)">
                    <img src="{{ asset('images/Bob/Airspeed Oxford.png') }}" alt="Airspeed Oxford">
                </picture>
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