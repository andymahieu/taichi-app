<?php
require_once 'includes/auth.php';
require_login();
require_once 'db.php';

// Fetch today's progress for the logged-in user
$user_id = $_SESSION['user_id'];
$date_today = date('Y-m-d');
$stmt = $pdo->prepare("SELECT SUM(duration_minutes) as total_mins FROM progress WHERE user_id = ? AND date_practiced = ?");
$stmt->execute([$user_id, $date_today]);
$row = $stmt->fetch();
$total_mins = $row['total_mins'] ?? 0;
$goal_mins = 20;
$progress_percent = min(100, ($total_mins / $goal_mins) * 100);
?>
<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?= $lang['app_name'] ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#f5fbef',
                        primary: '#006e1c',
                        'primary-container': '#4caf50',
                        'secondary-container': '#abf4ac',
                        'on-surface': '#171d16',
                        'on-surface-variant': '#3f4a3c',
                        'surface-container': '#eaf0e4',
                        'surface-container-low': '#f0f6ea',
                        'surface-container-highest': '#dee4d9',
                        'accent-focus': '#FF9800',
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
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(129, 199, 132, 0.3);
        }
    </style>
</head>
<body class="bg-background font-sans text-on-surface min-h-screen">
<header class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-md shadow-sm">
    <div class="flex justify-between items-center h-20 px-6 max-w-4xl mx-auto">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-3xl">spa</span>
            <h1 class="text-2xl font-bold text-primary"><?= $lang['app_name'] ?></h1>
        </div>
        <div class="flex items-center gap-4">
            <a href="?lang=nl" class="text-sm hover:text-primary <?= ($current_lang == 'nl') ? 'font-bold text-primary' : '' ?>">NL</a>
            <a href="?lang=en" class="text-sm hover:text-primary <?= ($current_lang == 'en') ? 'font-bold text-primary' : '' ?>">EN</a>
            <a href="?lang=fr" class="text-sm hover:text-primary <?= ($current_lang == 'fr') ? 'font-bold text-primary' : '' ?>">FR</a>
            
            <a href="logout.php" class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors" title="<?= $lang['logout'] ?>">
                <span class="material-symbols-outlined">logout</span>
            </a>
        </div>
    </div>
</header>

