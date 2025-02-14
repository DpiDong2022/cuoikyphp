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
        .description-content {
            position: relative;
        }

        .read-more,
        .read-less {
            color: blue;
            cursor: pointer;
            display: inline-block;
            margin-top: 5px;
        }

        .d-none {
            display: none;
        }
    </style>
    <div class="card">
        <div class="container">
            <h1 class="h3 mb-4 text-gray-800">Danh sách sản phẩm</h1>

            <div class="row">
                <div class="col">
                    <a href="{{ route('product.create') }}" class="btn btn-success btn-icon-split mb-4">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Thêm sản phẩm</span>
                    </a>
                </div>
                <div class="col">
                    <!-- Category Filter -->
                    <div class="mb-4">
                        <select id="categoryFilter" style="width: 150px;" class="form-control">
                            <option value="">All Categories</option>
                            @foreach ($category as $categori)
                                <option value="{{ $categori->name }}">{{ $categori->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

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
                                <td>
                                    <div class="description-content">
                                        <span
                                            class="short-description">{{ Str::limit($product->description, 100) }}</span>
                                        <span class="full-description d-none">{{ $product->description }}</span>
                                        @if (Str::length($product->description) > 100)
                                            <a href="javascript:void(0)" class="read-more">Read More</a>
                                            <a href="javascript:void(0)" class="read-less d-none">Read Less</a>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <img width="60" src={{ $product->image }} alt="">
                                </td>
                                <td>
                                    <a href="{{ route('product.edit', $product->id) }}"
                                        class="btn btn-secondary btn-icon-split btn-google">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Sửa thông tin</span>
                                    </a>
                                    <a href="{{ route('varient.index', $product->id) }}"
                                        class="btn btn-secondary btn-icon-split btn-facebook">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Danh sách biến thể</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.layout>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
    // Initialize DataTable
    var table = $('#dataTable').DataTable();

    // Attach event listener for search event
    table.on('search.dt', function() {
        // Perform your custom actions here when a search is performed
        mtrigger();
    });

    // Attach event listener for draw event (when DataTable is redrawn)
    table.on('draw.dt', function() {
        // Reattach event listeners after DataTable is redrawn
        mtrigger();
    });

    // Function to toggle between short and full description
    function mtrigger() {
        $('.description-content').each(function() {
            var shortDescription = $(this).find('.short-description');
            var fullDescription = $(this).find('.full-description');
            var readMore = $(this).find('.read-more');
            var readLess = $(this).find('.read-less');

            readMore.off('click').on('click', function() {
                shortDescription.addClass('d-none');
                fullDescription.removeClass('d-none');
                readMore.addClass('d-none');
                readLess.removeClass('d-none');
            });

            readLess.off('click').on('click', function() {
                shortDescription.removeClass('d-none');
                fullDescription.addClass('d-none');
                readMore.removeClass('d-none');
                readLess.addClass('d-none');
            });
        });
    }

    // Call mtrigger() once when the document is loaded
    $(document).ready(function() {
        mtrigger();
    });
</script>
