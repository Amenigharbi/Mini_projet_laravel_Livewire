<div class="row p-4 pt-5">

    <div class="col-md-6">

    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title"><i class="fas fa-user-plus fa=2x"></i>Formulaire de création d'un nouvel utilisateur </h3>
    </div>


    <form role="form" wire:submit.prevent='ajout_user()'>
    <div class="card-body">
    <div class="d-flex">
    <div class="form-group flex-grow-1 mr-2">
    <label>Nom</label>
    <input type="text" wire:model='newUser.nom' class="form-control @error('newUser.nom') is-invalid @enderror">
    @error('newUser.nom')
     <span class="text-danger">{{$message}}
    @enderror
    </div>
    <div class="form-group flex-grow-1">
    <label>Prenom</label>
    <input type="text"wire:model='newUser.prenom' class="form-control @error('newUser.prenom')is-invalid @enderror">
    @error('newUser.prenom')
     <span class="text-danger">{{$message}}
    @enderror
    </div>
    </div>




    <div class="form-group">
    <label>Sexe</label>
    <select class="form-control @error('newUser.sexe')is-invalid @enderror" wire:model='newUser.sexe'>
        @error('newUser.sexe')
        <span class="text-danger">{{$message}}
       @enderror
        <option>----------------</option>
        <option value="H">Homme</option>
        <option value="F">Femme</option>
    </select>
    </div>

    <div class="form-group">
        <label>Adresse Email</label>
        <input type="text"class="form-control @error('newUser.email')is-invalid @enderror"wire:model='newUser.email' >
        @error('newUser.email')
        <span class="text-danger">{{$message}}
       @enderror
    </div>

    <div class="d-flex">
        <div class="form-group flex-grow-1 mr-2">
        <label>Telephone1</label>
        <input type="text" class="form-control @error('newUser.telephone1')is-invalid @enderror" wire:model='newUser.telephone1'>
        @error('newUser.telephone1')
        <span class="text-danger">{{$message}}
       @enderror
        </div>
        <div class="form-group flex-grow-1">
        <label>telephone2</label>
        <input type="text"class="form-control @error('newUser.telephone2')is-invalid @enderror" wire:model='newUser.telephone2'>
        @error('newUser.telephone2')
        <span class="text-danger">{{$message}}
       @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Piece d'identité</label>
        <select class="form-control @error('newUser.pieceIdentite')is-invalid @enderror" wire:model='newUser.pieceIdentite'>
            @error('newUser.pieceIdentite')
        <span class="text-danger">{{$message}}
       @enderror
            <option>----------------</option>
            <option value="CNI">CNI</option>
            <option value="Passport">Passport</option>
            <option value="Permis">Permis de conduire</option>
        </select>
    </div>

    <div class="form-group ">
            <label>Numero Piece d'identité</label>
            <input type="text" class="form-control @error('newUser.numeroPieceIdentite')is-invalid @enderror" wire:model='newUser.numeroPieceIdentite'>
            @error('newUser.numeroPieceIdentite')
            <span class="text-danger">{{$message}}
           @enderror
   </div>

   <div class="form-group">
     <label for="password">Mot de passe</label>
     <input type="text" class="form-control" disabled placeholder="password" >
   </div>

    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Valider</button>
    <button type="button" wire:click="goToListe()" class="btn btn-primary">Retourner à la liste des utilisateurs</button>

    </div>
    </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-info">Sign in</button>
        <button type="submit" class="btn btn-default float-right">Cancel</button>
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
