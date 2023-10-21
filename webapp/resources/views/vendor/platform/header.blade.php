@push('head')
    <meta name="robots" content="noindex" />
    <link
        href="{{ asset('/vendor/custom/logo.png') }}"
        sizes="any"
        type="image/svg+xml"
        id="favicon"
        rel="icon"
    >

    <!-- For Safari on iOS -->
    <meta name="theme-color" content="#21252a">
@endpush

<div class="h2 fw-light d-flex align-items-center">
{{--    <x-orchid-icon path="orchid" width="1.2em" height="1.2em"/>--}}
    <img src="{{ asset('/vendor/custom/logo.png') }}" style="width: 1.2em;height: auto;"/>

    <p class="ms-3 my-0 d-none d-sm-block">
        {{ config('app.name') }}
        <small class="align-top opacity">Orchid</small>
    </p>
</div>
