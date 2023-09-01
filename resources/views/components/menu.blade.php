<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <style>.colored-icon { color: rgb(190, 56, 161); }</style>

      <li class="nav-item">
        <a href="{{route("home")}}" class="nav-link {{setMenuActive('home')}}">
            <i class="nav-icon fas fa-home colored-icon"></i>
            <p>Acceuil</p>
        </a>
      </li>

      @can("manager")
    <li class="nav-item">
        <a href="#" class="nav-link">

            <i class="nav-icon fas fa-tachometer-alt colored-icon "></i>
            <p>
                Tableau de bord
            <i class="right fas fa-angle-left colored-icon "></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-chart-line colored-icon"></i>
                    <p>Vue globale</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-swatchbook colored-icon"></i>
                    <p>Locations</p>
                </a>
            </li>
        </ul>
    </li>
    @endcan
    @can("admin")
     <li class="nav-item {{setMenuStyle("admin.habilitations.",'menu-open')}}">
        <a href="#" class="nav-link  {{setMenuStyle("admin.habilitations.","active")}}">
            <i class="nav-icon fas fa-user-shield colored-icon"></i>
            <p>Habilitations <i class="right fas fa-angle-left colored-icon"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route("admin.habilitations.users.index")}}" class="nav-link {{setMenuActive("admin.habilitations.users.index")}}">
                    <i class="nav-icon fas fa-users-cog colored-icon"></i>
                    <p> Utilisateurs</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-fingerprint colored-icon"></i>
                    <p>Roles et permissions </p>
                </a>
            </li>
        </ul>
     </li>
     <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs colored-icon"></i>
            <p> Gestion des articles <i class="right fas fa-angle-left colored-icon"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle colored-icon"></i>
                    <p>Type d'articles</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-list-ul colored-icon"></i>
                    <p>Articles</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h colored-icon"></i>
                    <p>Tarifications</p>
                </a>
            </li>
        </ul>
     </li>
     @endcan
      @can("employe")
     <li class="nav-header">Les Locations</li>
     <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users colored-icon"></i>
            <p>Gestion des clients </p></a>
     </li>
     <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-exchange-alt colored-icon"></i>
            <p>Gestion des Locations</p>
        </a>
     </li>
     <li class="nav-header">Caisse</li>
     <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-coins colored-icon"></i>
            <p>Gestion des paiements</p>
        </a>
     </li>
     @endcan

    </ul>
</nav>
