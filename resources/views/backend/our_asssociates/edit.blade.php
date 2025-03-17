@extends('backend.layouts.master')

@section('title')
    J4C Group | Add Associates
@endsection

@push('styles')
@endpush

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Add Associates</h4>
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
                                <a href="{{ route('our-associates.index') }}">Our Associates</a>
                            </li>
                            <li class="breadcrumb-item active">Add Associates</li>
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
                            <form method="POST" action="{{ route('our-associates.update', $our_associates->id) }}" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="id" value="{{ $our_associates->id }}">

                                <div class="pd-20 card-box mb-30">

                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2"><b>Associates Name : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <input type="text" name="associate_name" id="associate_name" class="form-control @error('associate_name') is-invalid @enderror" value="{{ $our_associates->associate_name }}" placeholder="Enter Associates Name.">
                                            @error('associate_name')
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
                                                    <option value="1" {{ $our_associates->status == '1' ? 'selected' : '' }}>Active</option>
                                                    <option value="2" {{ $our_associates->status == '2' ? 'selected' : '' }}>Inactive</option>
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
                                        <div class="d-flex justify-content-end mb-2">
                                            <button type="button" class="btn btn-primary" id="addAmenitiesRow"><b>Add More</b></button>
                                        </div>
                                        <table class="table table-bordered p-3" id="dynamicAmenitiesTable">
                                            <thead>
                                                <tr>
                                                    <th><b>Uploaded Associates Image : <span class="text-danger">*</span></b></th>
                                                    <th><b>Action</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $associateImage = json_decode($our_associates->associate_image, true) ?? [];
                                                    $oldAssociateImages = old('associate_image', []);
                                                @endphp

                                                {{-- Display Existing Banner Images --}}
                                                @if(!empty($associateImage))
                                                    @foreach($associateImage as $index => $image)
                                                        <tr>
                                                            <td>
                                                                <img src="{{ asset('/j4c_Group/our_associates/associate_image/' . $image) }}" alt="Uploaded Banner Image" style="width:300px !important; height:150px !important;" class="img-thumbnail">
                                                                <input type="hidden" name="existing_associate_image[]" value="{{ $image }}">
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger removeRow"><b>Remove</b></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif

                                                {{-- Display Newly Uploaded Images --}}
                                                @if($oldAssociateImages)
                                                    @foreach($oldAssociateImages as $index => $value)
                                                        <tr>
                                                            <td>
                                                                <input type="file" id="associate_image_{{ $index }}" onchange="previewFiles({{ $index }})" accept=".png, .jpg, .jpeg, .webp, .pdf" name="associate_image[]" class="form-control @error('associate_image.' . $index) is-invalid @enderror">
                                                                <small class="text-secondary"><b>Note: The file size should be less than 2MB.</b></small><br>
                                                                <small class="text-secondary"><b>Note: Only .jpg, .jpeg, .png, .webp, .pdf files allowed.</b></small><br>
                                                                <div id="preview-container-{{ $index }}" style="display: none;">
                                                                    <div id="file-preview-{{ $index }}"></div>
                                                                </div>
                                                                @error('associate_image.' . $index)
                                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                                @enderror
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger removeRow">Remove</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="form-group row mt-4">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                                            <a href="{{ route('our-associates.index') }}" class="btn btn-danger"><b>Cancel</b></a>&nbsp;&nbsp;
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
    $(document).ready(function () {
        let rowId = $('table#dynamicAmenitiesTable tbody tr').length;

        // Add a new row
        $('#addAmenitiesRow').click(function () {
            rowId++;
            const newRow = `
                <tr>
                    <td>
                        <input type="file" id="associate_image_${rowId}" onchange="previewFiles(${rowId}, 'image')" accept=".png, .jpg, .jpeg, .webp" name="associate_image[]" class="form-control">
                        <small class="text-secondary"><b>Note: The file size should be less than 2MB.</b></small>
                        <br>
                        <small class="text-secondary"><b>Note: Only files in .jpg, .jpeg, .png, .webp format can be uploaded.</b></small>
                        <br>
                        <div id="preview-container-${rowId}" style="display: none;">
                            <div id="file-preview-${rowId}"></div>
                            <small class="text-danger" id="iassociate_image-error-${rowId}"></small>
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger removeRow">Remove</button>
                    </td>
                </tr>`;
            $('#dynamicAmenitiesTable tbody').append(newRow);
        });

        // Remove a row
        $(document).on('click', '.removeRow', function () {
            $(this).closest('tr').remove();
        });
    });

    // Preview associate_image
    function previewFiles(rowId) {
        const fileInput = document.getElementById(`associate_image_${rowId}`);
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
                    filePreview.innerHTML = `<img src="${e.target.result}" alt="File Preview" style="width:300px; height:150px;">`;
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
