<div class="form-button">
    <div class="form-button-reset" data-url="{{route('faqs_create')}}">
        <button>
            <svg viewBox="0 0 24 24">
                <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
            </svg>Borrar
        </button>
    </div>
    <div class="form-button-update" data-url="{{route('faqs_store')}}">
        <button class="store-button">
            <svg viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
            </svg>Guardar
        </button>
    </div>
    <div class="form-button-on-off">
        <label class="button">
            <input type="checkbox" class="switch ios">
        </label>
    </div>
</div>