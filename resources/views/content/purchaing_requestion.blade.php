@extends('master')
@section('title', 'Purchaing Requestion PCM')


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
        <form method="post" id="insert_form">
         <div class="table-repsonsive">
          <span id="error"></span>
          <table class="table table-bordered" id="item_table">
           <tr>
            <th>รายการ</th>
            <th>จำนวน</th>
            <th>ราคาต่อหน่วย</th>
            <th>ราคา</th>
            <th>หมายเหตุ</th>
            <th>รูปของสินค้า</th>
            <th><button type="button" name="add" class="btn btn-success btn add"><span class="glyphicon glyphicon-plus"></span>+</button></th>
           </tr>
          </table>
          <div align="center">
           <input type="submit" name="submit" class="btn btn-success" value="submit" />
          </div>
         </div>
        </form>
       </div>
 

@endsection

