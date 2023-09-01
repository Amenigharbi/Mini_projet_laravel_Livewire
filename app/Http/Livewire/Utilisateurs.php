<?php

namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use withPagination;
    Protected $paginationTheme="bootstrap";
    public $currentPage=PageListe;
    public $newUser=[];




    protected $messages=[
        'newUser.nom.required'=>'le nom est requis',
        'newUser.prenom.required'=>'le prenom est requis',
        'newUser.sexe.required'=>'le sexe est requis',
        'newUser.email.required'=>'l email est requis',
        'newUser.telephone1.required'=>'le telephone est requis',
        'newUser.pieceIdentite.required'=>"la piece d 'identité est requis",
        'newUser.numeroPieceIdentite.required'=>"le numero de piece d'identité est requis",


    ];



    public function render()
    {
        return view('livewire.utilisateurs.index',[
            "users"=>User::latest()->paginate(5)
        ])
        ->extends("layouts.master")->section("contenu");
    }

    public function rules()
    {

        return
        ['newUser.nom'=>'required',
          'newUser.prenom'=>'required',
          'newUser.email'=>'required|email|unique:users,email',
          'newUser.telephone1'=>'required|numeric|unique:users,telephone1',
          'newUser.pieceIdentite'=>'required',
          'newUser.sexe'=>"required",
          'newUser.numeroPieceIdentite'=>'required|unique:users,numeroPieceIdentite',
        ];
    }

    public function goToAddUser()
    {
      $this->currentPage=PageCreate;
    }

    public function goToListe()
    {
    $this->currentPage=PageListe;

    }


    public function ajout_user()
    {

       //verifier les infos
       //ajout nouvel utilisateur
       $validationAttributes=$this->validate();
       $validationAttributes["newUser"]["password"]="password";
       $validationAttributes["newUser"]["photo"]="";
       //dump($validationAttributes);
       User::create($validationAttributes["newUser"]);
       $this->newUser=[];
       $this->dispatchBrowserEvent("showSucces",["message"=>"Utilisateur crée avec succés !"]);
    }


    public function Delete($name,$id)
    {
        $this->dispatchBrowserEvent("ConfirmMsg",["message"=>[



            "text"=>"vous etes sur le point de supprimer $name de la liste des utilisateurs!.Voulez-vous continuer?",
            "title"=>"Etes-vous sure de continuer?",
            "type"=>"warning",
            "data"=>["user_id"=>$id]


        ]]);

    }
    public function DeleteUser($id)
    {
        User::find($id)->destroy($id);
        $this->dispatchBrowserEvent("showSucces",["message"=>"Utilisateur supprimé avec succés !"]);

    }
}
