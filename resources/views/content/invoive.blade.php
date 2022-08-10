@extends('master')
@section('title', 'Invoive PCM')

 <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@section('content')
 <h1>Invoive</h1>
    <form>
        <div class="mb-3 row">
            <label for="name" class="col-sm-1 col-form-label">Job No</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="company_name">
            </div>
            <label for="department" class="col-sm-1 col-form-label">ชื่อบริษัท</label>
            <div class="col">
                <input type="text" class="form-control" id="department">
            </div>
            <label for="date" class="col-sm-1 col-form-label">วันที่</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="ประเภทสินค้า">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="reason_to_buy" class="col-form-label">ผู้รับ</label>
            <div class="col">
                <input type="text" class="form-control" id="reason_to_buy">
            </div>
        </div>
        <html>
            <label>uploadเอกสาร</label> 
            <body>
                <form action="uploadfile.php" 
                      method="post" 
                      enctype="multipart/form-data" 
                      target="ifrm"
                >
                    <input type="file"
                           name="upload"
                           style="display:none"
                    />
                    <input type="text"
                           name="uploadtext"
                           onkeydown="upload.value=uploadtext.value "
                    />
                    <input type="button"
                           name="uploadbutton" 
                           value="choose file"
                           onclick="upload.click()"
                           onmouseout="uploadtext.value=upload.value"
                    />
                    <br />
                    <input type="submit" value="submit"/>
                </form>
                <iframe name="ifrm" style="display:none">
                </iframe>
            </body>
        </html>
@endsection

