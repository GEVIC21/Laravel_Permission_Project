@php
    $PermissionUser = App\Models\PermissionRoleModel::getPermission('User', Auth::user()->role_id);
    $PermissionRole = App\Models\PermissionRoleModel::getPermission('Role', Auth::user()->role_id);
    $PermissionCategory = App\Models\PermissionRoleModel::getPermission('Category', Auth::user()->role_id);
    $PermissionSubCategory = App\Models\PermissionRoleModel::getPermission('Sub Category', Auth::user()->role_id);
    $PermissionProduct = App\Models\PermissionRoleModel::getPermission('Product', Auth::user()->role_id);
    $PermissionSetting = App\Models\PermissionRoleModel::getPermission('Setting', Auth::user()->role_id);
@endphp


<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">

                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Tableau de Board</span>
                    </a>
                </li>

                @if(!empty($PermissionUser))
                <li>
                    <a href="{{ route('user.list') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-users-alt"></span>
                        <span class="menu-text">Utilisateurs</span>
                    </a>
                </li>
                @endif


                @if(!empty($PermissionRole))
                <li>
                    <a href="{{ route('role.list') }}" class="{{ request()->routeIs('role.*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-user-plus"></span>
                        <span class="menu-text">Role</span>
                    </a>
                </li>
                @endif


                @if(!empty($PermissionCategory))
                <li>
                    <a href="{{ route('role.list') }}" class="{{ request()->routeIs('role.*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-user-plus"></span>
                        <span class="menu-text">Categorie</span>
                    </a>
                </li>
                @endif

                @if(!empty($PermissionSubCategory))
                <li>
                    <a href="{{ route('role.list') }}" class="{{ request()->routeIs('role.*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-user-plus"></span>
                        <span class="menu-text">Sous Categorie</span>
                    </a>
                </li>
                @endif

                @if(!empty($PermissionProduct))
                <li>
                    <a href="{{ route('role.list') }}" class="{{ request()->routeIs('role.*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-user-plus"></span>
                        <span class="menu-text">Produit</span>
                    </a>
                </li>
                @endif

                @if(!empty($PermissionSetting))
                <li>
                    <a href="{{ route('role.list') }}" class="{{ request()->routeIs('role.*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-user-plus"></span>
                        <span class="menu-text">Paramètre</span>
                    </a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</div>

<style>
/* Si vous avez besoin de définir le style pour la classe active */
.active {
    background-color: #f0f0f0; /* ou la couleur de votre choix */
    color: #your-color;
    /* Ajoutez d'autres styles selon vos besoins */
}
</style>
