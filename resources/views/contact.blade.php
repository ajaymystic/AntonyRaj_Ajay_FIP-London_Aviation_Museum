@extends('layouts.app')
@section('title', 'Contact Us!')
@section('data-page', 'contact')

@section('content')
<main>
    <section id="contact-section" class="grid-con">
        <div id="contact-content" class="col-span-full l-col-start-1 l-col-end-13">
            <h2 class="contact-header">Contact!</h2>
            <p id="contact-text">Get in touch with 427 Wing's Museum, located in the historic 1943 airmen's canteen at London International Airport. Whether you have questions about visiting, supporting the museum, volunteering, or learning more about the British Commonwealth Air Training Plan and the nearly 250 local men who served with the RCAF during the Second World War, we're here to help.</p>

            <div id="contact-feedback"></div>

            <form id="contact-form">
                <div id="form">
                    <input type="text" placeholder="Name *" class="field" name="first_name" id="first_name" required aria-label="First Name">
                    <br>
                    <input type="text" placeholder="Last Name *" class="field" name="last_name" id="last_name" required aria-label="Last Name">
                    <br>
                    <input type="email" placeholder="Email *" class="field" name="email" id="email" required aria-label="Email Address">
                    <br>
                </div>
                <textarea id="message" placeholder="Message *" class="field" name="message" required aria-label="Your Message"></textarea>
            </form>

            <button id="submit-btn" form="contact-form" type="submit" aria-label="Submit contact form">Submit !</button>
        </div>
    </section>
</main>
@endsection