<x-admin.layout>
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
                        <th scope="col"></th>
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
                                <button class="btn btn-facebook">Xem chủng loại</button>
                                <button class="btn btn-facebook" data-toggle="modal"
                                    data-target="#editmodal">Sửa</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" style="color:black;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Giá chung</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="discount">Phần trăm giảm giá  <span id="discount">0</span></label>
                            <input type="range" name="discount" class="form-control" id="rangevalue">
                        </div>
                        <div class="form-group">
                            <label for="image">Chọn hình ảnh</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="category">Loại sản phẩm</label>
                            <select name="category" id="" class="form-control">
                                @foreach ($categories as $item)
                                    <option value="{{$item -> id}}">{{$item -> name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desciption">Mô tả</label>
                            <textarea class="form-control" name="desciption" id="" cols="50" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $("#rangevalue").change(function(){
            $("#discount").text($(this).val());
        });
    });
</script>
