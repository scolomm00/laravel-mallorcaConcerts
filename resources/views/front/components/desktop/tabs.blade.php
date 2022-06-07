<div class="box-tabs-content">
    <div class="tabs">
        <div class="tab active" data-num="one">Descripción</div>
        <div class="tab" data-num="two">Características</div>
        <div class="tab" data-num="three">Opiniones</div>
    </div>
    <div class="tabs-content">
        <div class="tab-content active" data-num="one">
            <p>{!!$product->description!!}</p>
        </div>
        <div class="tab-content" data-num="two">
            <p>{!!$product->features!!}</p>
        </div>
        <div class="tab-content" data-num="three">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy.
            </p>
        </div>
    </div>
</div>