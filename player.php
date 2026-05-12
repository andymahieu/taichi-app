<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed": "#002107",
                        "secondary": "#286b33",
                        "primary-container": "#4caf50",
                        "background": "#f5fbef",
                        "on-surface-variant": "#3f4a3c",
                        "accent-focus": "#FF9800",
                        "surface-dim": "#d6dcd0",
                        "primary-fixed": "#94f990",
                        "surface-container-low": "#f0f6ea",
                        "tertiary-fixed": "#ffd9e2",
                        "surface-tint": "#006e1c",
                        "secondary-container": "#abf4ac",
                        "surface-bright": "#f5fbef",
                        "on-tertiary-fixed": "#3e001c",
                        "surface-container-highest": "#dee4d9",
                        "inverse-on-surface": "#edf3e7",
                        "primary-fixed-dim": "#78dc77",
                        "on-background": "#171d16",
                        "secondary-fixed": "#abf4ac",
                        "outline-variant": "#becab9",
                        "primary": "#006e1c",
                        "on-surface": "#171d16",
                        "surface-glass": "rgba(255, 255, 255, 0.7)",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed-variant": "#07521d",
                        "on-primary-container": "#003c0b",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-primary-fixed": "#002204",
                        "error-container": "#ffdad6",
                        "inverse-primary": "#78dc77",
                        "surface-container-high": "#e4eade",
                        "secondary-fixed-dim": "#90d792",
                        "tertiary": "#a63360",
                        "surface-variant": "#dee4d9",
                        "outline": "#6f7a6b",
                        "background-light": "#F1F8E9",
                        "on-primary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#f26f9d",
                        "on-tertiary-fixed-variant": "#861948",
                        "text-main": "#2E3B32",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#ffb1c7",
                        "on-secondary-container": "#2e7238",
                        "surface-container": "#eaf0e4",
                        "on-tertiary-container": "#690034",
                        "surface": "#f5fbef",
                        "on-primary-fixed-variant": "#005313"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "20px",
                        "gutter": "24px",
                        "unit": "8px",
                        "max-width": "1200px",
                        "margin-desktop": "64px"
                    },
                    "fontFamily": {
                        "label-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-xl": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-lg": ["16px", {"lineHeight": "1.4", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "body-xl": ["20px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.5", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .breathing-circle-outer {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: rgba(76, 175, 80, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 4s ease-in-out;
        }
        .breathing-circle-inner {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #4caf50;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 4px 20px rgba(46, 59, 50, 0.2);
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background text-on-background font-body-lg min-h-screen pb-32">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-surface-glass backdrop-blur-xl h-20 shadow-[0px_4px_20px_rgba(46,59,50,0.05)]">
<div class="flex items-center justify-between px-margin-mobile md:px-margin-desktop h-full">
<button onclick="saveProgressAndGoBack()" class="flex items-center justify-center w-12 h-12 rounded-full hover:bg-primary-container/20 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-primary text-3xl">arrow_back</span>
</button>
<h1 class="font-headline-lg text-headline-lg text-primary text-center">Tai Chi Session</h1>
<button class="flex items-center justify-center w-12 h-12 rounded-full hover:bg-primary-container/20 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-primary text-3xl">settings</span>
</button>
</div>
</header>
<main class="pt-24 max-w-max-width mx-auto px-margin-mobile md:px-margin-desktop">
<!-- Video Canvas Section -->
<section class="relative w-full aspect-video rounded-xl overflow-hidden shadow-xl bg-surface-dim mb-8 group">
<img id="video-frame" class="w-full h-full object-cover transition-transform duration-300" data-alt="A serene scene of a person practicing graceful Tai Chi movements in a sun-drenched park filled with lush ancient willow trees. The morning light is soft and hazy, filtering through the leaves to create a tranquil, ethereal atmosphere. The visual style is premium and minimalist, with a natural green palette and high clarity that emphasizes focus and balance. The practitioner is wearing white linen clothing, blending harmoniously with the organic environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4bNwrqcemIHYHKhHE6HnAYyyafE7HR--egO6gnKaElNnPi1scrbuzpnmn4Cd5NUwnAvsiran4azjJFKYG3cmQYjg5CXBTdAa7bd-TtQNlHrNkdHmpCECFxfcPJSDkjwMmVstzxB26RPaFgQa3SXCUvBRP3j3_Z_859oTUNBROXPcZFh_CSFSfqmebBtfA6KV52sXKQJfBq7rvv9nLiUgRwGKqdNrWwX_DhlcERWzF-Ohfz5DnSKiS82FaGwvd8wUi3jll3g3TkvM"/>
<!-- Video Overlay UI -->
<div class="absolute inset-0 flex flex-col justify-between p-6 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-100 transition-opacity">
<div class="flex justify-between items-start">
<span class="bg-primary px-4 py-1.5 rounded-full text-on-primary font-label-lg text-label-lg">Live Lesson</span>
<div class="glass-panel px-4 py-2 rounded-xl flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">timer</span>
<span class="font-label-lg text-label-lg text-on-surface">12:45 / 25:00</span>
</div>
</div>
<!-- Center Play State (Visual Only) -->
<div class="absolute inset-0 flex items-center justify-center">
<button class="w-20 h-20 bg-primary/90 text-on-primary rounded-full flex items-center justify-center shadow-lg hover:scale-105 active:scale-90 transition-all">
<span class="material-symbols-outlined text-5xl" data-weight="fill">pause</span>
</button>
</div>
<!-- Mirror Mode Indicator -->
<div class="flex justify-end">
<div class="glass-panel px-4 py-2 rounded-xl flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">compare_arrows</span>
<span class="font-label-lg text-label-lg text-on-surface">Mirror Mode: Off</span>
</div>
</div>
</div>
</section>
<!-- Bento Grid Interaction Area -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Breathing Guide Card -->
<div class="md:col-span-2 glass-panel p-8 rounded-xl border border-outline-variant/30 flex flex-col items-center justify-center min-h-[300px]">
<div class="text-center mb-6">
<h2 class="font-headline-lg text-headline-lg text-primary mb-2">Breathing Guide</h2>
<p class="font-body-lg text-on-surface-variant">Synchronize your movement with your breath</p>
</div>
<div class="breathing-circle-outer" id="breathing-outer">
<div class="breathing-circle-inner" id="breathing-inner" style="transition: transform 4s ease-in-out;">
<span id="breathing-text" class="font-label-lg text-label-lg uppercase tracking-widest">Inhale</span>
</div>
</div>
</div>
<!-- Side Controls Bento -->
<div class="flex flex-col gap-6">
<!-- Speed Selector -->
<div class="glass-panel p-6 rounded-xl border border-outline-variant/30 flex-1">
<h3 class="font-label-lg text-label-lg text-on-surface-variant mb-4 uppercase tracking-wider">Playback Speed</h3>
<div class="flex flex-col gap-3">
<button class="w-full py-3 px-4 rounded-lg bg-surface-container-high hover:bg-secondary-container transition-colors text-left flex justify-between items-center group">
<span class="font-body-lg">0.5x Slow</span>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100">check_circle</span>
</button>
<button class="w-full py-3 px-4 rounded-lg bg-secondary-container text-on-secondary-container border border-primary/20 flex justify-between items-center">
<span class="font-body-lg font-bold">1.0x Normal</span>
<span class="material-symbols-outlined">check_circle</span>
</button>
<button class="w-full py-3 px-4 rounded-lg bg-surface-container-high hover:bg-secondary-container transition-colors text-left flex justify-between items-center group">
<span class="font-body-lg">0.75x Relaxed</span>
<span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100">check_circle</span>
</button>
</div>
</div>
<!-- Mirror Mode Toggle -->
<div class="glass-panel p-6 rounded-xl border border-outline-variant/30 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-primary-container/20 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">auto_fix_high</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-on-surface">Mirror Mode</p>
<p class="text-sm text-on-surface-variant">Reverse video for easy following</p>
</div>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input id="mirror-toggle" class="sr-only peer" type="checkbox" value=""/>
<div class="w-14 h-8 bg-surface-dim peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[4px] after:left-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
<!-- Session Progress Section -->
<section class="mt-8 glass-panel p-6 rounded-xl border border-outline-variant/30">
<div class="flex justify-between items-center mb-4">
<h3 class="font-label-lg text-label-lg text-on-surface">Session Progress</h3>
<span class="text-primary font-bold">51%</span>
</div>
<div class="w-full h-3 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-accent-focus rounded-full" style="width: 51%"></div>
</div>
<div class="mt-4 flex gap-4 overflow-x-auto pb-2 scrollbar-hide">
<span class="px-4 py-2 bg-secondary-container text-on-secondary-container rounded-full text-sm font-medium whitespace-nowrap">Warm-up</span>
<span class="px-4 py-2 bg-secondary-container text-on-secondary-container rounded-full text-sm font-medium whitespace-nowrap">Foundation Walk</span>
<span class="px-4 py-2 bg-surface-container text-on-surface-variant rounded-full text-sm font-medium whitespace-nowrap">Energy Flow</span>
<span class="px-4 py-2 bg-surface-container text-on-surface-variant rounded-full text-sm font-medium whitespace-nowrap">Cool Down</span>
</div>
</section>
</main>
<!-- Bottom Floating Controls (Playback) -->
<div class="fixed bottom-0 left-0 w-full z-50 p-6 md:p-8 flex justify-center pointer-events-none">
<div class="glass-panel border border-outline-variant/30 shadow-2xl rounded-full px-8 py-4 flex items-center gap-12 pointer-events-auto">
<button class="text-on-surface-variant hover:text-primary transition-colors flex flex-col items-center gap-1 active:scale-90">
<span class="material-symbols-outlined text-4xl">replay_10</span>
<span class="text-[10px] font-bold uppercase">10s Back</span>
</button>
<button class="w-16 h-16 bg-primary text-on-primary rounded-full flex items-center justify-center shadow-lg hover:scale-105 active:scale-95 transition-all">
<span class="material-symbols-outlined text-4xl" data-weight="fill">pause</span>
</button>
<button class="text-on-surface-variant hover:text-primary transition-colors flex flex-col items-center gap-1 active:scale-90">
<span class="material-symbols-outlined text-4xl">forward_10</span>
<span class="text-[10px] font-bold uppercase">10s Fwd</span>
</button>
<div class="h-10 w-[1px] bg-outline-variant/50"></div>
<button class="text-on-surface-variant hover:text-primary transition-colors flex flex-col items-center gap-1 active:scale-90">
<span class="material-symbols-outlined text-3xl">volume_up</span>
<span class="text-[10px] font-bold uppercase">Volume</span>
</button>
</div>
</div>
</div>

<script>
    // Get the module name from URL
    const urlParams = new URLSearchParams(window.location.search);
    const moduleName = urlParams.get('module') || 'General Practice';
    
    // Set title
    const moduleTitles = {
        'warmup': 'Warm-up',
        'walking': 'Tai Chi Walking',
        'cloudhands': 'Cloud Hands'
    };
    document.querySelector('h1').textContent = moduleTitles[moduleName] || 'Tai Chi Session';

    // Start time for progress tracking
    const startTime = Date.now();

    function saveProgressAndGoBack() {
        const endTime = Date.now();
        // Calculate duration in minutes (or round to nearest minute, at least 1 if > 0)
        let durationMinutes = Math.floor((endTime - startTime) / 60000);
        if (durationMinutes === 0) durationMinutes = 1; // give at least 1 min for testing

        // Send to backend
        fetch('api/progress.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                user_id: 1, // hardcoded test user id
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

    // Mirror Toggle
    const mirrorToggle = document.getElementById('mirror-toggle');
    const videoFrame = document.getElementById('video-frame');
    mirrorToggle.addEventListener('change', (e) => {
        if (e.target.checked) {
            videoFrame.style.transform = 'scaleX(-1)';
        } else {
            videoFrame.style.transform = 'scaleX(1)';
        }
    });

    // Breathing Animation
    const breathingOuter = document.getElementById('breathing-outer');
    const breathingInner = document.getElementById('breathing-inner');
    const breathingText = document.getElementById('breathing-text');
    let isInhaling = true;

    setInterval(() => {
        if (isInhaling) {
            breathingInner.style.transform = 'scale(1.6)';
            breathingOuter.style.transform = 'scale(1.2)';
            breathingText.textContent = 'Inhale';
        } else {
            breathingInner.style.transform = 'scale(1)';
            breathingOuter.style.transform = 'scale(1)';
            breathingText.textContent = 'Exhale';
        }
        isInhaling = !isInhaling;
    }, 4000);

</script>
</body></html>