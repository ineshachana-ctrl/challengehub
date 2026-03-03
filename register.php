<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Créer un compte</title>
</head>
<body>
    <div style="display: flex; align-items: center; justify-content: center; min-height: 100vh;">
        <div class="glass-card animate" style="width: 100%; max-width: 450px;">
            <h2 style="text-align: center; margin-bottom: 30px; font-size: 2rem;">Rejoindre l'aventure</h2>
            
            <form action="index.php?action=register" method="POST">
                <div class="form-group">
                    <label>Nom complet</label>
                    <input type="text" name="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn btn-primary">Créer mon compte</button>
            </form>
            
            <p style="text-align: center; margin-top: 20px; font-size: 0.9rem; color: var(--text-muted);">
                Déjà inscrit ? <a href="index.php?action=login" style="color: var(--accent);">Se connecter</a>
            </p>
        </div>
    </div>
</body>
</html>