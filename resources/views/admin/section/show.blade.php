@extends('admin.main', ['title' => $section['name']])

@section('main-content')
    <div class="rounded-sm shadow-sm">
        <div class="w-full flex flex-row bg-white font-poppins border">
            <a href="{{ url('admin') }}" class="w-20 flex items-center justify-center bg-white transition duration-200 ease hover:bg-pink-600 hover:text-white cursor-pointer">
                <i class="fas fa-long-arrow-alt-left text-xl"></i>
            </a>
            <div class="flex-1 px-5 py-4 flex flex-row justify-between items-center">
                <h2>{{ $section['name'] }}</h2>
                <div class="flex flex-row items-center cursor-pointer rounded-3xl bg-pink-cherie text-white py-2.5 px-8 shadow-md transition duration-200 ease hover:bg-opacity-80"
                     data-micromodal-trigger="modal-item-add">
                    <i class="fas fa-plus pr-2"></i>
                    <span>Adicionar Prato</span>
                </div>
            </div>
        </div>
        <div class="w-full bg-white">
            <ul>
                @foreach($section->sectionItems as $item)
                    <x-item :item=$item />
                @endforeach
            </ul>
        </div>
    </div>
    <x-modal.item-add :section=$section />

    <script>
        let itemImage = document.getElementById('item-image');
        let imagePreview = document.getElementById('image-preview');

        itemImage.addEventListener('change', function() {
            const file = this.files[0];

            console.log(file);

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    console.log(this.result);

                    imagePreview.style.backgroundImage = `url('${this.result}')`;
                    imagePreview.style.display = 'block';
                });

                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
