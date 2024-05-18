<x-admin.layout>
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
            transform: scale(2.5);
            /* scale up the image on hover */
            z-index: 100;
        }

        /* td img {
            z-index: 100;
        } */
    </style>
    <div class="card" style="height:85vh">
        <div class="container">
            <h1 class="h3 mb-4 text-gray-800">Danh sách sản phẩm</h1>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá chung</th>
                            <th scope="col">Giảm giá(%)</th>
                            <th scope="col">Loại sản phẩm</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody style="color: black;">
                        @php
                            $index = 0;
                        @endphp
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ formatCurrencyVND($product->price) }}</td>
                                <td>{{ $product->discount }}</td>
                                <td>{{ $product->category()->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img width="60" src={{ $product->image }} alt="">
                                </td>
                                <td>
                                    <a class="btn btn-google" href="{{ route('product.edit', $product->id) }}">Sửa thông
                                        tin</a>
                                    <a class="btn btn-facebook" href="{{ route('varient.index', $product->id) }}">Danh
                                        sách biến thể</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end::modal edit variant --}}
</x-admin.layout>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
    $("#dataTable").DataTable();
</script>
