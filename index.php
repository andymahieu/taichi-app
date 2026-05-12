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
                        "surface-container-lowest": "#ffffff",
                        "surface-glass": "rgba(255, 255, 255, 0.7)",
                        "surface-container-highest": "#dee4d9",
                        "on-surface": "#171d16",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed": "#3e001c",
                        "surface-dim": "#d6dcd0",
                        "on-secondary": "#ffffff",
                        "tertiary": "#a63360",
                        "on-surface-variant": "#3f4a3c",
                        "on-secondary-container": "#2e7238",
                        "surface-bright": "#f5fbef",
                        "surface-container-high": "#e4eade",
                        "outline": "#6f7a6b",
                        "primary-container": "#4caf50",
                        "background-light": "#F1F8E9",
                        "background": "#f5fbef",
                        "on-primary-fixed-variant": "#005313",
                        "secondary-fixed": "#abf4ac",
                        "primary-fixed-dim": "#78dc77",
                        "on-primary-container": "#003c0b",
                        "text-main": "#2E3B32",
                        "on-primary": "#ffffff",
                        "error": "#ba1a1a",
                        "on-secondary-fixed": "#002107",
                        "inverse-primary": "#78dc77",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed-variant": "#07521d",
                        "on-tertiary-container": "#690034",
                        "tertiary-fixed-dim": "#ffb1c7",
                        "on-primary-fixed": "#002204",
                        "surface-container": "#eaf0e4",
                        "surface": "#f5fbef",
                        "inverse-surface": "#2c322a",
                        "accent-focus": "#FF9800",
                        "secondary": "#286b33",
                        "surface-container-low": "#f0f6ea",
                        "outline-variant": "#becab9",
                        "on-error": "#ffffff",
                        "on-tertiary-fixed-variant": "#861948",
                        "surface-variant": "#dee4d9",
                        "secondary-container": "#abf4ac",
                        "surface-tint": "#006e1c",
                        "primary-fixed": "#94f990",
                        "secondary-fixed-dim": "#90d792",
                        "primary": "#006e1c",
                        "on-background": "#171d16",
                        "tertiary-fixed": "#ffd9e2",
                        "tertiary-container": "#f26f9d",
                        "background-dark": "#1B2E20",
                        "inverse-on-surface": "#edf3e7"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "12px",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-desktop": "64px",
                        "max-width": "1200px",
                        "gutter": "24px",
                        "margin-mobile": "20px",
                        "unit": "8px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-xl": ["Inter"],
                        "label-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "body-xl": ["20px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-lg": ["16px", {"lineHeight": "1.4", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "1.3", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-effect {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(129, 199, 132, 0.3);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background font-body-lg text-on-surface min-h-screen">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-surface-glass/70 backdrop-blur-md shadow-[0_4px_20px_rgba(46,59,50,0.05)]">
