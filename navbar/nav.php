<?php
// components/navigation.php

function getNavigation($role) {
    
    
    // Role-specific navigation items
    $roleNav = '';
    
    switch($role) {
        case 'admin':
            $roleNav = '
                
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=admin_article">Manajemen Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=admin_gallery">Manajemen Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=admin_user">Manajemen User</a>
                </li>';
                $userDropdown = '
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger fw-bold" 
                    href="#" 
                    role="button" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false"
                    id="userDropdown">
                        ' . htmlspecialchars($_SESSION['username']) . '
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>';  
            break;
            
        default: // regular user
            $roleNav = '
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php?page=index copy">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=articlee">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=schedule">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=profile">Profile</a>
                </li>';
                $userDropdown = '
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger fw-bold" 
                    href="#" 
                    role="button" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false"
                    id="userDropdown">
                        ' . htmlspecialchars($_SESSION['username']) . '
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="index.php?page=profile">profile</a></li>
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>';
                
            break;
    }
    
    
    return  $roleNav . $userDropdown ;
    
   
}
?>