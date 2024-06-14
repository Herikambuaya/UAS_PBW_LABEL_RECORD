<!-- nav.blade.php -->
<div class="shadow-lg p-3 mb-5 bg-body rounded col-md-2 bg-light d-flex flex-column">
    <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link {{($key== 'home') ? 'active' : ''}} " id="v-pills-home-tab" href="/">Home</a>
        <a class="nav-link {{($key== 'masterdata') ? 'active' : ''}}" id="v-pills-masterdata-tab" href="/masterdata">Labels</a>
        <a class="nav-link {{($key== 'about') ? 'active' : ''}}" id="v-pills-about-tab" href="/about">About</a>
        <a class="nav-link {{($key== 'faq') ? 'active' : ''}}" id="v-pills-faq-tab" href="/faq">Faq</a>
    </div>
</div>
