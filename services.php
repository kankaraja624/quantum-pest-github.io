<?php $page_title = "Services | Quantum Pest Management"; include __DIR__."/assets/includes/header.php"; ?>
<div class="container">
  <h1 class="h2 mb-4">Our Services</h1>
  <div class="row g-4">
    <?php
    $services = [
      ["Termite Control","Pre- and post-construction termite treatment with long-lasting barriers."],
      ["Cockroach Control","Gel baiting & residual spray targeting hiding spots and entry points."],
      ["Rodent Control","Traps, bait stations, and proofing to block access routes."],
      ["Bed Bug Treatment","Heat/chemical treatment with follow-up inspection."],
      ["Mosquito Control","Larviciding and residual outdoor spray plans."],
      ["Ant Control","Crack & crevice treatment and colony targeting baits."]
    ];
    foreach ($services as $svc) {
      echo '<div class="col-md-6"><div class="p-4 border rounded h-100"><h2 class="h5 mb-2">' .
           htmlspecialchars($svc[0]) . '</h2><p class="mb-0">' .
           htmlspecialchars($svc[1]) . '</p></div></div>';
    }
    ?>
  </div>
</div>
<?php include __DIR__."/assets/includes/footer.php"; ?>

