@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Contact</a>
            <span class="breadcrumb-item active">View Contact Messages</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Contact Messages List
                </h6>
                <p class="mg-b-20 mg-sm-b-30">List of your Messages.</p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Email</th>
                            <th class="wd-20p">Message</th>
                            <th class="wd-20p">Messaged Time</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contact as $key=>$row)
                            <tr>
                                <td>
                                    {{$key+1}}
                                </td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->message }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

@endsection


