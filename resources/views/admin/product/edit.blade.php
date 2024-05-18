<x-admin.layout>
    <div class="container" style="width: 40%">
        <h1 class="h3 mb-4 text-gray-800">Chỉnh sửa sản phẩm</h1>
        <div class="modal-body">
            <form action="{{ route('product.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input hidden type="text" name="id" class="form-control" value="{{ $product->id }}">
                <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Giá chung</label>
                    <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="discount">Phần trăm giảm giá <span id="discount">0</span></label>
                    <input type="range" name="discount" class="form-control" id="rangevalue"
                        value="{{ $product->discount }}">
                    @error('discount')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Chọn hình ảnh</label>
                            <input type="file" class="form-control-file" accept="image/*" id="imageInput">
                            @error('')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <img id="imageHoder" width="150" src={{ $product->image }} alt="">
                    </div>
                    <input hidden id="imagedata" name="image" type="text" value="{{ $product->image }}">
                    @error('image')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Loại sản phẩm</label>
                    <select name="category_id" class="form-control">
                        <option selected value="{{ $product->category_id }}">{{ $product->category()->name }}</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="desciption">Mô tả</label>
                    <textarea class="form-control" name="desciption" id="" cols="50" rows="5">{{ $product->description }}</textarea>
                    @error('desciption')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" href="{{ route('product.index') }}"
                        data-dismiss="modal">Close</a>
                    <input type="submit" class="btn btn-primary" value="Save changes">
                </div>
            </form>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
</x-admin.layout>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $("#rangevalue").change(function() {
            $("#discount").text($(this).val());
        });
    });

    $("#dataTable").DataTable();

    document.getElementById('imageInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const base64Image = e.target.result;
                const img = document.getElementById('imageHoder');
                const inputImg = document.getElementById('imagedata');
                inputImg.value = base64Image;
                img.src = base64Image;
                img.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
