@extends('master')

@section('title', 'Role')
@section('menu', 'role')
@section('menu_parent', 'datapengguna')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Tambah Role</h4>
            </div><!-- end card header -->

            <form action="{{ url('admin/role/create') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                    <?php if (session()->has('failed')) { ?>
                        <div class="alert alert-warning solid alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Warning!</strong> <?php echo session()->get('failed'); ?>.
                            <button type="button" class="close h-100 btn" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nama Role</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Akses Menu</label>
                                <div>
                                    <button class="btn btn-success" type="button" onclick="check_all()"><i class="fa fa-check"></i>
                                        check
                                        all</button>
                                    <button class="btn btn-danger" type="button" onclick="uncheck_all()"><i class="fa fa-close"></i> uncheck
                                        all</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table header-border table-responsive-sm" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th style="text-align: left;">Menu</th>
                                                <th style="text-align: left;">Sub Menu</th>
                                                <th>View</th>
                                                <th>Add</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $flag = '';
                                            foreach ($menus as $menu) {
                                                if (count($menu->children) > 0) {
                                                    foreach ($menu->children as $sub_menu) {
                                                        if ($flag == '' || $flag != $menu->id) {
                                                            $flag = $menu->id;
                                            ?>
                                                            <tr>
                                                                <td>{{ $i }}</td>
                                                                <td>{{ $menu->name }}</td>
                                                                <td>{{ $sub_menu->name }}</td>
                                                                <td>
                                                                    <?php if ($sub_menu->has_view) { ?>
                                                                        <input type="checkbox"
                                                                            name="cbView{{ $sub_menu->id }}"
                                                                            {{ old("cbView{$sub_menu->id}", true) ? 'checked' : '' }}
                                                                            onchange="select_c(<?php echo $sub_menu->id ?>);">
                                                                    <?php } ?>
                                                                </td>

                                                                <td>
                                                                    <?php if ($sub_menu->has_add) { ?>
                                                                        <input type="checkbox"
                                                                            name="cbAdd{{ $sub_menu->id }}"
                                                                            {{ old("cbAdd{$sub_menu->id}", true) ? 'checked' : '' }}>
                                                                    <?php } ?>
                                                                </td>

                                                                <td>
                                                                    <?php if ($sub_menu->has_edit) { ?>
                                                                        <input type="checkbox"
                                                                            name="cbEdit{{ $sub_menu->id }}"
                                                                            {{ old("cbEdit{$sub_menu->id}", true) ? 'checked' : '' }}>
                                                                    <?php } ?>
                                                                </td>

                                                                <td>
                                                                    <?php if ($sub_menu->has_delete) { ?>
                                                                        <input type="checkbox"
                                                                            name="cbDelete{{ $sub_menu->id }}"
                                                                            {{ old("cbDelete{$sub_menu->id}", true) ? 'checked' : '' }}>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                            $i++;
                                                        } elseif ($flag == $menu->id) {
                                                        ?>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{ $sub_menu->name }}</td>
                                                                <td>
                                                                    <?php if ($sub_menu->has_view) { ?>
                                                                        <input type="checkbox"
                                                                            name="cbView{{ $sub_menu->id }}"
                                                                            {{ old("cbView{$sub_menu->id}", true) ? 'checked' : '' }}
                                                                            onchange="select_c(<?php echo $sub_menu->id ?>);">
                                                                    <?php } ?>
                                                                </td>

                                                                <td>
                                                                    <?php if ($sub_menu->has_add) { ?>
                                                                        <input type="checkbox"
                                                                            name="cbAdd{{ $sub_menu->id }}"
                                                                            {{ old("cbAdd{$sub_menu->id}", true) ? 'checked' : '' }}>
                                                                    <?php } ?>
                                                                </td>

                                                                <td>
                                                                    <?php if ($sub_menu->has_edit) { ?>
                                                                        <input type="checkbox"
                                                                            name="cbEdit{{ $sub_menu->id }}"
                                                                            {{ old("cbEdit{$sub_menu->id}", true) ? 'checked' : '' }}>
                                                                    <?php } ?>
                                                                </td>

                                                                <td>
                                                                    <?php if ($sub_menu->has_delete) { ?>
                                                                        <input type="checkbox"
                                                                            name="cbDelete{{ $sub_menu->id }}"
                                                                            {{ old("cbDelete{$sub_menu->id}", true) ? 'checked' : '' }}>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                } else {
                                                    ?>
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td>{{ $menu->name }}</td>
                                                        <td></td>
                                                        <td>
                                                            <?php if ($menu->has_view) { ?>
                                                                <input type="checkbox"
                                                                    name="cbView{{ $menu->id }}"
                                                                    {{ old("cbView{$menu->id}", true) ? 'checked' : '' }}
                                                                    onchange="select_c(<?php echo $menu->id ?>);">
                                                            <?php } ?>
                                                        </td>

                                                        <td>
                                                            <?php if ($menu->has_add) { ?>
                                                                <input type="checkbox"
                                                                    name="cbAdd{{ $menu->id }}"
                                                                    {{ old("cbAdd{$menu->id}", true) ? 'checked' : '' }}>
                                                            <?php } ?>
                                                        </td>

                                                        <td>
                                                            <?php if ($menu->has_edit) { ?>
                                                                <input type="checkbox"
                                                                    name="cbEdit{{ $menu->id }}"
                                                                    {{ old("cbEdit{$menu->id}", true) ? 'checked' : '' }}>
                                                            <?php } ?>
                                                        </td>

                                                        <td>
                                                            <?php if ($menu->has_delete) { ?>
                                                                <input type="checkbox"
                                                                    name="cbDelete{{ $menu->id }}"
                                                                    {{ old("cbDelete{$menu->id}", true) ? 'checked' : '' }}>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    $i++;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card-footer">
                    <div style="width:100%;">
                        <a class="btn  btn-secondary" href="{{ url('admin/role') }}">
                            <i class="fa fa-arrow-left"></i>
                            Kembali</a>
                        <button class="btn  btn-info float-end" type="submit" style="float: right;"><i class="fa fa-save"></i>
                            Simpan</button>
                    </div>
                </div>
            </form>
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection

@push('after-script')
<script>
    function select_c(id) {
        var checked = $('input:checkbox[name=cbView' + id + ']:checked').val();
        if (!checked) {
            $('input:checkbox[name=cbAdd' + id + ']:checked').prop('checked', false);
            $('input:checkbox[name=cbEdit' + id + ']:checked').prop('checked', false);
            $('input:checkbox[name=cbDelete' + id + ']:checked').prop('checked', false);
            $('input:checkbox[name=cbUpload' + id + ']:checked').prop('checked', false);
        }
    }

    function check_all() {
        $('input:checkbox').prop('checked', true);
    }

    function uncheck_all() {
        $('input:checkbox').prop('checked', false);
    }
</script>
@endpush