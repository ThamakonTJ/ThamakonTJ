@extends('master')
@section('title', 'Supplier PCM')

@section('content')
    <h1>Supplier</h1>
    <div class="mb-2">
        <a href="{{ url('content/create') }}" role="button" class="btn btn-sm btn-success">Add New Product</a>
    </div>
    <table id="tbContent" class="table table-bordered">
        <thead>
            <tr>
                <th>ID Product</th>
                <th>รายละเอียด</th>
                <th>รูปสินค้า</th>
                <th>ซัพพายเลอร์</th>
                <th>วันที่อัปโหลดข้อมูล</th>

                <th style="width: 150px"></th>
            </tr>
        </thead>


    </table>
@endsection
