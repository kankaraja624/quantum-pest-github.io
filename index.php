<?php
$page_title = "Home | Quantum Pest Management";
// This new path is great! It's much more reliable.
include __DIR__ . "/assets/includes/header.php";
?>

<section id="home" class="relative min-h-[600px] md:min-h-[700px] flex items-center">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('/quantum/assets/img/hero.jpg')">
        <div class="absolute inset-0 bg-gradient-hero"></div>
    </div>
    <div class="container relative z-10 px-4 md:px-8 py-20">
        <div class="max-w-3xl text-primary-foreground">
            <div class="flex items-center gap-2 mb-6">
                <i data-lucide="shield" class="w-8 h-8 text-accent"></i>
                <span class="font-semibold text-lg">Trusted Pest Control Experts</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Your Trusted Pest Control Experts</h1>
            <p class="text-lg md:text-xl mb-8 opacity-90 max-w-2xl">
                We offer effective, reliable, and innovative pest control services for homes and businesses. Protect your space with certified professionals.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/quantum/contact.php" class="bg-primary text-primary-foreground px-6 py-3 rounded-lg shadow-lg-custom hover:bg-[hsl(var(--primary-hover))] inline-flex items-center justify-center">
                    Get Free Inspection
                    <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                </a>
                <a href="tel:+91-8981468876" class="border border-primary-foreground/30 bg-white/10 backdrop-blur-sm text-primary-foreground px-6 py-3 rounded-lg inline-flex items-center justify-center">
                    Call: +91-8981468876
                </a>
            </div>

            <div class="flex items-center gap-8 mt-12">
                <div>
                    <div class="text-3xl font-bold">10,000+</div>
                    <div class="text-sm opacity-90">Happy Customers</div>
                </div>
                <div>
                    <div class="text-3xl font-bold">15+</div>
                    <div class="text-sm opacity-90">Years of Experience</div>
                </div>
				<div>
                    <div class="text-3xl font-bold">100+</div>
					<div "text-sm opacity-90">Expert Technicians</div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-20 bg-muted">
    <div class="container px-4 md:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold mb-4">Our Services</h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                Comprehensive pest control solutions for every situation. We've got you covered.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = [
                ["bug", "Termite Control", "Complete inspection, treatment, and prevention to protect your property."],
                ["home", "Residential Services", "Safe solutions tailored for homes and families."],
                ["building-2", "Commercial Services", "Minimal business disruption with professional plans."],
                ["leaf", "Eco-Friendly Solutions", "Environmentally responsible methods and products."],
                ["shield", "Preventive Programs", "Regular maintenance to stop infestations early."],
                ["zap", "Emergency Response", "24/7 urgent pest control when you need it most."]
            ];
            foreach ($services as $s) {
                echo '<div class="border border-border rounded-lg p-6 bg-card hover:shadow-xl-custom transition duration-300 hover:-translate-y-1">
                        <div class="w-14 h-14 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <i data-lucide="' . htmlspecialchars($s[0]) . '" class="w-7 h-7 text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">' . htmlspecialchars($s[1]) . '</h3>
                        <p class="text-muted-foreground">' . htmlspecialchars($s[2]) . '</p>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<section id="about" class="py-20" style="background-color:hsl(var(--trust-bg));">
    <div class="container px-4 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <video class="rounded-lg shadow-xl w-full h-full object-contain" src="/quantum/assets/img/quantum_video.mp4" playsinline muted loop autoplay controls></video>

        <div>
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Why Choose Quantum?</h2>
            <p class="text-lg text-muted-foreground mb-6">
                With years of experience serving thousands of satisfied customers, we're the trusted name in pest control.
                Our certified professionals use the latest techniques and eco-friendly solutions to keep your property pest-free.
            </p>
            <p class="text-lg text-muted-foreground mb-8">
                We combine innovation, safety, and efficiency to deliver exceptional results you can rely on. Your satisfaction is our guarantee.
            </p>

            <?php
            $features = [
                "Certified and trained technicians",
                "Safe, eco-friendly products",
                "Guaranteed results with warranty",
                "24/7 customer support",
            ];
            echo '<div class="space-y-4">';
            foreach ($features as $f) {
                echo '<div class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-6 h-6 text-primary mt-1"></i>
                        <span class="text-lg">' . htmlspecialchars($f) . '</span>
                    </div>';
            }
            echo '</div>';
            ?>
        </div>
    </div>
</section>

<section id="reviews" class="py-20 bg-muted">
    <div class="container px-4 md:px-8">
        <div class="flex flex-wrap items-center gap-3 justify-between mb-8">
            <h2 class="text-3xl md:text-5xl font-bold">User Reviews</h2>
            <div class="flex items-center gap-2 text-sm">
                <button class="px-3 py-1 border border-input rounded hover:bg-white/30" data-sort="relevant">Relevant</button>
                <button class="px-3 py-1 border border-input rounded hover:bg-white/30" data-sort="latest">Latest</button>
                <button class="px-3 py-1 border border-input rounded hover:bg-white/30" data-sort="high">High to Low</button>
            </div>
        </div>

        <?php
        // Exact reviews you provided
        $reviews = [
            [
                "name" => "VANI",
                "meta" => "1 review",
                "date" => "2024-05-17",
                "text" => "Quantum Pest Management Service was excellent! They were fast workers, provided excellent service at a reasonable price with no hidden costs. The equipment used was sanitised and the appliances were in good condition. Highly recommend them for any pest management needs.",
                "bullets" => ["Excellent service", "Fast worker", "Sanitised equipment", "Appliances in good condition", "Reasonably priced", "No hidden cost"],
                "rating" => 5
            ],
            [
                "name" => "ABHRA BISWAS",
                "meta" => "1 review",
                "date" => "2024-05-17",
                "text" => "This organization had been doing pest control of our full house along with termite controls since last 6 years. Our all family members are very much happy with their service perticularly I have to mention Ayan Bhattercharyya`name in this matter. Infuture I will continue my relationship with quantum pest control",
                "bullets" => [],
                "rating" => 5
            ],
            [
                "name" => "ANURAG",
                "meta" => "2 reviews",
                "date" => "2015-07-16",
                "text" => "I have recently opted pest control service for my house in Subhashgram South 24 Pargana from Quantum Pest Management Services and I am exceedingly satisfied with the quality of service rendered by them. They were extremely courteous in dealing with the customer also the quality of product used are highly effective.",
                "bullets" => [],
                "rating" => 5
            ],
            [
                "name" => "AVIJIT SENGUPTA",
                "meta" => "2 reviews",
                "date" => "2010-07-31",
                "text" => "Great Cockroach control service provided by this company at affordable rates at my residence in Behala.",
                "bullets" => [],
                "rating" => 5
            ],
            [
                "name" => "KOHINOOR",
                "meta" => "1 review",
                "date" => "2010-07-31",
                "text" => "Absolutely hassle free, odourless and effective pest control service provided at my residence by Quantum Pest management Service.",
                "bullets" => [],
                "rating" => 5
            ],
            [
                "name" => "MAJUMDAR",
                "meta" => "1 review, 60 followers",
                "date" => "2015-07-14",
                "text" => "Very thorough and professional.",
                "bullets" => [],
                "rating" => 5
            ],
            [
                "name" => "S CHATRI",
                "meta" => "2 reviews",
                "date" => "2024-10-14",
                "text" => "",
                "bullets" => ["Excellent service", "Sanitised equipment", "Reasonably priced"],
                "rating" => 5
            ],
            [
                "name" => "Pranab Jana",
                "meta" => "1 review",
                "date" => "2024-05-17",
                "text" => "Excellent service",
                "bullets" => [],
                "rating" => 5
            ],
            [
                "name" => "Raja Munshi",
                "meta" => "2 reviews",
                "date" => "2024-05-17",
                "text" => "Helpful",
                "bullets" => [],
                "rating" => 5
            ],
            [
                "name" => "Priyatosh",
                "meta" => "42 reviews, 152 followers",
                "date" => "2015-11-13",
                "text" => "",
                "bullets" => [],
                "rating" => 5
            ],
        ];
        // Star helper
        function starsFilled($n)
        {
            $out = '';
            for ($i = 1; $i <= 5; $i++) {
                $out .= '<i data-lucide="star" class="w-4 h-4 ' . ($i <= $n ? 'text-primary fill-[hsl(var(--primary))]' : 'text-muted-foreground') . '"></i>';
            }
            return $out;
        }
        ?>

        <div id="reviewsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($reviews as $r) : ?>
                <article class="border border-border rounded-xl bg-card p-6 shadow-sm hover:shadow-lg-custom transition" itemscope itemtype="https://schema.org/Review" data-rating="<?= (int)$r['rating'] ?>" data-date="<?= htmlspecialchars($r['date']) ?>">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <div class="font-semibold text-lg" itemprop="author"><?= htmlspecialchars($r['name']) ?></div>
                            <div class="text-xs text-muted-foreground"><?= htmlspecialchars($r['meta']) ?></div>
                        </div>
                        <time class="text-sm text-muted-foreground" datetime="<?= htmlspecialchars($r['date']) ?>">
                            <?= date('d M Y', strtotime($r['date'])) ?>
                        </time>
                    </div>

                    <?php if (!empty($r['bullets'])) : ?>
                        <ul class="text-sm text-foreground mb-3 list-disc ps-5">
                            <?php foreach ($r['bullets'] as $b) : ?>
                                <li><?= htmlspecialchars($b) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if (!empty($r['text'])) : ?>
                        <p class="text-foreground mb-4" itemprop="reviewBody"><?= htmlspecialchars($r['text']) ?></p>
                    <?php endif; ?>

                    <div class="flex items-center gap-2" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        <meta itemprop="worstRating" content="1" />
                        <meta itemprop="bestRating" content="5" />
                        <meta itemprop="ratingValue" content="<?= (int)$r['rating'] ?>" />
                        <div class="flex"><?= starsFilled((int)$r['rating']) ?></div>
                        <span class="text-xs text-muted-foreground">(<?= (int)$r['rating'] ?>/5)</span>
                    </div>

                    <div class="mt-4 flex items-center gap-4 text-xs text-muted-foreground">
                        <button class="hover:text-foreground">Helpful</button>
                        <button class="hover:text-foreground">Comment</button>
                        <button class="hover:text-foreground">Share</button>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    // Simple client-side sorting for the toolbar
    document.addEventListener('DOMContentLoaded', () => {
        if (window.lucide) window.lucide.createIcons();
        const grid = document.getElementById('reviewsGrid');
        const btns = document.querySelectorAll('[data-sort]');

        function sortCards(mode) {
            const cards = Array.from(grid.children);
            if (mode === 'latest') {
                cards.sort((a, b) => new Date(b.dataset.date) - new Date(a.dataset.date));
            } else if (mode === 'high') {
                cards.sort((a, b) => (b.dataset.rating | 0) - (a.dataset.rating | 0));
            } else {
                // 'relevant' or default: leave original order (or sort by relevance if you had data)
                // For this demo, we'll just return and keep the DOM order
                return;
            }
            cards.forEach(c => grid.appendChild(c));
        }
        btns.forEach(b => b.addEventListener('click', () => sortCards(b.dataset.sort)));
    });
</script>

<section class="py-20 bg-gradient-primary">
    <div class="container px-4 md:px-8 text-center text-primary-foreground">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Protect Your Property?</h2>
        <p class="text-lg md:text-xl mb-8 opacity-90 max-w-2xl mx-auto">
            Don't wait for pests to take over. Get a free, no-obligation inspection from our certified experts today.
        </p>
        <a href="/quantum/contact.php" class="inline-flex items-center gap-2 bg-background text-primary px-8 py-3 rounded-lg hover:bg-background/90 text-lg font-semibold shadow-lg">
            Book a Free Inspection
            <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
    </div>
</section>


<?php include __DIR__ . "assets/includes/footer.php"; ?>