<div class="flex justify-between items-center h-20 px-margin-mobile md:px-margin-desktop max-w-max-width mx-auto">
<div class="flex items-center gap-unit">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="spa">spa</span>
<h1 class="font-display-lg text-primary tracking-tight text-headline-lg-mobile md:text-headline-lg">ZenTaiChi</h1>
</div>
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center overflow-hidden border-2 border-primary/20">
<img alt="User profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjaqDf1CK3ue4JrdyZkoXrZIYGka4d4vekHxzk5fOeiea3fNkoXQr4XOIZFRp_Asxc0c4aOCTkrLI06_h3bxVyEDL_Wu20AsFBF01UgVsPEctlY1Ye1PiKOApeGgQe0n_ieungEs1N1BRscklSsWKWoylPvzZAG2PHOGzCLX-sZwigCzCvdoLa41ucIUh4DoBesofBQ1_j_OhqwAhzvHLJuAnJalUp2po2xDL6HQQ4LE1t4SOIH8CHhk7tWtC8fJRwIHq5HOJ6F_U"/>
</div>
</div>
</header>
<main class="pt-24 pb-32 px-margin-mobile max-w-max-width mx-auto">
<!-- Daily Progress Section -->
<section class="mb-gutter">
<div class="glass-effect rounded-xl p-6 shadow-[0_4px_24px_rgba(46,59,50,0.05)] border border-outline-variant/30">
<div class="flex justify-between items-start mb-4">
<div>
<h2 class="font-headline-lg-mobile text-text-main mb-1">Daily Practice</h2>
<p class="font-body-lg text-on-surface-variant">15 mins practiced today</p>
</div>
<div class="bg-primary-container/10 p-3 rounded-full">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="bolt">bolt</span>
</div>
</div>
<!-- Progress Bar -->
<div class="w-full bg-surface-container-highest rounded-full h-4 mb-2 overflow-hidden">
<div class="bg-accent-focus h-full rounded-full w-3/4" style="box-shadow: 0 0 12px rgba(255, 152, 0, 0.3);"></div>
</div>
<div class="flex justify-between font-label-lg text-on-surface-variant">
<span>Goal: 20 mins</span>
<span class="text-primary">75% Complete</span>
</div>
</div>
</section>
<!-- Practice Modules Section -->
<section>
<h3 class="font-headline-lg-mobile text-text-main mb-4 px-1">Practice Modules</h3>
<div class="flex flex-col gap-4">
<!-- Module 1: Warm-up -->
<div onclick="window.location.href='player.php?module=warmup';" class="glass-effect rounded-xl p-5 flex items-center gap-4 hover:bg-surface-container-low/50 transition-all active:scale-[0.98] cursor-pointer">
<div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="A serene elderly person performing gentle Tai Chi stretches in a sun-drenched, lush green park during early morning. The lighting is soft and golden, creating a peaceful and welcoming atmosphere. The image is clean and minimalist, reflecting a modern wellness aesthetic with natural greens and soft whites." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNTQ-51QWiMvZIkl7rzgJPPB1HdGikdLbLgkmPA0W5Xqw3fJ3Bk6G1Kk-2B1Fask-CrdFVUghSIkw2p_aOWTmqm5Tb7Rx7T2Y67gKacy7WV2CGyfN1jo9tQwbKK7_09ZfRmmWuMZPBsQJgdPco-XYsc20a-FHbbhmOWC5Ila8bvZjIBmdj1wlgmDTdef1Fwv12N-8pEphYDrVM_5Pjr6KeQ_pwCNlbvPioQKVz__OnLw9g1T8fk5wSXhSO_7AHZrENQy0klmrwAD0"/>
</div>
<div class="flex-grow">
<h4 class="font-headline-lg-mobile text-headline-lg-mobile text-text-main">Warm-up</h4>
<p class="font-body-lg text-on-surface-variant">Simple, welcoming movements</p>
</div>
<span class="material-symbols-outlined text-on-surface-variant" data-icon="chevron_right">chevron_right</span>
</div>
<!-- Module 2: Tai Chi Walking -->
<div onclick="window.location.href='player.php?module=walking';" class="glass-effect rounded-xl p-5 flex items-center gap-4 hover:bg-surface-container-low/50 transition-all active:scale-[0.98] cursor-pointer">
<div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Close-up of a person's feet moving slowly and deliberately across a smooth wooden floor in a minimalist studio. The focus is on balance and stability, with soft morning light casting gentle shadows. The aesthetic is clean, sophisticated, and tranquil, using a palette of warm wood and soft green accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcg-LCPysdiIKRGmzYhVA9SraM7-PyLNfEe70cDopzyctZpFVWNA00evoKt0tGX6YSb0M1EAzZP_wbWU9vT2T8r4Sd6vASMLxCIAq3SC1DWhLE6WW51b6yjSn4wHUhZS_o7cH6R7riuwQkiF-5OzTZo0vIe69i7Tm__T1Uh8fU2WyBVpPSQGSrEIvbEoJWsGlmo8QJW-woDpOkADm0648h62-BUmYLih_8gkl_GSTdP3nky6gzu4vjhUnG7BrBao2x8ZSbMejD2Fg"/>
</div>
<div class="flex-grow">
<h4 class="font-headline-lg-mobile text-headline-lg-mobile text-text-main leading-tight">Tai Chi Walking (Balance &amp; Basics)</h4>
<p class="font-body-lg text-on-surface-variant">Focus on stability</p>
</div>
<span class="material-symbols-outlined text-on-surface-variant" data-icon="chevron_right">chevron_right</span>
</div>
<!-- Module 3: Basic Forms -->
<div onclick="window.location.href='player.php?module=cloudhands';" class="glass-effect rounded-xl p-5 flex items-center gap-4 hover:bg-surface-container-low/50 transition-all active:scale-[0.98] cursor-pointer">
<div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="A practitioner's hands moving gracefully in a 'Cloud Hands' gesture, surrounded by a subtle mist or soft focus garden background. The composition is flowing and meditative, capturing the essence of Qigong practice. High-key lighting and a soft white and pale green color palette emphasize tranquility and premium quality." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXqyISTIQDJIdle9LqweIaj6EVD0zSYZ0CR6gkJk78xj1A4SD7oSVhSQStvpnec78-_9PD-5uYDOp8kqgrZ1xkMFG6CFLsJNipfy3hOyWzHjAM9FOdP-OO8Ey9vSHrzTQjX6Mb5uopkoVo1452TmOAIz-m9j0xF6wtr9-Qjg2MNVc_XtlJAQ3mITZTkOrDlaB4QwocYJNv4ARlzldiAxbokiD-dn4A5eWWl7LRjFm5qsLHWZGQvC0DqNEc-gqs5BEM29ZISE9xpW0"/>
</div>
<div class="flex-grow">
<h4 class="font-headline-lg-mobile text-headline-lg-mobile text-text-main">Basic Forms (Cloud Hands)</h4>
<p class="font-body-lg text-on-surface-variant">Flowing, meditative state</p>
</div>
<span class="material-symbols-outlined text-on-surface-variant" data-icon="chevron_right">chevron_right</span>
</div>
</div>
</section>
<!-- Accessibility Note -->
<div class="mt-8 p-4 bg-surface-container rounded-lg border border-outline-variant/20 flex gap-3 items-center">
<span class="material-symbols-outlined text-secondary" data-icon="info">info</span>
<p class="text-label-lg text-on-surface-variant">Tap any card to begin your guided session.</p>
</div>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 left-0 w-full bg-surface-glass/80 backdrop-blur-xl border-t border-outline-variant/20 shadow-[0_-4px_24px_rgba(46,59,50,0.08)] z-50">
<div class="flex justify-around items-center h-24 pb-4 px-margin-mobile">
<!-- Home (Active) -->
<a class="flex flex-col items-center justify-center bg-secondary-container text-on-secondary-container rounded-full px-6 py-2 transition-transform duration-200 active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="home_mini" style="font-variation-settings: 'FILL' 1;">home_mini</span>
<span class="font-label-lg text-label-lg mt-1">Home</span>
</a>
<!-- Progress -->
<a class="flex flex-col items-center justify-center text-on-surface-variant px-6 py-2 transition-all hover:bg-surface-container-high/40 active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
<span class="font-label-lg text-label-lg mt-1">Progress</span>
</a>
<!-- Settings -->
<a class="flex flex-col items-center justify-center text-on-surface-variant px-6 py-2 transition-all hover:bg-surface-container-high/40 active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-label-lg text-label-lg mt-1">Settings</span>
</a>
</div>
</nav>
</body></html>