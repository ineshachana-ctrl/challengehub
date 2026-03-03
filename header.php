<nav>
    <div class="logo">CHALLENGE.IO</div>
    <div class="nav-links">
        <a href="index.php?action=list_challenges">Explorer</a>
        <?php if(isset($_SESSION['user'])): ?>
            <a href="index.php?action=dashboard">Tableau de bord</a>
            <a href="index.php?action=edit_profile">Profil</a>
            <a href="index.php?action=logout" style="color: var(--danger);">Quitter</a>
        <?php else: ?>
            <a href="index.php?action=login">Connexion</a>
            <a href="index.php?action=register" class="btn btn-primary" style="width: auto; padding: 8px 15px;">S'inscrire</a>
        <?php endif; ?>
    </div>
</nav>