@if($agent->isDesktop())
    <script type="module" src="{{mix('front/desktop/js/app.js')}}"></script>
@endif

@if($agent->isMobile())
    <script type="module" src="{{mix('front/mobile/js/app.js')}}"></script>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Roboto Condensed', 'Roboto']
        }
    });        
</script>
