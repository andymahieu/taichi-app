<?php
require_once 'includes/auth.php';
require_login();
?>
<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?= $lang['session'] ?></title>
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
                        'surface-container-high': '#e4eade',
                        'surface-dim': '#d6dcd0',
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
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
        }
        .breathing-circle-outer {
            width: 180px; height: 180px; border-radius: 50%;
            background: rgba(76, 175, 80, 0.1);
            display: flex; align-items: center; justify-content: center;
            transition: all 4s ease-in-out;
        }
        .breathing-circle-inner {
            width: 100px; height: 100px; border-radius: 50%;
            background: #4caf50; display: flex; align-items: center;
            justify-content: center; color: white;
            box-shadow: 0 4px 20px rgba(46, 59, 50, 0.2);
            transition: transform 4s ease-in-out;
        }
    </style>
</head>
<body class="bg-background text-on-surface font-sans min-h-screen pb-32">

<header class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-xl h-20 shadow-sm">
    <div class="flex items-center justify-between px-6 max-w-6xl mx-auto h-full">
        <button onclick="saveProgressAndGoBack()" class="flex items-center justify-center w-12 h-12 rounded-full hover:bg-primary-container/20 transition-colors">
            <span class="material-symbols-outlined text-primary text-3xl">arrow_back</span>
        </button>
        <h1 class="text-xl font-bold text-primary" id="session-title"><?= $lang['session'] ?></h1>
        <div class="w-12"></div> <!-- Spacer for centering -->
    </div>
</header>

<main class="pt-24 max-w-6xl mx-auto px-6">
    <section class="relative w-full aspect-video rounded-xl overflow-hidden shadow-lg bg-surface-dim mb-8">
        <img id="video-frame" class="w-full h-full object-cover transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4bNwrqcemIHYHKhHE6HnAYyyafE7HR--egO6gnKaElNnPi1scrbuzpnmn4Cd5NUwnAvsiran4azjJFKYG3cmQYjg5CXBTdAa7bd-TtQNlHrNkdHmpCECFxfcPJSDkjwMmVstzxB26RPaFgQa3SXCUvBRP3j3_Z_859oTUNBROXPcZFh_CSFSfqmebBtfA6KV52sXKQJfBq7rvv9nLiUgRwGKqdNrWwX_DhlcERWzF-Ohfz5DnSKiS82FaGwvd8wUi3jll3g3TkvM"/>
        <div class="absolute inset-0 flex flex-col justify-between p-6 bg-gradient-to-t from-black/40 via-transparent to-transparent">
            <div class="flex justify-between items-start">
                <span class="bg-primary px-4 py-1.5 rounded-full text-white text-sm font-semibold"><?= $lang['live_lesson'] ?></span>
            </div>
            <div class="flex justify-end">
                <div class="glass-panel px-4 py-2 rounded-xl flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">compare_arrows</span>
                    <span class="text-sm font-semibold" id="mirror-status"><?= $lang['mirror_off'] ?></span>
                </div>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Breathing Guide -->
        <div class="md:col-span-2 glass-panel p-8 rounded-xl border border-primary/10 flex flex-col items-center justify-center min-h-[300px]">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-primary mb-2"><?= $lang['breathing_guide'] ?></h2>
                <p class="text-on-surface-variant"><?= $lang['breathing_desc'] ?></p>
            </div>
            <div class="breathing-circle-outer" id="breathing-outer">
                <div class="breathing-circle-inner" id="breathing-inner">
                    <span id="breathing-text" class="text-sm font-bold uppercase tracking-widest"><?= $lang['inhale'] ?></span>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <div class="flex flex-col gap-6">
            <div class="glass-panel p-6 rounded-xl border border-primary/10 flex-1">
                <h3 class="text-sm font-bold text-on-surface-variant mb-4 uppercase tracking-wider"><?= $lang['playback_speed'] ?></h3>
                <div class="flex flex-col gap-3">
                    <button class="w-full py-3 px-4 rounded-lg bg-surface-container-high hover:bg-secondary-container transition-colors text-left flex justify-between items-center group">
                        <span><?= $lang['speed_slow'] ?></span>
                    </button>
                    <button class="w-full py-3 px-4 rounded-lg bg-secondary-container text-primary font-bold flex justify-between items-center">
                        <span><?= $lang['speed_normal'] ?></span>
                        <span class="material-symbols-outlined">check_circle</span>
                    </button>
                    <button class="w-full py-3 px-4 rounded-lg bg-surface-container-high hover:bg-secondary-container transition-colors text-left flex justify-between items-center group">
                        <span><?= $lang['speed_relaxed'] ?></span>
                    </button>
                </div>
            </div>

            <div class="glass-panel p-6 rounded-xl border border-primary/10 flex items-center justify-between">
                <div>
                    <p class="font-semibold"><?= $lang['mirror_mode'] ?></p>
                    <p class="text-sm text-on-surface-variant"><?= $lang['mirror_desc'] ?></p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input id="mirror-toggle" type="checkbox" class="sr-only peer">
                    <div class="w-14 h-8 bg-surface-dim rounded-full peer peer-checked:bg-primary transition-all after:content-[''] after:absolute after:top-[4px] after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:after:translate-x-full"></div>
                </label>
            </div>
        </div>
    </div>
</main>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    const moduleName = urlParams.get('module') || 'General Practice';
    
    // JS Translations passed from PHP
    const translations = {
        warmup: <?= json_encode($lang['module_warmup']) ?>,
        walking: <?= json_encode($lang['module_walking']) ?>,
        cloudhands: <?= json_encode($lang['module_cloud']) ?>,
        inhale: <?= json_encode($lang['inhale']) ?>,
        exhale: <?= json_encode($lang['exhale']) ?>,
        mirror_off: <?= json_encode($lang['mirror_off']) ?>,
        mirror_on: <?= json_encode($lang['mirror_on']) ?>
    };

    document.getElementById('session-title').textContent = translations[moduleName] || moduleName;

    const startTime = Date.now();

    function saveProgressAndGoBack() {
        const endTime = Date.now();
        let durationMinutes = Math.floor((endTime - startTime) / 60000);
        if (durationMinutes === 0) durationMinutes = 1;

        fetch('api/progress.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                module_name: moduleName,
                duration_minutes: durationMinutes
            })
        }).then(() => {
            window.location.href = 'index.php';
        }).catch(err => {
            console.error('Error saving progress', err);
            window.location.href = 'index.php';
        });
    }

    const mirrorToggle = document.getElementById('mirror-toggle');
    const videoFrame = document.getElementById('video-frame');
    const mirrorStatus = document.getElementById('mirror-status');
    
    mirrorToggle.addEventListener('change', (e) => {
        if (e.target.checked) {
            videoFrame.style.transform = 'scaleX(-1)';
            mirrorStatus.textContent = translations.mirror_on;
        } else {
            videoFrame.style.transform = 'scaleX(1)';
            mirrorStatus.textContent = translations.mirror_off;
        }
    });

    const breathingOuter = document.getElementById('breathing-outer');
    const breathingInner = document.getElementById('breathing-inner');
    const breathingText = document.getElementById('breathing-text');
    let isInhaling = true;

    setInterval(() => {
        if (isInhaling) {
            breathingInner.style.transform = 'scale(1.6)';
            breathingOuter.style.transform = 'scale(1.2)';
            breathingText.textContent = translations.inhale;
        } else {
            breathingInner.style.transform = 'scale(1)';
            breathingOuter.style.transform = 'scale(1)';
            breathingText.textContent = translations.exhale;
        }
        isInhaling = !isInhaling;
    }, 4000);
</script>
</body>
</html>