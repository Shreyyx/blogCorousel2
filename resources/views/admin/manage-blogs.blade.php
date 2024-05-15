@extends('layouts.app')
@section('csscontent')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"
                        style="background-color: #131517; color:white; display: flex; justify-content: space-between; align-items: center;">
                        <h3>Manage blogs</h3>
                        <a data-bs-toggle="modal" href="#add_event" class="btn btn-dark btn-rounded float-end">Add
                            blog</a>
                    </div>
                    <div class="card-body" style="background-color: #212529; color:white;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered yajra_datatable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>day</th>
                                        <th>date</th>
                                        <th>month</th>
                                        <th>image</th>
                                        <th>title</th>
                                        <th>description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width:100%;" class="modal fade twm-sign-up" id="add_event" aria-hidden="true"
            aria-labelledby="sign_up_popupLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel2">Add blog</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <form id="f" action="{{ 'save-blogs' }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="myTab2Content">
                                    <!--Login Candidate Content-->
                                    <div class="tab-pane fade show active" id="login-candidate">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="date"><b>date<span class="text-danger">
                                                                *</span></b></label>
                                                    <input name="date" type="text" id="date" class="form-control"
                                                        placeholder="Enter date" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="day"><b>day<span class="text-danger">
                                                                *</span></b></label>
                                                    <input name="day" type="text" id="day" class="form-control"
                                                        placeholder="Enter title" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="month"><b>month<span class="text-danger">
                                                                *</span></b></label>
                                                    <input name="month" type="text" id="month" class="form-control"
                                                        placeholder="Enter title" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="image"><b>Image<span class="text-danger">
                                                                *</span></b></label>
                                                    <input name="image" type="file" id="image"
                                                        class="form-control my-1" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="title"><b>title<span class="text-danger">
                                                                *</span></b></label>
                                                    <input name="title" type="text" id="title" class="form-control"
                                                        placeholder="Enter title" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <label for="description"><b>Description<span class="text-danger">
                                                                *</span></b></label>
                                                    <textarea type="text" class="form-control" name="description" id="edescription" placeholder="Enter event description"
                                                        rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="text-align: center;">
                                                <button id="submit" type="submit" class="btn btn-outline-dark"><i
                                                        class="fa fa-upload"></i>&nbsp;&nbsp;&nbsp;Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($data as $blogs)
        <div style="width:100%;" class="modal fade twm-sign-up" id="editModal{{ $blogs->id }}" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel{{ $blogs->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{ $blogs->id }}">Edit blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for editing blog -->
                        <form id="editForm{{ $blogs->id }}"
                            action="{{ route('update-blogs', ['id' => $blogs->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTab2Content">
                                <!--Login Candidate Content-->
                                <div class="tab-pane fade show active" id="login-candidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="day"><b>day<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="day" type="text" id="day" class="form-control"
                                                    value="{{ $blogs->day }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="date"><b>date<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="date" type="text" id="date" class="form-control"
                                                    value="{{ $blogs->date }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="month"><b>month<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="month" type="text" id="month" class="form-control"
                                                    value="{{ $blogs->month }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="image"><b>Images<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="image" type="file" id="image"
                                                    class="form-control my-1">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="title"><b>title<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="title" type="text" id="title" class="form-control"
                                                    value="{{ $blogs->title }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="description"><b>Description<span class="text-danger">
                                                            *</span></b></label>
                                                <textarea type="text" class="form-control" name="description" id="edescription" rows="5">{{ $blogs->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="text-align: center;">
                                            <button id="submit" type="submit" class="btn btn-outline-dark"><i
                                                    class="fa fa-upload"></i>&nbsp;&nbsp;&nbsp;Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('jscontent')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script type="text/css" src="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var table = $('.yajra_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('manage-blogs') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'day',
                        name: 'day'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'month',
                        name: 'month'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', '.delete', function() {
            var row_id = $(this).attr('id');
            var table_row = $(this).closest('tr');
            var url = "{{ route('delete-blogs') }}";
            swal.fire({
                title: "Are you Sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'get',
                        url: url.replace(':id', row_id),
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: row_id,
                        },
                        success: function(data) {
                            swal.fire({
                                title: 'Deleted!',
                                text: 'Your product has been deleted.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                table_row.remove();
                            });
                        }
                    });
                }
            })
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script>
      
        document.querySelectorAll('#edescription').forEach(textarea => {
            ClassicEditor.create(textarea).catch(error => {
                console.error(error);
            });
        });
    
        ClassicEditor.create(document.querySelector('#description')).catch(error => {
            console.error(error);
        });
    </script>
@endsection
