@extends('master')

@push('after-style')
<style>
    .select2-selection--multiple {
        height: 55px !important;
        border-radius: 5px !important;
        border-color: #B1B1B1 !important;
    }
</style>
@endpush

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Akun</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Role</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
    </ol>
</div>
<!-- row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ url('admin/role/update') }}" method="POST">
                <div class="card-body">
                    <?php if (session()->has('error')) { ?>
                        <div class="alert alert-warning solid alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            <strong>Warning!</strong> <?php echo session()->get('error'); ?>.
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    <?php } ?>
                    <?php if (session()->has('success')) { ?>
                        <div class="alert alert-success solid alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                            </svg>
                            <strong>Success!</strong> <?php echo session()->get('success'); ?>.
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    <?php } ?>
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $role->id }}">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nama Role</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}" required>
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
                                                                        <input type="checkbox" <?php echo $sub_menu->role_permission ? ($sub_menu->role_permission->view_access ? 'checked' : '') : '' ?> name="cbView{{ $sub_menu->id }}" onchange="select_c(<?php echo $sub_menu->id ?>);">
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($sub_menu->has_add) { ?>
                                                                        <input type="checkbox" <?php echo $sub_menu->role_permission ? ($sub_menu->role_permission->add_access ? 'checked' : '') : '' ?> name="cbAdd{{ $sub_menu->id }}">
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($sub_menu->has_edit) { ?>
                                                                        <input type="checkbox" <?php echo $sub_menu->role_permission ? ($sub_menu->role_permission->edit_access ? 'checked' : '') : '' ?> name="cbEdit{{ $sub_menu->id }}">
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($sub_menu->has_delete) { ?>
                                                                        <input type="checkbox" <?php echo $sub_menu->role_permission ? ($sub_menu->role_permission->delete_access ? 'checked' : '') : '' ?> name="cbDelete{{ $sub_menu->id }}">
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
                                                                        <input type="checkbox" <?php echo $sub_menu->role_permission ? ($sub_menu->role_permission->view_access ? 'checked' : '') : '' ?> name="cbView{{ $sub_menu->id }}" onchange="select_c(<?php echo $sub_menu->id ?>);">
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($sub_menu->has_add) { ?>
                                                                        <input type="checkbox" <?php echo $sub_menu->role_permission ? ($sub_menu->role_permission->add_access ? 'checked' : '') : '' ?> name="cbAdd{{ $sub_menu->id }}">
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($sub_menu->has_edit) { ?>
                                                                        <input type="checkbox" <?php echo $sub_menu->role_permission ? ($sub_menu->role_permission->edit_access ? 'checked' : '') : '' ?> name="cbEdit{{ $sub_menu->id }}">
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($sub_menu->has_delete) { ?>
                                                                        <input type="checkbox" <?php echo $sub_menu->role_permission ? ($sub_menu->role_permission->delete_access ? 'checked' : '') : '' ?> name="cbDelete{{ $sub_menu->id }}">
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
                                                                <input type="checkbox" <?php echo $menu->role_permission ? ($menu->role_permission->view_access ? 'checked' : '') : '' ?> name="cbView{{ $menu->id }}" onchange="select_c(<?php echo $sub_menu->id ?>);">
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($menu->has_add) { ?>
                                                                <input type="checkbox" <?php echo $menu->role_permission ? ($menu->role_permission->add_access ? 'checked' : '') : '' ?> name="cbAdd{{ $menu->id }}">
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($menu->has_edit) { ?>
                                                                <input type="checkbox" <?php echo $menu->role_permission ? ($menu->role_permission->edit_access ? 'checked' : '') : '' ?> name="cbEdit{{ $menu->id }}">
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($menu->has_delete) { ?>
                                                                <input type="checkbox" <?php echo $menu->role_permission ? ($menu->role_permission->delete_access ? 'checked' : '') : '' ?> name="cbDelete{{ $menu->id }}">
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
        </div>
    </div><!--end col-->
</div><!--end row-->

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