@extends('layouts.app')
@section('title', 'Book of Remembrance')
@section('data-page', 'bor')

@section('content')
<main>
    <section id="bor-hero" class="grid-con">
        <h1 id="mobile-bor-heading" class="sub-headings col-span-full">Book of Remembrance</h1>
        <div id="bor-content" class="col-span-full">
            <div id="bor-text-container">
                <h2 id="bor-heading" class="sub-headings col-span-full">Book of Remembrance</h2>
                <p class="bor-text col-span-full">During the Second World War, aviation training was an essential but dangerous part of the Allied war effort. In London, Ontario, British Commonwealth Air Training Plan (BCATP) schools operated at a rapid pace, preparing aircrew for service overseas. Although these men and women were not always engaged in active combat, the risks they faced were very real. Aircraft accidents, mechanical failures, and demanding flight conditions resulted in the loss of many trainees and instructors. The Book of Remembrance serves as a lasting tribute to those who lost their lives during aviation training in and around London. It records the names of aircrew members, instructors, and support personnel who made the ultimate sacrifice while preparing to defend freedom. Each name represents an individual story of service, courage, and commitment. This memorial reminds visitors that victory in the air depended not only on those who flew in combat but also on those who trained, taught, and supported them. The Book of Remembrance ensures that their contributions are not forgotten and that their sacrifices are acknowledged with dignity and respect.</p>
            </div>
            <div id="bor-books" class="col-span-full">
                <div id="bor-book-4" class="bor-book">
                    <a href="#book-1-section"><img src="{{ asset('images/Bor/book1_cover.png') }}" alt="In Memory of BCATP Trainees & Instructors Book Cover"></a>
                </div>
                <div id="book-container">
                    <div id="bor-book-1" class="bor-book">
                        <a href="#book-1-section"><img src="{{ asset('images/Bor/book1_cover.png') }}" alt="Book 1 Cover"></a>
                    </div>
                    <div id="bor-book-2" class="bor-book">
                        <a href="#book-2-section"><img src="{{ asset('images/Bor/book2_cover.png') }}" alt="Book 2 Cover"></a>
                    </div>
                    <div id="bor-book-3" class="bor-book">
                        <a href="#book-3-section"><img src="{{ asset('images/Bor/book3_cover.png') }}" alt="Book 3 Cover"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="books-section" class="grid-con">
        <h1 class="hidden">Books</h1>
        <div id="books" class="col-span-full">

            <div id="book-1-section" class="book-section">
                <div id="book-1-cover" class="book-cover">
                    <img src="{{ asset('images/Bor/book1_cover.png') }}" alt="Book 1 Cover">
                </div>
                <div id="book-1-container" class="book-text-container">
                    <p class="book-sub-heading">Section One · Those Lost in Training</p>
                    <h2 class="book-heading">In Memory of BCATP Trainees & Instructors</h2>
                    <p class="book-text">The Book of Remembrance records the names of aircrew members, instructors, and support personnel who made the ultimate sacrifice while preparing to defend freedom at London's BCATP schools. Each entry includes the individual's name, rank, squadron, date of loss, service number, and — where available — a portrait photograph and account of the circumstances of their loss.</p>
                    <ul class="book-points">
                        <li class="book-list">Individual profile pages with portraits and service histories</li>
                        <li class="book-list">Service information and circumstances of each loss recorded</li>
                        <li class="book-list">Links to additional historical records from Western University</li>
                        <li class="book-list">Archives and RCAF official records</li>
                        <li class="book-list">Honouring both Canadian trainees and international</li>
                        <li class="book-list">Commonwealth aircrew who trained at Crumlin Airport</li>
                    </ul>
                </div>
            </div>

            <section id="bor-viewer" class="hidden col-span-full">
                <h2 class="sub-headings">Pilot Records</h2>
                <input
                    type="text"
                    id="pilot-search-input"
                    placeholder="Search by last name..."
                    style="margin:20px 0; padding:10px; width:100%; max-width:400px;"
                />
                <div id="pilot-grid"></div>
            </section>

            <div id="book-2-section" class="book-section">
                <div id="book-2-cover" class="book-cover">
                    <img src="{{ asset('images/Bor/book2_cover.png') }}" alt="Book 2 Cover">
                </div>
                <div id="book-2-container" class="book-text-container">
                    <p class="book-sub-heading">Section Two · Londoners & the Battle of Britain</p>
                    <h2 class="book-heading">How London Helped Turn the Tide in History</h2>
                    <p class="book-text">The Battle of Britain (July–October 1940) was a key WWII turning point and the first major air campaign. London, Ontario supported the effort through aircrew training, with locals serving as pilots, navigators, and ground crew. The skills developed in Canadian training schools supported the Royal Air Force during a critical time, highlighting how London's aviation history connects to broader global events.</p>
                    <ul class="book-points">
                        <li class="book-list">Individual biographies and service records of Londoners who served</li>
                        <li class="book-list">Aircraft they flew — Hawker Hurricanes and Supermarine Spitfires</li>
                        <li class="book-list">Combat records and decorations received</li>
                    </ul>
                </div>
            </div>

            <div id="book-3-section" class="book-section">
                <div id="book-3-cover" class="book-cover">
                    <img src="{{ asset('images/Bor/book3_cover.png') }}" alt="Book 3 Cover">
                </div>
                <div id="book-3-container" class="book-text-container">
                    <p class="book-sub-heading">Section Three · About This Project</p>
                    <h2 class="book-heading">Sources & Acknowledgements</h2>
                    <p class="book-text">The Book of Remembrance is a product of the museum's Student Capstone / Final Integrated Project (FIP), developed in partnership with 427 Wing RCAF Association. The database draws on archival research, historical records, and community contributions to build a comprehensive and enduring memorial to those who served.</p>
                    <ul class="book-points">
                        <li class="book-list">Western University Archives — primary photographic and documentary source</li>
                        <li class="book-list">Ron Nelson Collection (A18-016-027) — key historical images and records</li>
                        <li class="book-list">RCAF Official Records — service histories, ranks, and squadron assignments</li>
                        <li class="book-list">Local historical societies and national archives</li>
                        <li class="book-list">Special thanks to museum curators, historians, veterans' families, and community supporters</li>
                    </ul>
                </div>
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