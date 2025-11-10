<?php $page_title = "Contact | Quantum Pest Management"; include __DIR__."/includes/header.php"; ?>
<section class="py-20">
  <div class="container px-4 md:px-8">
    <div class="text-center mb-12">
      <h1 class="text-3xl md:text-5xl font-bold mb-4">Get In Touch</h1>
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Have a pest problem? Contact us today for a free inspection and quote.</p>
      <?php if (isset($_GET['success'])): ?>
        <div class="mt-6 text-green-700 bg-green-50 border border-green-200 px-4 py-3 rounded-md">Thanks! We’ll get back to you shortly.</div>
      <?php elseif (isset($_GET['error'])): ?>
        <div class="mt-6 text-red-700 bg-red-50 border border-red-200 px-4 py-3 rounded-md">Something went wrong. Please try again.</div>
      <?php endif; ?>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="space-y-6">
        <div class="border border-border rounded-lg p-6 bg-card">
          <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-3">
            <i data-lucide="phone" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-xl font-semibold mb-1">Call Us</h3>
          <p class="text-muted-foreground">Available 24/7 for emergencies</p>
          <p class="mt-2 font-medium">1800-212-2125</p>
        </div>
        <div class="border border-border rounded-lg p-6 bg-card">
          <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-3">
            <i data-lucide="mail" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-xl font-semibold mb-1">Email Us</h3>
          <p class="text-muted-foreground">We'll respond within 24 hours</p>
          <p class="mt-2 font-medium">info@quantumpest.in</p>
        </div>
        <div class="border border-border rounded-lg p-6 bg-card">
          <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-3">
            <i data-lucide="map-pin" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-xl font-semibold mb-1">Visit Us</h3>
          <p class="text-muted-foreground">50+ locations nationwide</p>
          <p class="mt-2 font-medium">Find nearest branch</p>
        </div>
      </div>

      <div class="lg:col-span-2 border border-border rounded-lg p-6 bg-card">
        <form class="space-y-6" method="post" action="/quantum/contact-handler.php" novalidate>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="text-sm font-medium mb-2 block">Full Name</label>
              <input class="w-full border border-input rounded-md px-3 py-2" type="text" name="name" required>
            </div>
            <div>
              <label class="text-sm font-medium mb-2 block">Phone Number</label>
              <input class="w-full border border-input rounded-md px-3 py-2" type="tel" name="phone" required>
            </div>
          </div>

          <div>
            <label class="text-sm font-medium mb-2 block">Email Address</label>
            <input class="w-full border border-input rounded-md px-3 py-2" type="email" name="email">
          </div>

          <div>
            <label class="text-sm font-medium mb-2 block">Service Required</label>
            <input class="w-full border border-input rounded-md px-3 py-2" type="text" name="issue" placeholder="e.g., Termite Control" required>
          </div>

          <div>
            <label class="text-sm font-medium mb-2 block">Address / Location</label>
            <input class="w-full border border-input rounded-md px-3 py-2" type="text" name="address">
          </div>

          <div>
            <label class="text-sm font-medium mb-2 block">Message</label>
            <textarea class="w-full border border-input rounded-md px-3 py-2 min-h-[120px]" name="message" required></textarea>
          </div>

          <button class="w-full bg-primary text-primary-foreground px-6 py-3 rounded-lg hover:bg-[hsl(var(--primary-hover))]">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__."/includes/footer.php"; ?>
