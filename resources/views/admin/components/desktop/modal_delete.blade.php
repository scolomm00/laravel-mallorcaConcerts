<div class="delete">
    <div class="delete-title">
        <span>¿Estás seguro que deseas eliminar este elemento?</span>
    </div>
    <div class="box-buttons">
        <div class="button-yes">
            <button class="button-yes-delete" data-url="{{route('faqs_destroy', ['faq'=>$faq_element->id])}}">Sí</button>
        </div>
        <div class="button-no">
            <button class="button-no-delete">No</button>
        </div>
    </div>
    
</div>