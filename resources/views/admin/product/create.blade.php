<!-- resources/views/product/create.blade.php -->

<x-admin.layout>
    <div class="card">
        <div class="container mt-5">
            <h1>Create Product</h1>

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

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="image">Product Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image"
                            onchange="previewImage(this);" required accept="image/*">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <img id="variantImagePreview_" src="#" alt="Product Image Preview"
                        style="max-width: 200px; display: none;">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="number" class="form-control" id="discount" name="discount">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <hr>
                <h3>Variants</h3>
                <table class="table table-bordered" id="variantsTable">
                    <thead>
                        <tr>
                            <th>Color</th>
                            <th>Memory</th>
                            <th>Storage</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Minimum Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="variant">
                            <td>
                                <input style="width: 80px;" type="color" class="form-control"
                                    name="variants[0][color]" required>
                            </td>
                            <td>
                                <select class="form-control" name="variants[0][memory]" required>
                                    @for ($i = 1; $i <= 50; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="variants[0][storage]" required>
                                    <option value="125GB">125GB</option>
                                    <option value="256GB">256GB</option>
                                    <option value="500GB">500GB</option>
                                    <option value="512GB">512GB</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </td>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="variants[0][image]"
                                        onchange="previewImage(this, 0);" required>
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                <img id="variantImagePreview_0" src="#" alt="Variant Image Preview"
                                    style="max-width: 200px; display: none;">
                            </td>
                            <td>
                                <input type="number" class="form-control" name="variants[0][quantity]" required>
                            </td>
                            <td>
                                <input type="number" class="form-control" name="variants[0][minimum_qty]" required>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-icon-split text-white remove-variant">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Remove</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a id="addVariantBtn" class="btn btn-primary text-white btn-icon-split btn-lg" onclick="addVariant()">
                    <span class="text">Add variant</span>
                </a>

                <button type="submit" class="btn btn-success btn-icon-split btn-lg">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Save</span>
                </button>
            </form>
        </div>
    </div>
</x-admin.layout>

<script>
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

    let variantCount = 1;

    function addVariant() {
        const variantsTable = document.getElementById('variantsTable').getElementsByTagName('tbody')[0];
        const newRow = variantsTable.insertRow();
        newRow.classList.add('variant');

        newRow.innerHTML = `
            <td>
                <input type="color" style="width: 80px;" class="form-control" name="variants[${variantCount}][color]" required>
            </td>
            <td>
                <select class="form-control" name="variants[${variantCount}][memory]" required>
                    @for ($i = 1; $i <= 50; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </td>
            <td>
                <select class="form-control" name="variants[${variantCount}][storage]" required>
                    <option value="125GB">125GB</option>
                    <option value="256GB">256GB</option>
                    <option value="500GB">500GB</option>
                    <option value="512GB">512GB</option>
                    <!-- Add more options as needed -->
                </select>
            </td>
            <td>
                <div class="custom-file">
                <input type="file" class="custom-file-input" name="variants[${variantCount}][image]" onchange="previewImage(this, ${variantCount});" required>
                <label class="custom-file-label" for="image">Choose file</label>
                </div>
                <img id="variantImagePreview_${variantCount}" src="#" alt="Variant Image Preview" style="max-width: 200px; display: none;">
            </td>
            <td>
                <input type="number" class="form-control" name="variants[${variantCount}][quantity]" required>
            </td>
            <td>
                <input type="number" class="form-control" name="variants[${variantCount}][minimum_qty]" required>
            </td>
            <td>
                <a class="btn btn-danger btn-icon-split text-white remove-variant">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Remove</span>
                </a>
            </td>
        `;
        newRow.querySelector('.remove-variant').addEventListener('click', function() {
            if (variantCount > 1) {
                this.closest('tr').remove();
                variantCount--;
            }
        });
        variantCount++;
    }
    document.querySelector('.remove-variant').addEventListener('click', function() {
        if (variantCount > 1) {
            this.closest('tr').remove();
            variantCount--;
        }

    });
</script>
