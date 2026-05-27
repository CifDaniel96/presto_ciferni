<div>
    @if (session()->has('success'))
        <div class="alert alert-success text-center shadow rounded">
            {{ session('success') }}
        </div>
    @endif

    <form class="form-card" wire:submit="store">
        <div class="mb-4">
            <label for="title" class="form-label fw-bold">
                {{ __('ui.title') }}
            </label>

            <input 
                type="text" 
                class="form-control form-control-lg @error('title') is-invalid @enderror" 
                id="title"
                wire:model.blur="title"
            >

            @error('title')
                <p class="fst-italic text-danger mt-2 mb-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="form-label fw-bold">
                {{ __('ui.description') }}
            </label>

            <textarea 
                id="description" 
                rows="6"
                class="form-control @error('description') is-invalid @enderror"
                wire:model.blur="description"
            ></textarea>

            @error('description')
                <p class="fst-italic text-danger mt-2 mb-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="form-label fw-bold">
                {{ __('ui.price') }}
            </label>

            <input 
                type="text" 
                class="form-control form-control-lg @error('price') is-invalid @enderror" 
                id="price"
                wire:model.blur="price"
            >

            @error('price')
                <p class="fst-italic text-danger mt-2 mb-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category" class="form-label fw-bold">
                {{ __('ui.categories') }}
            </label>

            <select 
                id="category" 
                wire:model.blur="category"
                class="form-control form-control-lg @error('category') is-invalid @enderror"
            >
                <option value="" selected>
                    {{ __('ui.selectCategory') }}
                </option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ __('ui.' . $category->name) }}
                    </option>
                @endforeach
            </select>

            @error('category')
                <p class="fst-italic text-danger mt-2 mb-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold">
                {{ __('ui.uploadImages') }}
            </label>

            <input 
                type="file" 
                wire:model.live="temporary_images" 
                multiple
                class="form-control form-control-lg @error('temporary_images.*') is-invalid @enderror"
            >

            @error('temporary_images.*')
                <p class="fst-italic text-danger mt-2 mb-0">{{ $message }}</p>
            @enderror

            @error('temporary_images')
                <p class="fst-italic text-danger mt-2 mb-0">{{ $message }}</p>
            @enderror
        </div>

        @if (!empty($images))
            <div class="image-preview-box mb-4">
                <p class="fw-bold mb-3">
                    {{ __('ui.photoPreview') }}
                </p>

                <div class="row g-4 justify-content-center">
                    @foreach ($images as $key => $image)
                        <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                            <div 
                                class="img-preview"
                                style="background-image: url({{ $image->temporaryUrl() }});"
                            ></div>

                            <button 
                                type="button" 
                                class="btn btn-danger btn-sm rounded-pill mt-3 px-3"
                                wire:click="removeImage({{ $key }})"
                            >
                                X
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-presto">
                {{ __('ui.create') }}
            </button>
        </div>
    </form>
</div>