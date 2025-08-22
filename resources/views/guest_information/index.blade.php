@extends('app')
@section('title', 'Guest Information')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Manage Guest</h3>
                <div align="right" class="mb-3">
                    <a href="{{ url('create/guestinformation') }}" class="btn btn-primary">Tambah</a>
                </div>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Tamu</th>
                        <th>Tanggal Check-in</th>
                        <th>Nomor kamar</th>
                        <th>Kontak Tamu</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{ route('guest.edit') }}" class="btn btn-success">Edit</a>
                            <form action="" onclick="return confirm ('Yakin delete?')" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
