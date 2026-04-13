@extends('layouts.app')
@section('title', 'Events — London Aviation Museum')
@section('data-page', 'events')
@section('head-extra')
<style>
    :root {
        --color-surface: #1a1a1a;
        --color-border: #333;
        --color-accent: #A08B63;
    }
    #events-hero {
        background-color: #0C0E0C;
        color: white;
    }
    #events-hero p {
        color: rgba(255,255,255,0.65);
    }
    #events-section {
        background-color: #0C0E0C;
        color: white;
    }
</style>

@section('content')
<section id="events-hero">
    <h1>Events</h1>
    <p>Lectures, exhibitions, and commemorations at the London Aviation Museum.</p>
</section>

<section id="events-section">
    <div class="events-tabs">
        <button class="tab-btn active" data-tab="upcoming">Upcoming</button>
        <button class="tab-btn" data-tab="past">Past Events</button>
        <button class="tab-btn" data-tab="all">All Events</button>
    </div>
    <div class="events-grid" id="events-grid">
        <p style="opacity:0.5;">Loading events...</p>
    </div>
</section>

<script>
const API     = '/api/events';
const today   = new Date().toISOString().split('T')[0];
let allEvents = [];
let activeTab = 'upcoming';

function formatDate(d) {
    const parts  = d.split('-');
    const year   = parts[0];
    const month  = parseInt(parts[1], 10);
    const day    = parseInt(parts[2], 10);
    const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    return months[month - 1] + ' ' + day + ', ' + year;
}

function formatTime(t) {
    const parts = t.split(':');
    const h     = parseInt(parts[0], 10);
    const m     = parts[1];
    let ampm    = 'AM';
    let hour    = h;
    if (h >= 12) {
        ampm = 'PM';
    }
    if (h > 12) {
        hour = h - 12;
    }
    if (h === 0) {
        hour = 12;
    }
    return hour + ':' + m + ' ' + ampm;
}

function escHtml(s) {
    return String(s).split('&').join('&amp;').split('<').join('&lt;').split('>').join('&gt;').split('"').join('&quot;');
}

function buildCard(e) {
    let isPast = false;
    if (e.event_date < today) {
        isPast = true;
    }

    let badgeClass = 'event-badge';
    if (isPast) {
        badgeClass = 'event-badge past';
    }

    let badgeLabel = 'Upcoming';
    if (isPast) {
        badgeLabel = 'Past';
    }

    let imgHtml = '<div class="event-img-placeholder">✈</div>';
    if (e.featured_image_url) {
        imgHtml = '<img src="' + escHtml(e.featured_image_url) + '" alt="' + escHtml(e.title) + '" loading="lazy">';
    }

    let timePart = '';
    if (e.event_time) {
        timePart = ' · ' + formatTime(e.event_time);
    }

    let locationPart = '';
    if (e.location) {
        locationPart = '<span>📍 ' + escHtml(e.location) + '</span>';
    }

    return '<article class="event-card">' +
        '<div class="event-img">' + imgHtml + '</div>' +
        '<div class="event-body">' +
        '<span class="' + badgeClass + '">' + badgeLabel + '</span>' +
        '<div class="event-meta">' +
        '<span>📅 ' + formatDate(e.event_date) + timePart + '</span>' +
        locationPart +
        '</div>' +
        '<h2 class="event-title">' + escHtml(e.title) + '</h2>' +
        '<p class="event-desc">' + escHtml(e.description) + '</p>' +
        '</div>' +
        '</article>';
}

function render() {
    const grid = document.querySelector('#events-grid');
    let events = allEvents;

    if (activeTab === 'upcoming') {
        events = allEvents.filter(function(e) { return e.event_date >= today; });
    }

    if (activeTab === 'past') {
        events = allEvents.filter(function(e) { return e.event_date < today; }).reverse();
    }

    if (!events.length) {
        grid.innerHTML = '<div class="no-events"><p>No ' + activeTab + ' events found.</p></div>';
        return;
    }

    let html = '';
    let i    = 0;
    while (i < events.length) {
        html += buildCard(events[i]);
        i++;
    }
    grid.innerHTML = html;
}

function handleTabClick() {
    const tabs = document.querySelectorAll('.tab-btn');
    let j      = 0;
    while (j < tabs.length) {
        tabs[j].classList.remove('active');
        j++;
    }
    this.classList.add('active');
    activeTab = this.dataset.tab;
    render();
}

async function init() {
    const res = await fetch(API);
    allEvents = await res.json();
    render();
}

const tabBtns = document.querySelectorAll('.tab-btn');
let k         = 0;
while (k < tabBtns.length) {
    tabBtns[k].addEventListener('click', handleTabClick);
    k++;
}

init();
</script>
@endsection