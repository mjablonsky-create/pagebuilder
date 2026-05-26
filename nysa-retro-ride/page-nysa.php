<?php
/**
 * Template Name: Nysa
 * Template Post Type: page
 */
$nysa = get_stylesheet_directory_uri() . '/nysa';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Goralska-Nyska.pl — Wynajem klasycznej Nyski w okolicach Tatr</title>
  <meta name="description" content="Przejedź się klasyczną, niebieską Nyską! Wynajem zabytkowego polskiego minibusa na wesela, sesje i wycieczki po Tatrach.">

  <!-- Canonical -->
  <link rel="canonical" href="https://goralska-nyska.pl/">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="<?php echo $nysa; ?>/assets/favicon.svg">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:locale"      content="pl_PL">
  <meta property="og:url"         content="https://goralska-nyska.pl/">
  <meta property="og:title"       content="Goralska-Nyska.pl — Wynajem klasycznej Nyski w okolicach Tatr">
  <meta property="og:description" content="Przejedź się klasyczną, niebieską Nyską! Wynajem zabytkowego polskiego minibusa na wesela, sesje i wycieczki po Tatrach.">
  <meta property="og:image"       content="https://goralska-nyska.pl/wp-content/themes/nysa-child/nysa/assets/nysa-4.jpg">
  <meta property="og:image:width"  content="1920">
  <meta property="og:image:height" content="1280">
  <meta property="og:image:alt"   content="Niebieska Nyska na górskiej drodze z Tatrami w tle">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="Goralska-Nyska.pl — Wynajem klasycznej Nyski w okolicach Tatr">
  <meta name="twitter:description" content="Wynajem zabytkowego polskiego minibusa na wesela, sesje i wycieczki po Tatrach.">
  <meta name="twitter:image"       content="https://goralska-nyska.pl/wp-content/themes/nysa-child/nysa/assets/nysa-4.jpg">

  <!-- Google Fonts (async — non-blocking) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Archivo+Black&family=Work+Sans:wght@400;500;600&display=swap" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Archivo+Black&family=Work+Sans:wght@400;500;600&display=swap"></noscript>

  <link rel="stylesheet" href="<?php echo $nysa; ?>/nysa.css">
  <?php wp_head(); ?>

  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Goralska-Nyska.pl",
    "description": "Wynajem klasycznej Nyski — zabytkowego polskiego minibusa z lat 70. na wesela, sesje zdjęciowe, reklamy i przejazdy okazjonalne w okolicach Tatr.",
    "url": "https://goralska-nyska.pl/",
    "telephone": "+48600123456",

    "image": "https://goralska-nyska.pl/wp-content/themes/nysa-child/nysa/assets/nysa-4.jpg",
    "priceRange": "od 890 zł",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Zakopane",
      "addressRegion": "Małopolska",
      "addressCountry": "PL"
    },
    "areaServed": {
      "@type": "GeoCircle",
      "geoMidpoint": {
        "@type": "GeoCoordinates",
        "latitude": 49.2992,
        "longitude": 19.9496
      },
      "geoRadius": "50000"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
      "opens": "09:00",
      "closes": "20:00"
    }
  }
  </script>
</head>
<body>

<!-- NAV -->
<nav class="nav">
  <div class="nav__inner">
    <a href="#hero" class="nav__logo">
      <span class="nav__logo-dot"></span>
      GORALSKA-NYSKA.PL
    </a>
    <div class="nav__links">
      <a href="#galeria">Galeria</a>
      <a href="#o-nysie">O Nysie</a>
      <a href="#szczegoly">Wynajem</a>
      <a href="#kontakt">Kontakt</a>
    </div>
    <a href="#kontakt" class="nav__cta">Zarezerwuj</a>
  </div>
</nav>

