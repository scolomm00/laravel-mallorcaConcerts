<div class="faqs">
    @if(isset($faqs))
        @foreach($faqs as $faq)
            <div class="box-faqs">
                <div class="faq" data-num="{{$faq->title}}">
                    <span>{{$faq->title}}</span>
                    <div class="icon-svg">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M7,10L12,15L17,10H7Z" />
                        </svg>
                    </div>
                </div>
                <div class="faq-content" data-num="{{$faq->title}}">
                    {!!$faq->description!!}
                </div>
            </div>
        @endforeach
    @endif
</div>