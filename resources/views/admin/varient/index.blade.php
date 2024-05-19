<!-- resources/views/product/create.blade.php -->
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        position: relative;
        overflow: visible;
        border: 1px solid #ddd;
        text-align: center;
        vertical-align: middle;
    }

    img {
        transition: transform 0.3s ease;
        max-width: 100%;
        max-height: 100%;
    }

    td:hover img {
        transform: scale(2.7);
        /* scale up the image on hover */
        z-index: 100;
    }
</style>
<x-admin.layout>
    <div class="card">
        <div class="container mt-5">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif

            <h1>Sản phẩm {{ $product->name }}</h1>

            <a href="{{ route('product.index') }}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Back to Products</span>
            </a>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addVariantModal">Add variant</button>

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Color</th>
                        <th>Memory</th>
                        <th>Storage</th>
                        <th>Quantity</th>
                        <th>Minimum Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($variants as $variant)
                        <tr>
                            <td hidden>{{ $variant->id }}</td>
                            <td><input type="color" value="{{ $variant->color }}" disabled></td>
                            <td>{{ $variant->memory }}</td>
                            <td>{{ $variant->storage }}</td>
                            <td>{{ $variant->quantity }}</td>
                            <td>{{ $variant->minimum_qty }}</td>
                            <td>{{ $variant->price }}</td>
                            <td>
                                <img width="60" class="variantImagePreview" src="{{ $variant->image }}"
                                    alt="Variant Image Preview" style="max-width: 200px; display: block;">
                            </td>
                            <td>
                                <button class="btn btn-facebook edit-variant" data-toggle="modal"
                                    data-target="#editVariantModal">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    {{-- begin::modal edit variant --}}
    <div class="modal fade" id="editVariantModal" tabindex="-1" role="dialog" aria-labelledby="editVariantModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editVariantModalLabel">Chỉnh sửa biến thể</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editVariantForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="variantId" name="variant_id">

                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="color" class="form-control" id="color" name="color" required>
                        </div>
                        <div class="form-group">
                            <label for="memory">Memory (RAM)</label>
                            <select class="form-control" id="memory" name="memory" required>
                                @for ($i = 0; $i <= 50; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="storage">Storage</label>
                            <select class="form-control" id="storage" name="storage" required>
                                <option value="4 GB">4 GB</option>
                                <option value="8 GB">8 GB</option>
                                <option value="16 GB">16 GB</option>
                                <option value="32 GB">32 GB</option>
                                <option value="128 GB">128 GB</option>
                                <option value="256 GB">256 GB</option>
                                <option value="512 GB">512 GB</option>
                                <option value="1 T">1 T</option>
                                <option value="2 T">2 T</option>
                                <option value="4 T">4 T</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="minimum_qty">Minimum Quantity</label>
                            <input type="number" class="form-control" id="minimum_qty" name="minimum_qty" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <div class="custom-file">
                                <label class="custom-file-label" for="image">Choose file</label>
                                <input type="file" class="custom-file-input" id="image" name="image"
                                    onchange="previewImage(this);" accept="image/*">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <img id="variantImagePreview_" src="#" alt="Product Image Preview"
                                style="max-width: 200px; display: block;">
                        </div>

                        <div class="modal-footer">
                            <a data-dismiss="modal" type="submit" class="btn btn-lg btn-secondary">
                                <span class="text">Close</span>
                            </a>
                            <button type="submit" class="btn btn-lg btn-secondary btn-facebook">
                                <span class="text">Lưu</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- end::modal edit variant --}}

    {{-- begin::modal add variant --}}
    <div class="modal fade" id="addVariantModal" tabindex="-1" role="dialog"
        aria-labelledby="addVariantModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addVariantModalLabel">Thêm biến thể</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addVariantForm" action="{{route('varient.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="color" class="form-control" id="add_color" name="color" required>
                        </div>
                        <div class="form-group">
                            <label for="memory">Memory (RAM)</label>
                            <select class="form-control" id="add_memory" name="memory" required>
                                @for ($i = 0; $i <= 50; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="storage">Storage</label>
                            <select class="form-control" id="add_storage" name="storage" required>
                                <option value="4 GB">4 GB</option>
                                <option value="8 GB">8 GB</option>
                                <option value="16 GB">16 GB</option>
                                <option value="32 GB">32 GB</option>
                                <option value="128 GB">128 GB</option>
                                <option value="256 GB">256 GB</option>
                                <option value="512 GB">512 GB</option>
                                <option value="1 T">1 T</option>
                                <option value="2 T">2 T</option>
                                <option value="4 T">4 T</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="add_quantity" name="quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="minimum_qty">Minimum Quantity</label>
                            <input type="number" class="form-control" id="add_minimum_qty" name="minimum_qty"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="add_image" name="image"
                                    required onchange="previewImage(this, 'add');" accept="image/*">
                                <label class="custom-file-label" for="add_image">Choose file</label>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <img id="variantImagePreview_add" src="#" alt="Product Image Preview"
                                style="max-width: 200px; display: block;">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end::modal add variant --}}

</x-admin.layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.edit-variant').on('click', function() {
            var row = $(this).closest('tr');
            var variantId = row.find('td:nth-child(1)').html();
            var color = row.find('td:nth-child(2)').find('input').val();
            var memory = row.find('td:nth-child(3)').html();
            var storage = row.find('td:nth-child(4)').html();
            var quantity = row.find('td:nth-child(5)').html();
            var minimumQty = row.find('td:nth-child(6)').html();
            var price = row.find('td:nth-child(7)').html();
            var image_base64 = row.find('td:nth-child(8) img').attr('src');

            $('#variantId').val(variantId);
            $('#color').val(color);
            $('#memory').val(memory);
            $('#storage').val(storage);
            $('#quantity').val(quantity);
            $('#minimum_qty').val(minimumQty);
            $('#price').val(price);
            $('#variantImagePreview_').attr('src', image_base64);
            // Update the form action
            $('#editVariantForm').attr('action', '/admin/varient/update/' + variantId);
        });
    });

    function previewImage(input, variantIndex) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const imagePreview = document.getElementById('variantImagePreview_' + (variantIndex == null ? "" :
                    variantIndex));
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
