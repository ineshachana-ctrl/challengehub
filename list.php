<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Tous les Défis</title>
</head>
<body>
    <?php include "app/views/header.php"; ?>

    <div class="container animate">
        <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px;">
            <h1>Défis Actuels</h1>
            <?php if(isset($_SESSION['user'])): ?>
                <a href="index.php?action=create_challenge" class="btn btn-primary" style="width: auto;">+ Nouveau Défi</a>
            <?php endif; ?>
        </header>

        <div class="grid">
            <?php foreach ($challenges as $c): ?>
            <div class="glass-card challenge-card">
                <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                    <span class="badge"><?= htmlspecialchars($c['category']) ?></span>
                </div>
                <h3 style="margin-bottom: 10px;"><?= htmlspecialchars($c['title']) ?></h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 20px;">
                    <?= substr(htmlspecialchars($c['description']), 0, 80) ?>...
                </p>
                <div style="font-size: 0.8rem; color: var(--accent); margin-bottom: 15px;">
                    📅 Expire le : <?= $c['deadline'] ?>
                </div>
                
                <div style="display: flex; gap: 10px;">
                    <a href="index.php?action=view_challenge&id=<?= $c['id'] ?>" class="btn btn-primary" style="font-size: 0.8rem;">Participer</a>
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']['id'] == $c['user_id']): ?>
                        <a href="index.php?action=edit_challenge&id=<?= $c['id'] ?>" class="btn" style="background: #334155; color: white; width: auto;"><i class="edit-icon">⚙️</i></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>