<!-- HERO -->
<section id="hero" class="hero">
  <div class="hero__bg">
    <img src="<?php echo $nysa; ?>/assets/nysa-4.jpg" alt="Niebieska Nyska na górskiej drodze z Tatrami w tle" width="1920" height="1280" fetchpriority="high" style="object-position:35% center">
  </div>
  <div class="hero__content">
    <div class="hero__badge">✦ Klasyczna polska Nyska ✦</div>
    <h1 class="hero__title">PRZEJAZD<br><span>NYSKĄ</span></h1>
    <p class="hero__subtitle">Niepowtarzalna Okazja!</p>
    <div class="hero__buttons">
      <a href="#kontakt" class="btn-primary">Zarezerwuj teraz →</a>
      <a href="#o-nysie" class="btn-ghost">Dowiedz się więcej</a>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker">
  <div class="ticker__track">
    <span class="ticker__item">Przejazd za tylko 1 zł<span class="ticker__sep">✦</span></span>
    <span class="ticker__item">Piątek, 29 Maja 2026<span class="ticker__sep">✦</span></span>
    <span class="ticker__item">Czekamy na Ciebie! ♡<span class="ticker__sep">✦</span></span>
    <span class="ticker__item">Przejazd za tylko 1 zł<span class="ticker__sep">✦</span></span>
    <span class="ticker__item">Piątek, 29 Maja 2026<span class="ticker__sep">✦</span></span>
    <span class="ticker__item">Czekamy na Ciebie! ♡<span class="ticker__sep">✦</span></span>
  </div>
</div>

