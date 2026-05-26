// Gallery: reveal cards as user scrolls into view
(function () {
  var cards = document.querySelectorAll('.gallery-card');
  if (!cards.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  cards.forEach(function (card) { observer.observe(card); });
})();

// Gallery rope: draw wavy SVG path sized to actual container height
(function () {
  function drawRope() {
    var container = document.querySelector('.gallery__clothesline');
    var svg       = document.querySelector('.gallery__rope');
    var path      = document.querySelector('.gallery__rope-path');
    if (!container || !svg || !path) return;

    var h         = container.offsetHeight;
    var cx        = 60;
    var amplitude = 18;
    var period    = 190;

    svg.setAttribute('viewBox', '0 0 120 ' + h);
    svg.setAttribute('height', h);

    var d     = 'M ' + cx + ' 0';
    var steps = Math.ceil(h / period) + 1;
    for (var i = 0; i < steps; i++) {
      var qx = (i % 2 === 0) ? cx + amplitude : cx - amplitude;
      var qy = i * period + period / 2;
      var ey = (i + 1) * period;
      d += ' Q ' + qx + ' ' + qy + ' ' + cx + ' ' + ey;
    }

    path.setAttribute('d', d);
  }

  drawRope();
  window.addEventListener('load',   drawRope);
  window.addEventListener('resize', drawRope);
})();

// Ticker: duplicate content so the scroll loop is seamless
(function () {
  var track = document.querySelector('.ticker__track');
  if (!track) return;
  track.innerHTML += track.innerHTML;
})();

// Lightbox
(function () {
  var lightbox = document.getElementById('lightbox');
  var lbImg    = document.getElementById('lb-img');
  var lbClose  = document.getElementById('lb-close');
  var lbPrev   = document.getElementById('lb-prev');
  var lbNext   = document.getElementById('lb-next');
  if (!lightbox) return;

  var imgs    = [];
  var current = 0;

  function show(index) {
    current = (index + imgs.length) % imgs.length;
    lbImg.src = imgs[current].src;
    lbImg.alt = imgs[current].alt;
    lightbox.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function close() {
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
    lbImg.src = '';
  }

  document.querySelectorAll('.gallery-card__img img').forEach(function (img, i) {
    imgs.push(img);
    img.addEventListener('click', function () { show(i); });
  });

  lbClose.addEventListener('click', close);
  lbPrev.addEventListener('click',  function () { show(current - 1); });
  lbNext.addEventListener('click',  function () { show(current + 1); });

  lightbox.addEventListener('click', function (e) {
    if (e.target === lightbox) close();
  });

  document.addEventListener('keydown', function (e) {
    if (!lightbox.classList.contains('open')) return;
    if (e.key === 'Escape')     close();
    if (e.key === 'ArrowLeft')  show(current - 1);
    if (e.key === 'ArrowRight') show(current + 1);
  });
})();
