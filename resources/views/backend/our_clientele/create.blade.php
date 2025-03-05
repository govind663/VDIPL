@extends('backend.layouts.master')

@section('title')
    J4C Group | Add Clientele
@endsection

@push('styles')
@endpush

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Add Clientele</h4>
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
                                <a href="{{ route('our-clientele.index') }}">Our Clientele</a>
                            </li>
                            <li class="breadcrumb-item active">Add Clientele</li>
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
                            <form method="POST" action="{{ route('our-clientele.store') }}" class="form-horizontal" enctype="multipart/form-data">
                                @csrf

                                <div class="pd-20 card-box mb-30">
                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2"><b>Clientele Name : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <input type="text" name="clientele_name" id="clientele_name" class="form-control @error('clientele_name') is-invalid @enderror" value="{{ old('clientele_name') }}" placeholder="Enter Clientele Name.">
                                            @error('clientele_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="col-sm-2"><b>Status : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <select name="status" id="status" class="myselect form-control @error('status') is-invalid @enderror">
                                                <option value=" " >Select Status</option>
                                                <optgroup label="Status">
                                                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                                    <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>Inactive</option>
                                                </optgroup>
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3 p-3">
                                        <table class="table table-bordered p-3" id="dynamicClienteleTable">
                                            <thead>
                                                <tr>
                                                    <th><b>Uploaded Clientele Image : <span class="text-danger">*</span></b></th>
                                                    <th><b>Action</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(old('clientele_image'))
                                                    @foreach(old('clientele_image') as $index => $value)
                                                        <tr>
                                                            <td>
                                                                <input type="file" id="clientele_image_{{ $index }}" onchange="clienteleImagePreviewFile({{ $index }})" 
                                                                    accept=".png, .jpg, .jpeg, .webp" name="clientele_image[]" 
                                                                    class="form-control @error("clientele_image.$index") is-invalid @enderror"
                                                                    multiple>
                                                
                                                                <small class="text-secondary"><b>Note: The file size should be less than 2MB.</b></small>
                                                                <br>
                                                                <small class="text-secondary"><b>Note: Only files in .jpg, .jpeg, .png, .webp format can be uploaded.</b></small>
                                                                <br>
                                                                <div id="preview-container-{{ $index }}" style="display: none;">
                                                                    <div id="file-preview-{{ $index }}"></div>
                                                                </div>                                                                
                                                                @error("clientele_image.$index")
                                                                    <span class="invalid-feedback d-block" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger removeClienteleRow"><b>Remove</b></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>
                                                            <input type="file" id="clientele_image_0" onchange="clienteleImagePreviewFile(0)" accept=".png, .jpg, .jpeg, .webp" name="clientele_image[]" class="form-control @error("clientele_image.*") is-invalid @enderror" multiple required>
                                                            <small class="text-secondary"><b>Note: The file size should be less than 2MB.</b></small>
                                                            <br>
                                                            <small class="text-secondary"><b>Note: Only files in .jpg, .jpeg, .png, .webp format can be uploaded.</b></small>
                                                            <br>
                                                            <div id="preview-container-0" style="display: none;">
                                                                <div id="file-preview-0"></div>
                                                            </div>
                                                            @error("clientele_image.*")
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary" id="addClienteleRow"><b>Add More</b></button>
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="form-group row mt-4">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                                            <a href="{{ route('our-clientele.index') }}" class="btn btn-danger"><b>Cancel</b></a>&nbsp;&nbsp;
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
    // Add more clientele_image rows
    $(document).ready(function () {
        let rowId = $('table#dynamicClienteleTable tbody tr').length - 1; // Get the number of existing rows

        // Handle Laravel validation errors on page load
        @if($errors->any())
            let errors = @json($errors->toArray());
            Object.keys(errors).forEach(function (key) {
                if (key.startsWith("clientele_image.")) {
                    let index = key.split(".")[1]; // Extract index from "clientele_image.X"
                    let errorMsg = errors[key][0];

                    // Show error message inside the respective input field
                    let inputField = $(`#clientele_image_${index}`);
                    inputField.addClass('is-invalid');
                    inputField.after(`<div class="invalid-feedback d-block">${errorMsg}</div>`);
                }
            });
        @endif

        // Add a new row dynamically
        $('#addClienteleRow').click(function () {
            rowId++;
            const newRow = `
                <tr>
                    <td>
                        <input type="file" id="clientele_image_${rowId}" onchange="clienteleImagePreviewFile(${rowId})" 
                            accept=".png, .jpg, .jpeg, .webp" name="clientele_image[]" class="form-control" multiple>
                        
                        <small class="text-secondary"><b>Note: The file size should be less than 2MB.</b></small>
                        <br>
                        <small class="text-secondary"><b>Note: Only files in .jpg, .jpeg, .png, .webp format can be uploaded.</b></small>
                        <br>
                        <div id="preview-container-${rowId}" style="display: none;">
                            <div id="file-preview-${rowId}"></div>
                        </div>
                        <div class="invalid-feedback d-block" id="error-clientele_image_${rowId}"></div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger removeClienteleRow">Remove</button>
                    </td>
                </tr>`;
            $('#dynamicClienteleTable tbody').append(newRow);
        });

        // Remove row dynamically
        $(document).on('click', '.removeClienteleRow', function () {
            $(this).closest('tr').remove();
        });
    });
    
    // Preview clientele_image
    function clienteleImagePreviewFile(rowId) {
        const fileInput = document.getElementById(`clientele_image_${rowId}`);
        const previewContainer = document.getElementById(`preview-container-${rowId}`);
        const filePreview = document.getElementById(`file-preview-${rowId}`);
        const file = fileInput.files[0];

        if (!fileInput || !previewContainer || !filePreview) return; // Guard clause

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            const validPdfTypes = ['application/pdf'];

            if (validImageTypes.includes(fileType)) {
                // Image preview
                const reader = new FileReader();
                reader.onload = function (e) {
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="width:200px; height:100px;">`;
                };
                reader.readAsDataURL(file);
            } else if (validPdfTypes.includes(fileType)) {
                // PDF preview
                filePreview.innerHTML = `<embed src="${URL.createObjectURL(file)}" type="application/pdf" width="100%" height="100px" />`;
            } else {
                // Unsupported file type
                filePreview.innerHTML = '<p>Unsupported file type</p>';
                filePreview.innerHTML += `<p>Please select a valid image or PDF file.</p>`;
            }

            previewContainer.style.display = 'block';
        } else {
            // No file selected
            previewContainer.style.display = 'none';
        }
    }
</script>
@endpush