<!-- GALLERY -->
<section id="galeria" class="gallery">
  <div class="gallery__header">
    <div class="gallery__label">✦ Galeria zdjęć ✦</div>
    <h2 class="gallery__title">Wspomnienia<br><mark>na sznurku</mark></h2>
    <p class="gallery__subtitle">Przewiń niżej — odkryj kolejne kadry naszej podróży.</p>
  </div>

  <div class="gallery__clothesline">
    <div class="gallery__string-dot"></div>
    <svg class="gallery__rope" aria-hidden="true"><path class="gallery__rope-path"/></svg>

    <div class="gallery__items">

      <div class="gallery-card left">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-2.jpg" alt="Niebieska Nyska — widok z przodu, Zakopane" loading="lazy"></div></div>
      </div>

      <div class="gallery-card right">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-14.jpg" alt="Nyska przy góralskim domu" loading="lazy"></div></div>
      </div>

      <div class="gallery-card left">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-13.jpg" alt="Klasyczna Nyska przy skoczni narciarskiej w Zakopanem" loading="lazy"></div></div>
      </div>

      <div class="gallery-card right">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-5.jpg" alt="Nyska jako auto na wesele — dekoracje i Tatry" loading="lazy"></div></div>
      </div>

      <div class="gallery-card left">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-6.jpg" alt="Wnętrze klasycznej Nyski — 9 miejsc siedzących" loading="lazy"></div></div>
      </div>

      <div class="gallery-card right">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-7.jpg" alt="Nyska nad górskim jeziorem w Tatrach" loading="lazy"></div></div>
      </div>

      <div class="gallery-card left">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-8.jpg" alt="Nyska na tle Tatr — wynajem na sesję zdjęciową" loading="lazy"></div></div>
      </div>

      <div class="gallery-card right">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-9.jpg" alt="Detale Nyski — stylowe auto retro na wynajem" loading="lazy"></div></div>
      </div>

      <div class="gallery-card left">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-10.jpg" alt="Sesja zdjęciowa z Nyską — młoda para w Tatrach" loading="lazy"></div></div>
      </div>

      <div class="gallery-card right">
        <div class="gallery-card__thread"></div><div class="gallery-card__peg"><svg viewBox="0 0 22 58" width="22" height="58" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="0" width="10" height="34" rx="3" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><circle cx="11" cy="28" r="5" fill="none" stroke="#aaa" stroke-width="2.5"/><rect x="4" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="12" y="33" width="6" height="25" rx="2" fill="#c4922a" stroke="#8a6010" stroke-width="1.5"/><rect x="10" y="33" width="2" height="25" fill="#f5f0e8"/></svg></div>
        <div class="gallery-card__inner"><div class="gallery-card__img"><img src="<?php echo $nysa; ?>/assets/nysa-11.jpg" alt="Nyska przy rzece w okolicach Zakopanego" loading="lazy"></div></div>
      </div>

    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="o-nysie" class="about">
  <div class="about__inner">
    <div class="about__img-wrap">
      <img src="<?php echo $nysa; ?>/assets/nysa-12.jpg" alt="Klasyczna Nyska" loading="lazy">
    </div>
    <div class="about__copy">
      <div class="about__label">✦ O Nysie ✦</div>
      <h2 class="about__title">Kawałek<br>Polski<br><span>na kółkach</span></h2>
      <p class="about__text">Klasyczny polski minibus z lat 70., w pełni odrestaurowany z miłością do detalu. Niebieski jak tatrzańskie niebo, gotowy zabrać 9 osób w podróż, której nie zapomnicie.</p>
      <p class="about__text">Idealna do <strong>reklam, filmów, wesel, sesji zdjęciowych, przejazdów okazjonalnych i specjalnych okazji</strong> — bo niektóre wspomnienia zasługują na styl.</p>
      <div class="about__stats">
        <div class="about__stat">
          <div class="about__stat-num">9</div>
          <div class="about__stat-label">Wygodnych miejsc</div>
        </div>
        <div class="about__stat">
          <div class="about__stat-num">70</div>
          <div class="about__stat-label">Lat klasyki</div>
        </div>
        <div class="about__stat">
          <div class="about__stat-num">100%</div>
          <div class="about__stat-label">Po renowacji</div>
        </div>

      </div>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section id="szczegoly" class="pricing">
  <div class="pricing__header">
    <div class="pricing__label">✦ Szczegóły wynajmu ✦</div>
    <h2 class="pricing__title">Proste warunki,<br><mark>żadnych niespodzianek</mark></h2>
  </div>
  <div class="pricing__grid">
    <div class="pricing__card">
      <div class="pricing__card-num">01 · Cena za dobę</div>
      <div class="pricing__card-price">od 890 zł</div>
      <div class="pricing__card-note">weekendy / wesela indywidualnie</div>
    </div>
    <div class="pricing__card">
      <div class="pricing__card-num">02 · Kaucja zwrotna</div>
      <div class="pricing__card-price">1500 zł</div>
      <div class="pricing__card-note">zwrot po oddaniu pojazdu</div>
    </div>
    <div class="pricing__card">
      <div class="pricing__card-num">03 · Odbiór</div>
      <div class="pricing__card-price">Okolice Zakopanego</div>
      <div class="pricing__card-note">dowóz na terenie Małopolski</div>
    </div>
    <div class="pricing__card">
      <div class="pricing__card-num">04 · Dostępność</div>
      <div class="pricing__card-price">Cały rok</div>
      <div class="pricing__card-note">rezerwacja minimum 14 dni wcześniej</div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="kontakt" class="contact">
  <div class="contact__inner">
    <div class="contact__label">✦ Rezerwacja ✦</div>
    <h2 class="contact__title">Zarezerwuj<br>Swój<br>Przejazd</h2>
    <p class="contact__subtitle">Odpowiadamy w ciągu 24 godzin. Bez zobowiązań, bez ukrytych kosztów.</p>
    <div class="contact__buttons">
      <a href="tel:+48600123456" class="contact__btn-phone">📞 +48 600 123 456</a>

    </div>
    <div class="contact__badge">♡ Czekamy na Ciebie!</div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer__inner">
    <div>
      <div class="footer__logo">
        <span class="footer__logo-dot"></span>
        GORALSKA-NYSKA.PL
      </div>
      <p class="footer__tagline">Klasyczna polska Nyska na wynajem.<br>Wesela, sesje, wycieczki po Tatrach.</p>
    </div>
    <div>
      <div class="footer__heading">Kontakt</div>
      <ul class="footer__list">
        <li><a href="tel:+48600123456">📞 +48 600 123 456</a></li>

        <li>📍 Okolice Zakopanego</li>
      </ul>
    </div>
    <div>
      <div class="footer__heading">Śledź nas</div>
      <div class="footer__socials">
        <a href="#" class="footer__social">Instagram</a>
        <a href="#" class="footer__social">Facebook</a>
        <a href="#" class="footer__social">TikTok</a>
      </div>
    </div>
    <div>
      <div class="footer__heading">Dokumenty</div>
      <ul class="footer__list">
        <li><a href="/polityka-prywatnosci/">Polityka prywatności</a></li>
        <li><a href="/polityka-cookies/">Polityka cookies</a></li>
        <li><a href="/regulamin-przejazdu/">Regulamin przejazdu</a></li>
      </ul>
    </div>
  </div>
  <div class="footer__bottom">
    <span>© 2026 Goralska-Nyska.pl · Wszystkie prawa zastrzeżone</span>
    <span class="footer__bottom-right">Made with ♡ in Tatry</span>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true">
  <button class="lightbox__close" id="lb-close" aria-label="Zamknij">✕</button>
  <button class="lightbox__arrow lightbox__arrow--prev" id="lb-prev" aria-label="Poprzednie">‹</button>
  <img class="lightbox__img" id="lb-img" src="" alt="">
  <button class="lightbox__arrow lightbox__arrow--next" id="lb-next" aria-label="Następne">›</button>
</div>

<script src="<?php echo $nysa; ?>/nysa.js"></script>
</body>
</html>
