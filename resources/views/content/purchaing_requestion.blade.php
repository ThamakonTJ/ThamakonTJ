@extends('master')
@section('title', 'Purchaing Requestion PCM')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@section('content')

    <h1>Purchaing Requestion</h1>
    <form>
        <div class="mb-3 row">
            <label for="name" class="col-sm-1 col-form-label">ชื่อผู้จัดซื้อ</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="name">
            </div>
            <label for="department" class="col-sm-1 col-form-label">แผนก</label>
            <div class="col">
                <input type="text" class="form-control" id="department">
            </div>
            <label for="date" class="col-sm-1 col-form-label">วันที่</label>
            <div class="col-sm-2">
                <input type="date" class="form-control" id="date">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="reason_to_buy" class="col-form-label">เหตุผลในการขออนุมัติการจัดซื้อ</label>
            <div class="col">
                <input type="text" class="form-control" id="reason_to_buy">
            </div>
        </div>
    </form>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ url('Pr_add_detail') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered" id="dynamicAddRemove">
                        <tr>
                            <th>รายการ</th>
                            <th>จำนวนสินค้า</th>
                            <th>ราคา/หน่วย</th>
                            <th>หมายเหตุ</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="moreFields[0][product]" placeholder="Enter product"
                                    class="form-control" /></td>
                            <td><input type="text" name="moreFields[0][pcs]" placeholder="Enter pcs"
                                    class="form-control" /></td>
                            <td><input type="text" name="moreFields[0][price_pcs]" placeholder="Enter price for pcs"
                                    class="form-control" /></td>
                            <td><input type="text" name="moreFields[0][note]" placeholder="Enter note"
                                    class="form-control" /></td>

                            <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add
                                    More</button></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var i = 0;
        $("#add-btn").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields[' + i +
                '][product]" placeholder="Enter product" class="form-control" /></td><td><input type="text" name="moreFields[' +
                i +
                '][pcs]" placeholder="Enter pcs" class="form-control" /></td><td><input type="text" name="moreFields[' +
                i +
                '][price_pcs]" placeholder="Enter price for pcs" class="form-control" /></td><td><input type="text" name="moreFields[' +
                i +
                '][note]" placeholder="Enter note" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });
    </script>

@endsection
