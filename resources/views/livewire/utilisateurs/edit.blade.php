<div class="row p-4 pt-5">

    <div class="col-md-6">
        <div class="row ">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-key fa-2x"></i> Réinitialisation de mot de passe</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="#" class="btn btn-link" wire:click.prevent="confirmPwdReset()">Réinitialiser le mot de passe</a>
                                <span>(par défaut: "password") </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="card card-primary">
                    <div class="card-header d-flex align-items-center">
                    <h3 class="card-title flex-grow-1"><i class="fas fa-fingerprint fa-2x"></i> Roles & permissions</h3>
                    <button class="btn bg-gradient-success" wire:click="updateRoleAndPermissions"><i class="fas fa-check"></i> Appliquer les modifications</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div id="accordion">
                                    @foreach($rolePermissions["roles"] as $role)
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <h4 class="card-title flex-grow-1">
                                            <a  data-parent="#accordion" href="#"  aria-expanded="true">
                                                {{$role["role_nom"]}}
                                            </a>
                                            </h4>
                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">

                                                <input type="checkbox" class="custom-control-input" wire:model.lazy="rolePermissions.roles.{{$loop->index}}.active"
                                                    @if($role["active"]) checked @endif
                                                    id="customSwitch{{$role['role_id']}}">
                                                <label class="custom-control-label" for="customSwitch{{$role['role_id']}}"> {{ $role["active"]? "Activé" : "Desactivé" }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            </div>
                    </div>

                    <div class="p-3">
                        <table class="table table-bordered">
                            <thead>
                                <th>Permissions</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($rolePermissions["permissions"] as $permission)
                                <tr>
                                    <td>{{ $permission["permission_nom"] }}</td>
                                    <td>
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">

                                                <input type="checkbox" class="custom-control-input"
                                                    @if($permission["active"]) checked @endif
                                                    wire:model.lazy="rolePermissions.permissions.{{$loop->index}}.active"
                                                    id="customSwitchPermission{{$permission['permission_id']}}">
                                                <label class="custom-control-label" for="customSwitchPermission{{$permission['permission_id']}}"> {{ $permission["active"]? "Activé" : "Desactivé" }}</label>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<script>
    window.addEventListener("showSucces",event=>{
        Swal.fire({
         position:'top-end',
         icon:'success',
         toast:true,
         title:event.detail.message||"operation effectué avec succés !",
         showConfirmButton:false,
         timer:3000
        })
    })
</script>