<main class="pt-24 pb-32 px-6 max-w-4xl mx-auto">
    <!-- Daily Progress Section -->
    <section class="mb-8">
        <div class="glass-effect rounded-xl p-6 shadow-sm">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <h2 class="text-xl font-semibold mb-1"><?= $lang['daily_practice'] ?></h2>
                    <p class="text-on-surface-variant"><?= $total_mins ?> <?= $lang['mins_practiced'] ?></p>
                </div>
                <div class="bg-primary-container/10 p-3 rounded-full">
                    <span class="material-symbols-outlined text-primary text-3xl">bolt</span>
                </div>
            </div>
            
            <div class="w-full bg-surface-container-highest rounded-full h-4 mb-2 overflow-hidden">
                <div class="bg-accent-focus h-full rounded-full transition-all duration-1000" style="width: <?= $progress_percent ?>%; box-shadow: 0 0 12px rgba(255, 152, 0, 0.3);"></div>
            </div>
            <div class="flex justify-between text-sm text-on-surface-variant font-semibold">
                <span><?= $lang['goal'] ?>: <?= $goal_mins ?> mins</span>
                <span class="text-primary"><?= round($progress_percent) ?>% <?= $lang['complete'] ?></span>
            </div>
        </div>
    </section>

    <!-- Practice Modules Section -->
    <section>
        <h3 class="text-xl font-semibold mb-4 px-1"><?= $lang['practice_modules'] ?></h3>
        <div class="flex flex-col gap-4">
            
            <div onclick="window.location.href='player.php?module=warmup';" class="glass-effect rounded-xl p-5 flex items-center gap-4 hover:bg-surface-container-low/50 transition-all active:scale-[0.98] cursor-pointer">
                <div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0 bg-surface-container-highest">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNTQ-51QWiMvZIkl7rzgJPPB1HdGikdLbLgkmPA0W5Xqw3fJ3Bk6G1Kk-2B1Fask-CrdFVUghSIkw2p_aOWTmqm5Tb7Rx7T2Y67gKacy7WV2CGyfN1jo9tQwbKK7_09ZfRmmWuMZPBsQJgdPco-XYsc20a-FHbbhmOWC5Ila8bvZjIBmdj1wlgmDTdef1Fwv12N-8pEphYDrVM_5Pjr6KeQ_pwCNlbvPioQKVz__OnLw9g1T8fk5wSXhSO_7AHZrENQy0klmrwAD0"/>
                </div>
                <div class="flex-grow">
                    <h4 class="text-lg font-semibold"><?= $lang['module_warmup'] ?></h4>
                    <p class="text-on-surface-variant"><?= $lang['module_warmup_desc'] ?></p>
                </div>
                <span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
            </div>

            <div onclick="window.location.href='player.php?module=walking';" class="glass-effect rounded-xl p-5 flex items-center gap-4 hover:bg-surface-container-low/50 transition-all active:scale-[0.98] cursor-pointer">
                <div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0 bg-surface-container-highest">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcg-LCPysdiIKRGmzYhVA9SraM7-PyLNfEe70cDopzyctZpFVWNA00evoKt0tGX6YSb0M1EAzZP_wbWU9vT2T8r4Sd6vASMLxCIAq3SC1DWhLE6WW51b6yjSn4wHUhZS_o7cH6R7riuwQkiF-5OzTZo0vIe69i7Tm__T1Uh8fU2WyBVpPSQGSrEIvbEoJWsGlmo8QJW-woDpOkADm0648h62-BUmYLih_8gkl_GSTdP3nky6gzu4vjhUnG7BrBao2x8ZSbMejD2Fg"/>
                </div>
                <div class="flex-grow">
                    <h4 class="text-lg font-semibold leading-tight"><?= $lang['module_walking'] ?></h4>
                    <p class="text-on-surface-variant"><?= $lang['module_walking_desc'] ?></p>
                </div>
                <span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
            </div>

            <div onclick="window.location.href='player.php?module=cloudhands';" class="glass-effect rounded-xl p-5 flex items-center gap-4 hover:bg-surface-container-low/50 transition-all active:scale-[0.98] cursor-pointer">
                <div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0 bg-surface-container-highest">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXqyISTIQDJIdle9LqweIaj6EVD0zSYZ0CR6gkJk78xj1A4SD7oSVhSQStvpnec78-_9PD-5uYDOp8kqgrZ1xkMFG6CFLsJNipfy3hOyWzHjAM9FOdP-OO8Ey9vSHrzTQjX6Mb5uopkoVo1452TmOAIz-m9j0xF6wtr9-Qjg2MNVc_XtlJAQ3mITZTkOrDlaB4QwocYJNv4ARlzldiAxbokiD-dn4A5eWWl7LRjFm5qsLHWZGQvC0DqNEc-gqs5BEM29ZISE9xpW0"/>
                </div>
                <div class="flex-grow">
                    <h4 class="text-lg font-semibold"><?= $lang['module_cloud'] ?></h4>
                    <p class="text-on-surface-variant"><?= $lang['module_cloud_desc'] ?></p>
                </div>
                <span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
            </div>
            
        </div>
    </section>

    <div class="mt-8 p-4 bg-surface-container rounded-lg border border-primary/10 flex gap-3 items-center">
        <span class="material-symbols-outlined text-primary">info</span>
        <p class="text-sm font-semibold text-on-surface-variant"><?= $lang['accessibility_note'] ?></p>
    </div>
</main>

<nav class="fixed bottom-0 left-0 w-full bg-white/80 backdrop-blur-xl border-t border-primary/10 z-50">
    <div class="flex justify-around items-center h-20 px-6 max-w-4xl mx-auto pb-2">
        <a class="flex flex-col items-center justify-center bg-secondary-container text-primary rounded-full px-6 py-1" href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home_mini</span>
            <span class="text-xs font-semibold mt-1"><?= $lang['nav_home'] ?></span>
        </a>
        <a class="flex flex-col items-center justify-center text-on-surface-variant px-6 py-1 hover:text-primary transition-colors" href="#">
            <span class="material-symbols-outlined">monitoring</span>
            <span class="text-xs font-semibold mt-1"><?= $lang['nav_progress'] ?></span>
        </a>
        <a class="flex flex-col items-center justify-center text-on-surface-variant px-6 py-1 hover:text-primary transition-colors" href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="text-xs font-semibold mt-1"><?= $lang['nav_settings'] ?></span>
        </a>
    </div>
</nav>
</body>
</html>