@extends('backend.layouts.master')

@section('title')
    J4C Group | Edit Services
@endsection

@push('styles')
@endpush

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Edit Services</h4>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('services.index') }}">Services</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body add-post">
                            <form method="POST" action="{{ route('services.update', $service->id) }}" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <input type="hidden" name="id" value="{{ $service->id }}">

                                <div class="pd-20 card-box mb-30">

                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2"><b>Service Name : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <input type="text" name="service_name" id="service_name" class="form-control @error('service_name') is-invalid @enderror" value="{{ $service->service_name }}" placeholder="Enter Service Name.">
                                            @error('service_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="col-sm-2"><b>Service Slug : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <input type="text" readonly name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ $service->slug }}" placeholder="Enter Service Slug.">
                                            @error('slug')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2"><b>Upload Service Image : </b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <input type="file" onchange="serviceImagePreviewFile()" accept=".png, .jpg, .jpeg, .webp" name="service_image" id="service_image" class="form-control @error('service_image') is-invalid @enderror" value="{{ $service->service_image }}" placeholder="Upload Image.">
                                            <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                                            <br>
                                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png, .webp format can be uploaded .</b></small>
                                            <br>
                                            @error('service_image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div id="preview-container">
                                                <div id="file-preview"></div>
                                            </div>
                                            @if(!empty($service->service_image))
                                                <img src="{{ asset('/j4c_Group/service/service_image/' . $service->service_image) }}" alt="Banner Image" style="width: 400px; height: 200px;">
                                            @endif
                                        </div>

                                        <label class="col-sm-2"><b>Upload Service Icon : </b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <input type="file" onchange="serviceIconPreviewFile()" accept=".png, .jpg, .jpeg, .webp" name="service_icon" id="service_icon" class="form-control @error('service_icon') is-invalid @enderror" value="{{ $service->service_icon }}" placeholder="Upload Service Icon.">
                                            <small class="text-secondary"><b>Note : The file size  should be less than 2MB .</b></small>
                                            <br>
                                            <small class="text-secondary"><b>Note : Only files in .jpg, .jpeg, .png, .webp format can be uploaded .</b></small>
                                            <br>
                                            @error('service_icon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div id="preview-service-icon-container">
                                                <div id="file-service-icon-preview"></div>
                                            </div>
                                            @if(!empty($service->service_icon))
                                                <img src="{{ asset('/j4c_Group/service/service_icon/' . $service->service_icon) }}" alt="Banner Image" style="width: 80px; height: 100px;">
                                            @endif
                                        </div>                                        
                                    </div>

                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2"><b>Status : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <select name="status" id="status" class="myselect form-control @error('status') is-invalid @enderror">
                                                <option value=" " >Select Status</option>
                                                <optgroup label="Status">
                                                    <option value="1" {{ $service->status == '1' ? 'selected' : '' }}>Active</option>
                                                    <option value="2" {{ $service->status == '2' ? 'selected' : '' }}>Inactive</option>
                                                </optgroup>
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-4">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                                            <a href="{{ route('services.index') }}" class="btn btn-danger"><b>Cancel</b></a>&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-success"><b>Submit</b></button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

@push('scripts')
{{-- Select2 JS --}}
<script type="text/javascript">
    $(".myselect").select2();
</script>

<script>
    // Existing function for service image/PDF preview (if needed)
    function serviceImagePreviewFile() {
        const fileInput = document.getElementById('service_image');
        const previewContainer = document.getElementById('preview-container');
        const filePreview = document.getElementById('file-preview');
        const file = fileInput.files[0];

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="height: auto; width: 100%;">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview using an embed element
                filePreview.innerHTML =
                    `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="150px" />`;
            } else {
                // Unsupported file type
                filePreview.innerHTML = '<p>Unsupported file type</p>';
            }

            previewContainer.style.display = 'block';
        } else {
            // No file selected
            previewContainer.style.display = 'none';
        }
    }

    // Existing function for service image/PDF preview (if needed)
    function serviceIconPreviewFile() {
        const fileInput = document.getElementById('service_icon');
        const previewContainer = document.getElementById('preview-service-icon-container');
        const filePreview = document.getElementById('file-service-icon-preview');
        const file = fileInput.files[0];

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="height: auto; width: 100%;">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview using an embed element
                filePreview.innerHTML =
                    `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="150px" />`;
            } else {
                // Unsupported file type
                filePreview.innerHTML = '<p>Unsupported file type</p>';
            }

            previewContainer.style.display = 'block';
        } else {
            // No file selected
            previewContainer.style.display = 'none';
        }
    }
</script>

{{-- Service Name Slug --}}
<script>
    document.getElementById('service_name').addEventListener('input', function () {
        const service_name = this.value;
        const slug = service_name
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '') // Remove invalid characters
            .trim()                       // Remove whitespace from both sides
            .replace(/\s+/g, '-');        // Replace spaces with dashes
        document.getElementById('slug').value = slug;
    });
</script>
@endpush
