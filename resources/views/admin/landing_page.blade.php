@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Landing Page Management</h3>
            <button class="btn btn-primary shadow-sm" onclick="addNewItem()">+ Add Section</button>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4">Page Name</th>
                                <th>Type</th>
                                <th>Section Image</th>
                                <th>Image</th>
                                <th>Text Content</th>
                                <th class="text-end pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <div class="modal fade" id="itemModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form id="itemForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="item_db_id" id="item_db_id">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header border-0 pt-4 px-4">
                        <h5 class="modal-title fw-bold">Update Content</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Main Text Content</label>
                            <textarea name="text" id="text" class="form-control bg-light" rows="3"></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-bold">Main Section Image</label>
                            <input type="file" name="image_file" class="form-control bg-light">
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-bold">Image to change</label>
                            <input type="file" name="change_image_file" class="form-control bg-light">
                        </div>

                        <div id="card_section_wrapper" style="display: none;">
                            <hr class="my-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <label class="form-label small fw-bold text-primary mb-0">Component Cards</label>
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="addCardRow()">+ Add
                                    Card</button>
                            </div>
                            <div id="card_repeater_container"></div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pb-4 px-4">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 text-center position-relative">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" style="z-index: 1051;"></button>
                    <img src="" id="previewImageSource" class="img-fluid rounded shadow-lg"
                        style="max-height: 85vh; cursor: zoom-out;" data-bs-dismiss="modal">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const itemModal = new bootstrap.Modal('#itemModal');
        const imagePreviewModal = new bootstrap.Modal('#imagePreviewModal');

        // Function to show image in big size
        function viewFullImage(url) {
            if (!url || url.includes('placeholder.png')) return;
            $('#previewImageSource').attr('src', url);
            imagePreviewModal.show();
        }

        function addCardRow(data = null) {
            const id = Date.now() + Math.floor(Math.random() * 100);
            const rowHtml = `
                <div class="card border mb-3 p-3 shadow-sm position-relative" id="row_${id}">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-3">
                            ${data && data.image ? `<img src="${data.image}" width="40" class="rounded mb-1 d-block border img-thumbnail" style="cursor:pointer" onclick="viewFullImage('${data.image}')">` : ''}
                            <label class="x-small fw-bold">Card Image</label>
                            <input type="file" name="card_images[]" class="form-control form-control-sm">
                            <input type="hidden" name="existing_card_images[]" value="${data ? data.image : ''}">
                        </div>
                        <div class="col-md-4">
                            <label class="x-small fw-bold">Title</label>
                            <input type="text" name="card_titles[]" class="form-control form-control-sm" value="${data ? data.title : ''}" placeholder="Title">
                        </div>
                        <div class="col-md-4">
                            <label class="x-small fw-bold">Desc</label>
                            <input type="text" name="card_descs[]" class="form-control form-control-sm" value="${data ? data.desc : ''}" placeholder="Description">
                        </div>
                        <div class="col-md-1 text-end">
                            <button type="button" class="btn btn-link text-danger p-0" onclick="$('#row_${id}').remove()">
                                <i data-lucide="trash-2"></i>
                            </button>
                        </div>
                    </div>
                </div>`;
            $('#card_repeater_container').append(rowHtml);
            lucide.createIcons();
        }

        function addNewItem() {
            $('#itemForm')[0].reset();
            $('#item_db_id').val('');
            $('#card_repeater_container').empty();
            $('#card_section_wrapper').hide();
            itemModal.show();
        }

        function editItem(id) {
            $.get(`/admin/landing-page/edit/${id}`, function (item) {
                $('#item_db_id').val(item.id);
                $('#text').val(item.text);
                $('#card_repeater_container').empty();

                if (item.item_type === 'card') {
                    $('#card_section_wrapper').show();
                    let cardData = item.card_json ? (typeof item.card_json === 'string' ? JSON.parse(item.card_json) : item.card_json) : [];
                    if (Array.isArray(cardData)) {
                        cardData.forEach(card => addCardRow(card));
                    }
                } else {
                    $('#card_section_wrapper').hide();
                }
                itemModal.show();
            });
        }

        function loadTable() {
            $.get("{{ route('admin.landing_page.data') }}", function (res) {
                let html = '';
                res.data.forEach(item => {
                    const imgUrl = item.image_url || '/placeholder.png';
                    const itemImg = item.item_image || '/placeholder.png';

                    html += `
                    <tr>
                        <td class="ps-4 fw-bold">${item.page_name}</td>
                        <td><span class="badge bg-soft-info text-info border">${item.item_type}</span></td>
                        <td>
                            <img src="${imgUrl}" width="40" height="40" 
                                 class="rounded border shadow-sm img-clickable" 
                                 onclick="viewFullImage('${imgUrl}')">
                        </td>
                        <td>
                            <img src="${itemImg}" width="40" height="40" 
                                 class="rounded border shadow-sm img-clickable" 
                                 onclick="viewFullImage('${itemImg}')">
                        </td>
                        <td class="small text-muted text-truncate" style="max-width: 200px;">${item.text || ''}</td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm btn-outline-primary px-3" onclick="editItem(${item.id})">Edit</button>
                        </td>
                    </tr>`;
                });
                $('#tableBody').html(html);
                lucide.createIcons();
            });
        }

        $(document).ready(function () {
            loadTable();
            $('#itemForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('admin.landing_page.save') }}",
                    type: "POST",
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function () {
                        itemModal.hide();
                        loadTable();
                    }
                });
            });
        });
    </script>
    <style>
        .x-small {
            font-size: 0.7rem;
            color: #6c757d;
        }

        .bg-soft-info {
            background-color: #e0f2fe;
        }

        .img-clickable {
            cursor: zoom-in;
            transition: transform 0.2s;
        }

        .img-clickable:hover {
            transform: scale(1.1);
        }
    </style>
@endpush