<x-admin.layout>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            position: relative;
            overflow:visible;
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
            transform: scale(2.5); /* scale up the image on hover */
            z-index: 100;
        }
        /* td img {
            z-index: 100;
        } */
    </style>
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
                                <a class="btn btn-google" href="{{route('product.edit',$product->id)}}">Sửa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>

