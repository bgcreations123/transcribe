@extends('layouts.client')

@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Paid Projects</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/client"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Paid Projects</li>
        </ol>
        <hr>
    </section>
    <div class="container-fluid mt-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Paid Projects
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-stiped">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Project ID</th>
                                <th>Amount Paid</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-footer">
                <p>&copy; <?= date('Y'); ?> Forte Ltd.</p>
            </div>
        </div>
    </div>
@endsection