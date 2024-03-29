@extends('master');
@section('title', 'Content CRUD')
@section('content')


    <h1>Product</h1>
    <div class="mb-2">
        <a href="{{ url('content/create') }}" role="button" class="btn btn-sm btn-success">Add New Product</a>
    </div>
    <table id="tbContent" class="table table-bordered">
        <thead>
            <tr>
                <th>ID Product</th>
                <th>รายละเอียด</th>
                <th>ซัพพายเออร์</th>
                <th>ผู้กรอกข้อมูล</th>
                
                <th style="width: 150px"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>{{ $content->topic }}</td>
                    <td>{{ $content->description }}</td>
                    <td>{{ $content->tags }}</td>
                    <td>{{ $content->user->name }}</td>
                    
                    <td>
                        <a href="{{ url("content/{$content->id}/edit") }}" role="button"
                            class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger delete-item"
                            data-id="{{ $content->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

 
     {{ $contents->links() }}
@endsection

@push('script')
    <script>
        document.querySelector('#tbContent').addEventListener('click', (e) => {
            if (e.target.matches('.delete-item')) {
                Swal.fire({
                    title: 'Are you sure delete?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete($url + '/content/' + e.target.dataset.id).then((response) => {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                            setTimeout(() => {
                                window.location.href = $url + '/content';
                            }, 2000);
                        })
                    }
                })
            }
        });
    </script>
@endpush
