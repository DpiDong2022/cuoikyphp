<!-- resources/views/product/create.blade.php -->

<x-admin.layout>
    <div class="card" style="height:85vh;">
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

            <a class="btn btn-primary" href="{{ route('product.index') }}">Back to Products</a>

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Color</th>
                        <th>Memory</th>
                        <th>Storage</th>
                        <th>Quantity</th>
                        <th>Minimum Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($variants as $variant)
                        <tr>
                            <td>{{ $variant->id }}</td>
                            <td><input type="color" value="{{ $variant->color }}" disabled></td>
                            <td>{{ $variant->memory }}</td>
                            <td>{{ $variant->storage }} GB</td>
                            <td>{{ $variant->quantity }}</td>
                            <td>{{ $variant->minimum_qty }}</td>
                            <td>
                                <button class="btn btn-warning edit-variant" data-toggle="modal"
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
                    <h5 class="modal-title" id="editVariantModalLabel">Edit Variant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editVariantForm" action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="variantId" name="variant_id">

                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="color" class="form-control" id="color" name="color" required>
                        </div>
                        <div class="form-group">
                            <label for="memory">Memory (GB)</label>
                            <input type="number" class="form-control" id="memory" name="memory" required>
                        </div>
                        <div class="form-group">
                            <label for="storage">Storage (GB)</label>
                            <input type="text" class="form-control" id="storage" name="storage" required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="minimum_qty">Minimum Quantity</label>
                            <input type="number" class="form-control" id="minimum_qty" name="minimum_qty" required>
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

    {{-- end::modal edit variant --}}
</x-admin.layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.edit-variant').on('click', function() {
            var row = $(this).closest('tr');
            var variantId = row.find('').data('id');
            var color = row.find('td:nth-child(2)').find('input').val();
            var memory = row.find('td:nth-child(3)').html();
            var storage = row.find('td:nth-child(4)').html();
            var quantity = row.find('td:nth-child(5)').html();
            var minimumQty = row.find('td:nth-child(6)').html();
            console.log(minimumQty);
            $('#variantId').val(variantId);
            $('#color').val(color);
            $('#memory').val(memory);
            $('#storage').val(storage);
            $('#quantity').val(quantity);
            $('#minimum_qty').val(minimumQty);

            // Update the form action
            $('#editVariantForm').attr('action', '/variants/' + variantId);
        });
    });
</script>
