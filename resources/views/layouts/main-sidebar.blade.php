<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="/dashboard">Accueil</a> </li>
                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
                    <!-- menu item Niveaux-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">Niveaux</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('niveau.index')}}">Listes des niveaux</a></li>

                        </ul>
                    </li>
                    <!-- menu item emploi-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#emploi-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">Emploi du temps</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="emploi-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('emploi.index')}}">Liste des emploi</a> </li>
                            <li> <a href={{route('salle.index')}}>Reservation des salles</a> </li>
                        </ul>
                    </li>
                    <!-- menu item etudiant-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#etudiant-menu">
                            <div class="pull-left"><i class="ti-id-badge"></i><span
                                    class="right-nav-text">Etudiants</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="etudiant-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('etudiant.index')}}">Liste des etudiants</a> </li>
                            <li> <a href="calendar-list.html">Modifier Etudiant</a> </li>
                        </ul>
                    </li>
                    <!-- menu item professeurs-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#professeur-menu">
                            <div class="pull-left"><i class="ti-user"></i><span
                                    class="right-nav-text">Professeurs</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="professeur-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Professeur.index')}}">Liste des professeurs</a> </li>
                            <li> <a href="calendar-list.html">Modifier professeur</a> </li>
                        </ul>
                    </li>
                    <!-- menu Notes item -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#note-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">Gestion des Notes</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="note-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('examen.index')}}">Modifier Notes</a> </li>
                        </ul>
                    </li>
                    <!-- menu item Charts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#pfe-root">
                            <div class="pull-left"><i class="ti-bookmark-alt"></i><span
                                    class="right-nav-text">PFE</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="pfe-root" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('pfe.index')}}">Liste des PFE</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#module-root">
                            <div class="pull-left"><i class="ti-files"></i><span
                                    class="right-nav-text">Modules</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="module-root" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('module.index')}}">Liste des modules</a> </li>
                        </ul>
                    </li>


                    <!-- menu item Multi level-->
                   
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
