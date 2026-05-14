<?php
require_once 'includes/auth.php';
require_once 'db.php';

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($username && $password && $password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        try {
            $stmt = $pdo->prepare("INSERT INTO users (username, password, language) VALUES (?, ?, ?)");
            $stmt->execute([$username, $hashed_password, $current_lang]);
            
            // Auto login
            $_SESSION['user_id'] = $pdo->lastInsertId();
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } catch (\PDOException $e) {
            // Duplicate username error code usually 23000
            if ($e->getCode() == 23000) {
                $error = $lang['register_error'];
            } else {
                $error = "Database error: " . $e->getMessage();
            }
        }
    } else {
        $error = $lang['register_error'];
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['app_name'] ?> - <?= $lang['register'] ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#f5fbef',
                        primary: '#006e1c',
                        'primary-container': '#4caf50',
                        'on-surface': '#171d16',
                        'surface-container': '#eaf0e4',
                        error: '#ba1a1a',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .glass-effect {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(129, 199, 132, 0.3);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-sans min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <span class="material-symbols-outlined text-primary text-5xl">spa</span>
            <h1 class="text-4xl font-bold text-primary mt-2"><?= $lang['app_name'] ?></h1>
        </div>

        <div class="glass-effect rounded-2xl p-8 shadow-xl">
            <h2 class="text-2xl font-semibold mb-6 text-center"><?= $lang['register'] ?></h2>

            <?php if ($error): ?>
                <div class="bg-error/10 text-error p-3 rounded-lg mb-4 text-center">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="register.php" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1"><?= $lang['username'] ?></label>
                    <input type="text" name="username" required class="w-full px-4 py-3 rounded-xl border border-primary/20 bg-white/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-1"><?= $lang['password'] ?></label>
                    <input type="password" name="password" required class="w-full px-4 py-3 rounded-xl border border-primary/20 bg-white/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1"><?= $lang['confirm_password'] ?></label>
                    <input type="password" name="confirm_password" required class="w-full px-4 py-3 rounded-xl border border-primary/20 bg-white/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                </div>

                <button type="submit" class="w-full bg-primary hover:bg-primary-container text-white font-semibold py-3 rounded-xl transition-colors shadow-lg shadow-primary/20 mt-4">
                    <?= $lang['register'] ?>
                </button>
            </form>

            <div class="mt-6 text-center">
                <a href="login.php" class="text-primary hover:underline text-sm font-medium"><?= $lang['has_account'] ?></a>
            </div>
            
            <div class="mt-8 flex justify-center gap-4 text-sm">
                <a href="?lang=nl" class="hover:text-primary <?= ($current_lang == 'nl') ? 'font-bold text-primary' : '' ?>">NL</a>
                <a href="?lang=en" class="hover:text-primary <?= ($current_lang == 'en') ? 'font-bold text-primary' : '' ?>">EN</a>
                <a href="?lang=fr" class="hover:text-primary <?= ($current_lang == 'fr') ? 'font-bold text-primary' : '' ?>">FR</a>
            </div>
        </div>
    </div>
</body>
</html>