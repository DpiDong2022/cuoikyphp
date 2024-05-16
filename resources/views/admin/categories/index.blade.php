<x-admin.layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    {{-- @foreach ($categories as $cate)
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            {{$cate -> id}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$cate -> name}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}

    <h1>Người dùng: {{ $user->name }}</h1>
    <h1>Email: {{ $user->email }}</h1>
    <h1>Địa chỉ đơn hàng: {{ $user->invoices()->first()->total }}</h1>
    <h1>Trạng thái:{{$user->invoices()->first() -> status() -> get()[0]->name}}</h1>
    <h1>Danh sách sản phẩm:</h1>

    {{-- @foreach ($user->invoices()->first()->varients() as $varient)
        <h3>Tên sản phẩm: {{$varient -> product()->name}}</h3>
        <h3>Giá: {{$varient -> price}}</h3>
        <h3>Số lượng đặt: </h3>
        <h3>Hình ảnh: {{$varient -> image}}</h3>
    @endforeach --}}
    <hr>
    @foreach ($user->invoices()->first()-> invoiceDetails() ->get() as $detail)
        <h3>Tên sản phẩm: {{ $detail-> varient() -> get()[0] -> product() -> get()[0]->name}}</h3>
        <h3>Màu: </h3>
        <button class="btn" style="background-color: {{ $detail-> varient() -> get()[0] -> color}};"></button>
        <h3>Ram: {{ $detail-> varient() -> get()[0] -> memory}}</h3>
        <h3>Bộ nhớ: {{ $detail-> varient() -> get()[0] -> storage}}</h3>
        <h3>Ảnh:</h3>
        <img src="{{ $detail-> varient() -> get()[0] -> image}}" alt="">
        <hr>
        {{-- <h3>Giá: {{ $varient->price }}</h3>
        <h3>Số lượng đặt: </h3>
        <h3>Hình ảnh: {{ $varient->image }}</h3> --}}
    @endforeach

    {{-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
            </tr>
            @endforeach
        </tbody>

    @foreach ($roles as $role)
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        {{$role -> id}}</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$role -> name}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}
</x-admin.layout>
