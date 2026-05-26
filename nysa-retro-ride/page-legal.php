<?php
/**
 * Template Name: Nysa Legal
 * Template Post Type: page
 */
$nysa   = get_stylesheet_directory_uri() . '/nysa';
$slug   = get_queried_object()->post_name ?? '';
$titles = [
    'polityka-prywatnosci' => 'Polityka Prywatności',
    'polityka-cookies'     => 'Polityka Cookies',
    'regulamin-przejazdu'  => 'Regulamin Przejazdu',
];
$page_title = $titles[$slug] ?? 'Dokument';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo esc_html($page_title); ?> — Goralska-Nyska.pl</title>
  <meta name="robots" content="noindex">

  <link rel="icon" type="image/svg+xml" href="<?php echo $nysa; ?>/assets/favicon.svg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Archivo+Black&family=Work+Sans:wght@400;500;600&display=swap" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Archivo+Black&family=Work+Sans:wght@400;500;600&display=swap"></noscript>

  <link rel="stylesheet" href="<?php echo $nysa; ?>/nysa.css">
  <?php wp_head(); ?>
  <style>
    .legal { max-width:720px; margin:0 auto; padding:80px 24px 100px; color:#f5f0e8; }
    .legal h1 { font-family:'Bebas Neue',sans-serif; font-size:clamp(2rem,6vw,3.5rem); color:#f0c040; margin-bottom:8px; }
    .legal .legal__date { font-size:.85rem; color:#a0a8c0; margin-bottom:48px; }
    .legal h2 { font-family:'Archivo Black',sans-serif; font-size:1.1rem; color:#f0c040; margin:2rem 0 .5rem; }
    .legal p, .legal li { font-family:'Work Sans',sans-serif; font-size:.95rem; line-height:1.7; color:#c8cedd; }
    .legal ul { padding-left:1.4rem; margin:.5rem 0; }
    .legal a { color:#f0c040; }
    .legal__back { display:inline-block; margin-bottom:40px; font-family:'Work Sans',sans-serif; font-size:.9rem; color:#f0c040; text-decoration:none; }
    .legal__back:hover { text-decoration:underline; }
  </style>
</head>
<body style="background:#1a1f2e; margin:0;">

<nav class="nav">
  <div class="nav__inner">
    <a href="/" class="nav__logo">
      <span class="nav__logo-dot"></span>
      GORALSKA-NYSKA.PL
    </a>
    <div class="nav__links">
      <a href="/#galeria">Galeria</a>
      <a href="/#o-nysie">O Nysie</a>
      <a href="/#szczegoly">Wynajem</a>
      <a href="/#kontakt">Kontakt</a>
    </div>
    <a href="/#kontakt" class="nav__cta">Zarezerwuj</a>
  </div>
</nav>

<main class="legal">
  <a href="/" class="legal__back">← Powrót na stronę główną</a>

<?php if ($slug === 'polityka-prywatnosci'): ?>
  <h1>Polityka Prywatności</h1>
  <p class="legal__date">Obowiązuje od: 26 maja 2026 r.</p>

  <h2>1. Administrator danych</h2>
  <p>Administratorem danych osobowych jest właściciel serwisu <strong>Goralska-Nyska.pl</strong> (dalej: „Operator"), prowadzący działalność w okolicach Zakopanego. Kontakt: <a href="tel:+48600123456">+48 600 123 456</a></p>

  <h2>2. Jakie dane zbieramy</h2>
  <p>Zbieramy wyłącznie dane przekazane dobrowolnie podczas kontaktu:</p>
  <ul>
    <li>Imię i nazwisko</li>
    <li>Numer telefonu</li>
    <li>Adres e-mail</li>
    <li>Treść wiadomości / szczegóły rezerwacji</li>
  </ul>

  <h2>3. W jakim celu przetwarzamy dane</h2>
  <p>Dane przetwarzane są wyłącznie w celu:</p>
  <ul>
    <li>Odpowiedzi na zapytanie o wynajem (podstawa: art. 6 ust. 1 lit. b RODO — wykonanie umowy lub działania przedumowne)</li>
    <li>Realizacji i rozliczenia usługi wynajmu</li>
    <li>Wywiązania się z obowiązków prawnych (np. wystawiania dokumentów)</li>
  </ul>

  <h2>4. Jak długo przechowujemy dane</h2>
  <p>Dane kontaktowe przechowujemy przez czas niezbędny do realizacji usługi oraz do 3 lat po jej zakończeniu (roszczenia). Dane niezbędne do rozliczeń — 5 lat (obowiązek podatkowy).</p>

  <h2>5. Komu udostępniamy dane</h2>
  <p>Dane nie są sprzedawane ani przekazywane podmiotom trzecim w celach marketingowych. Możemy przekazać dane dostawcom usług hostingowych i pocztowych wyłącznie w zakresie niezbędnym do działania serwisu.</p>

  <h2>6. Twoje prawa</h2>
  <p>Przysługuje Ci prawo do: dostępu do danych, ich sprostowania, usunięcia, ograniczenia przetwarzania, przenoszenia danych, wniesienia sprzeciwu. W celu realizacji skontaktuj się telefonicznie: <a href="tel:+48600123456">+48 600 123 456</a></p>
  <p>Masz też prawo wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych (uodo.gov.pl).</p>

  <h2>7. Pliki cookies</h2>
  <p>Informacje o plikach cookies znajdują się w <a href="/polityka-cookies/">Polityce Cookies</a>.</p>

<?php elseif ($slug === 'polityka-cookies'): ?>
  <h1>Polityka Cookies</h1>
  <p class="legal__date">Obowiązuje od: 26 maja 2026 r.</p>

  <h2>1. Czym są pliki cookies</h2>
  <p>Pliki cookies (ciasteczka) to małe pliki tekstowe zapisywane na Twoim urządzeniu przez przeglądarkę internetową podczas odwiedzin w serwisie.</p>

  <h2>2. Jakie cookies używamy</h2>
  <p><strong>Cookies niezbędne</strong> — wymagane do prawidłowego działania strony (WordPress, sesja). Nie wymagają zgody.</p>
  <p><strong>Cookies analityczne / zewnętrzne</strong> — serwis korzysta z czcionek Google Fonts, które mogą pobierać cookies z domeny google.com w celu dostarczenia zasobu. Google może rejestrować Twoje IP.</p>

  <h2>3. Jak zarządzać cookies</h2>
  <p>Możesz zarządzać plikami cookies w ustawieniach przeglądarki. Poniżej instrukcje dla popularnych przeglądarek:</p>
  <ul>
    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
    <li><a href="https://support.mozilla.org/pl/kb/usuwanie-ciasteczek" target="_blank" rel="noopener">Mozilla Firefox</a></li>
    <li><a href="https://support.apple.com/pl-pl/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
  </ul>
  <p>Wyłączenie cookies niezbędnych może spowodować nieprawidłowe działanie strony.</p>

  <h2>4. Podstawa prawna</h2>
  <p>Przetwarzanie danych w oparciu o cookies wymagające zgody odbywa się na podstawie art. 6 ust. 1 lit. a RODO oraz art. 173 Prawa telekomunikacyjnego.</p>

  <h2>5. Kontakt</h2>
  <p>W sprawach dotyczących cookies skontaktuj się telefonicznie: <a href="tel:+48600123456">+48 600 123 456</a></p>

<?php elseif ($slug === 'regulamin-przejazdu'): ?>
  <h1>Regulamin Przejazdu</h1>
  <p class="legal__date">Obowiązuje od: 26 maja 2026 r.</p>

  <h2>§1 Postanowienia ogólne</h2>
  <p>Niniejszy regulamin określa zasady wynajmu zabytkowego pojazdu Nysa (dalej: „Pojazd") przez firmę Goralska-Nyska.pl (dalej: „Wynajmujący") na rzecz osoby fizycznej lub prawnej (dalej: „Najemca").</p>

  <h2>§2 Rezerwacja i płatność</h2>
  <ul>
    <li>Rezerwacja odbywa się telefonicznie lub mailowo i jest potwierdzona po uiszczeniu zadatku.</li>
    <li>Cena wynajmu ustalana jest indywidualnie; cena bazowa od 890 zł za dobę.</li>
    <li>Wymagana kaucja zwrotna w wysokości 1500 zł, pobierana w dniu wydania Pojazdu.</li>
    <li>Kaucja zwracana jest w całości po oddaniu Pojazdu bez uszkodzeń.</li>
  </ul>

  <h2>§3 Wydanie i zwrot pojazdu</h2>
  <ul>
    <li>Pojazd wydawany jest w okolicach Zakopanego (miejsce ustalane indywidualnie).</li>
    <li>Pojazd zwracany jest do miejsca wydania w stanie niepogorszonym, czysty.</li>
    <li>Najemca zobowiązany jest do zwrotu Pojazdu w ustalonym terminie. Opóźnienie bez uzgodnienia — 200 zł/h.</li>
  </ul>

  <h2>§4 Zasady korzystania</h2>
  <ul>
    <li>Pojazdem może kierować wyłącznie osoba wskazana w umowie, posiadająca ważne prawo jazdy kategorii B.</li>
    <li>Zabrania się: palenia tytoniu w Pojeździe, przewożenia zwierząt bez zgody, przekraczania liczby pasażerów (maks. 9 osób).</li>
    <li>Zabrania się jazdy pod wpływem alkoholu lub środków psychoaktywnych.</li>
    <li>Najemca ponosi pełną odpowiedzialność za szkody wyrządzone Pojazdowi podczas najmu.</li>
    <li>W razie awarii lub wypadku Najemca zobowiązany jest niezwłocznie powiadomić Wynajmującego.</li>
  </ul>

  <h2>§5 Zakres terytorialny</h2>
  <p>Wynajem obejmuje teren Rzeczypospolitej Polskiej. Wyjazd za granicę wymaga pisemnej zgody Wynajmującego.</p>

  <h2>§6 Odpowiedzialność</h2>
  <p>Wynajmujący nie ponosi odpowiedzialności za szkody wyrządzone osobom trzecim przez Najemcę podczas korzystania z Pojazdu. Pojazd posiada ważne OC.</p>

  <h2>§7 Odstąpienie od umowy</h2>
  <ul>
    <li>Rezygnacja powyżej 14 dni przed terminem — zadatek zwracany w całości.</li>
    <li>Rezygnacja od 7 do 14 dni przed terminem — zadatek zwracany w 50%.</li>
    <li>Rezygnacja poniżej 7 dni przed terminem — zadatek przepada.</li>
  </ul>

  <h2>§8 Postanowienia końcowe</h2>
  <p>W sprawach nieuregulowanych stosuje się przepisy Kodeksu Cywilnego. Spory rozstrzygane przed sądem właściwym dla siedziby Wynajmującego. Wynajmujący zastrzega sobie prawo do zmiany Regulaminu z 7-dniowym wyprzedzeniem.</p>
  <p>Kontakt: <a href="tel:+48600123456">+48 600 123 456</a></p>

<?php endif; ?>
</main>

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
<script src="<?php echo $nysa; ?>/nysa.js"></script>
</body>
</html>
