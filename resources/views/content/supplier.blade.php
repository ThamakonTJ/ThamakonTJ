@extends('master')
@section('title', 'Supplier PCM')

@section('content')
   
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    
     <h1>Supplier</h1>
   
        <form>
            <div class="mb-3 row">
                <label for="name" class="col-sm-1 col-form-label">ชื่อบริษัท</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="company_name">
                </div>
                <label for="department" class="col-sm-1 col-form-label">รหัสผู้ขาย:</label>
                <div class="col">
                    <input type="text" class="form-control" id="department">
                </div>
                <label for="date" class="col-sm-1 col-form-label">วันที่</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="ประเภทสินค้า">
                </div>
            </div>
    
    
            <div class="mb-3 row">
                <label for="reason_to_buy" class="col-form-label">ที่อยู่</label>
                <div class="col">
                    <input type="text" class="form-control" id="reason_to_buy">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-1 col-form-label">เบอร์โทรศัพท์</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="company_name">
                </div>
                <label for="department" class="col-sm-1 col-form-label">เบอร์Fax:</label>
                <div class="col">
                    <input type="text" class="form-control" id="department">
                </div>
                <label for="date" class="col-sm-1 col-form-label">ปีที่ก่อตั้ง</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="date">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-1 col-form-label">ทุนจดทะเบียน</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="company_name">
                </div>
                <label for="department" class="col-sm-1 col-form-label">ชื่อผู้ติดต่อ:</label>
                <div class="col">
                    <input type="text" class="form-control" id="department">
                </div>
                <label for="date" class="col-sm-1 col-form-label">Email</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="date">
                </div>
            </div>
        </form>
        <div class="mb-2">
            <a href="{{ url('content/create') }}" role="button" class="btn btn-sm btn-success">Add Supplier</a>
        </div>
    <table id="tbContent" class="table table-bordered">
        <thead>
            <tr>
                <th>ชื่อบริษัท</th>
                <th>ประเภทสินค้า</th>
                <th>เบอร์Fax</th>
                <th>รหัสผู้ขาย</th>
                <th>Email</th>
                <th style="width: 150px"></th>
            </tr>
        </thead>


    </table>
@endsection
