<?php if (!isset($page_title)) { $page_title = "Quantum Pest Management"; } ?>
<!doctype html>
<html lang="en" class="h-full">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($page_title) ?></title>

  <meta name="description" content="Trusted pest control experts offering effective solutions for homes and businesses. Available 24/7 with certified technicians and eco-friendly treatments." />
  <link rel="icon" href="/quantum/assets/img/favicon.png" />

  <!-- Design token variables -->
  <link rel="stylesheet" href="/quantum/assets/css/tokens.css" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: ["class"],
      theme: {
        container: { center: true, padding: "2rem", screens: { "2xl": "1400px" } },
        extend: {
          colors: {
            border: "hsl(var(--border))",
            input: "hsl(var(--input))",
            ring: "hsl(var(--ring))",
            background: "hsl(var(--background))",
            foreground: "hsl(var(--foreground))",
            primary: {
              DEFAULT: "hsl(var(--primary))",
              foreground: "hsl(var(--primary-foreground))"
            },
            secondary: {
              DEFAULT: "hsl(var(--secondary))",
              foreground: "hsl(var(--secondary-foreground))"
            },
            destructive: {
              DEFAULT: "hsl(var(--destructive))",
              foreground: "hsl(var(--destructive-foreground))"
            },
            muted: {
              DEFAULT: "hsl(var(--muted))",
              foreground: "hsl(var(--muted-foreground))"
            },
            accent: {
              DEFAULT: "hsl(var(--accent))",
              foreground: "hsl(var(--accent-foreground))"
            },
            popover: {
              DEFAULT: "hsl(var(--popover))",
              foreground: "hsl(var(--popover-foreground))"
            },
            card: {
              DEFAULT: "hsl(var(--card))",
              foreground: "hsl(var(--card-foreground))"
            },
            "hero-overlay": "hsl(var(--hero-overlay))",
            "trust-bg": "hsl(var(--trust-bg))",
          },
          boxShadow: {
            "lg-custom": "var(--shadow-lg)",
            "xl-custom": "var(--shadow-xl)",
          },
          borderRadius: {
            lg: "var(--radius)",
            md: "calc(var(--radius) - 2px)",
            sm: "calc(var(--radius) - 4px)",
          }
        }
      }
    }
  </script>

  <!-- Lucide icons -->
  <script defer src="https://unpkg.com/lucide@latest"></script>

  <style>
    html, body { height: 100%; }
    .bg-gradient-hero { background-image: var(--gradient-hero); }
    .bg-gradient-primary { background-image: var(--gradient-primary); }
  </style>

</head>
<body class="bg-background text-foreground flex min-h-full flex-col">

  <!-- ✅ TOP BLACK CONTACT STRIP -->
  <div class="bg-secondary text-secondary-foreground py-2 text-sm">
    <div class="container flex flex-wrap items-center justify-center md:justify-end gap-4">

      <!-- Phone -->
      <a href="tel:+918981468876" class="hover:text-accent transition-colors flex items-center gap-2">
        <i data-lucide="phone" class="w-4 h-4"></i>
        <span>+91 89814 68876</span>
      </a>

      <!-- WhatsApp -->
      <a href="https://wa.me/918981468876"
         target="_blank"
         class="bg-accent text-accent-foreground px-3 py-1 rounded-md hover:opacity-90 transition">
        WhatsApp Us
      </a>

      <!-- Email -->
      <a href="mailto:quantumpest.enquiry@gmail.com"
         class="hover:text-accent transition-colors flex items-center gap-2">
        <i data-lucide="mail" class="w-4 h-4"></i>
        <span>quantumpest.enquiry@gmail.com</span>
      </a>

    </div>
  </div>

  <!-- ✅ NAVIGATION -->
  <nav class="bg-background border-b border-border sticky top-0 z-50 shadow-sm">
    <div class="container px-4 md:px-8 py-4">
      <div class="flex items-center justify-between">

        <!-- Logo -->
        <a href="/quantum/" class="flex items-center" aria-label="Quantum Pest Management">
          <img
            src="/quantum/assets/img/QUANTUM_IMAGE.jpg"
            alt="Quantum Pest Management Logo"
            class="w-[180px] md:w-[280px] h-auto object-contain"
            loading="eager"
          />
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-10 text-lg">
          <a href="/quantum/#home" class="hover:text-primary">Home</a>
          <a href="/quantum/#services" class="hover:text-primary">Services</a>
          <a href="/quantum/#about" class="hover:text-primary">About</a>
          <a href="/quantum/contact.php" class="hover:text-primary">Contact</a>

          <a href="/quantum/contact.php"
             class="bg-primary text-primary-foreground px-5 py-2 rounded-lg hover:bg-[hsl(var(--primary-hover))] shadow-lg-custom">
            Get Free Quote
          </a>
        </div>

        <!-- Mobile Toggle -->
        <button id="navToggle" class="md:hidden" aria-label="Menu">
          <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div id="mobileNav" class="md:hidden hidden mt-3 pb-4 flex flex-col gap-4 text-lg">
        <a href="/quantum/#home" class="hover:text-primary">Home</a>
        <a href="/quantum/#services" class="hover:text-primary">Services</a>
        <a href="/quantum/#about" class="hover:text-primary">About</a>
        <a href="/quantum/contact.php" class="hover:text-primary">Contact</a>

        <a href="/quantum/contact.php"
           class="bg-primary text-primary-foreground text-center px-5 py-2 rounded-lg hover:bg-[hsl(var(--primary-hover))]">
          Get Free Quote
        </a>
      </div>
    </div>
  </nav>

  <main class="flex-1">

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        if (window.lucide) window.lucide.createIcons();
        const t = document.getElementById("navToggle");
        const m = document.getElementById("mobileNav");
        if (t && m) {
          t.addEventListener("click", () => m.classList.toggle("hidden"));
        }
      });
    </script>
