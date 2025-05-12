<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Contatti</title>
 
  <style>
  .map-card,
  .info-card {
    background-color: #ffcc00 !important;
    color: #000 !important;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    transition:
      transform 0.6s cubic-bezier(0.25, 1, 0.5, 1),
      box-shadow 0.6s cubic-bezier(0.25, 1, 0.5, 1),
      filter 0.3s ease-out;
    will-change: transform, box-shadow;
  }

  .map-card:hover,
  .info-card:hover {
    transform: translateY(-22px) scale(1.025) rotateZ(0.3deg);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.35);
    filter: brightness(1.03) contrast(1.05);
  }

  /* Testi neri in modo forzato */
  .map-card *,
  .info-card * {
    color: #000 !important;
  }
</style>

</head>
<body class="contact-page">
  <!-- Contact Section -->
  <section id="contatti" class="contact-section">
    <div class="contact-header">
      <h1>Contatti</h1>

      <p style="max-width: 800px; margin: 0 auto; font-size: 1.2em; line-height: 1.6; color: #ffffff; padding-bottom: 20px; opacity: 0; animation: fadeInUp 1s 2s forwards;">
        <strong>Hai voglia di street food vero?</strong>
      </p>

      <p style="max-width: 800px; margin: 0 auto; font-size: 1.2em; line-height: 1.6; color: #ffffff; padding-bottom: 20px; opacity: 0; animation: fadeInUp 1s 2s forwards;">
        Contattaci per informazioni, prenotazioni o per sapere quando siamo aperti. Hamburger, hot-dog e lampredotto ti aspettano ogni giorno!
      </p>

      <p style="max-width: 800px; margin: 0 auto; font-size: 1.2em; line-height: 1.6; color: #ffffff; padding-bottom: 40px; opacity: 0; animation: fadeInUp 1s 2s forwards;">
        Se sei un’organizzazione e vuoi ospitarci per un evento locale o privato, siamo felici di ascoltare la tua proposta.
      </p>
    </div>

    <div class="contact-grid">
      <!-- Mappa -->
      <div class="map-card">
        <h3 class="section-title">
          <i class="fas fa-map-marker-alt"></i>
          Dove ci trovi
        </h3>
        <div class="map-responsive">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.899256376325!2d11.1105!3d42.7637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d574e0d0228e9f%3A0x99e1c9b94b72702!2sGrosseto!5e0!3m2!1sit!2sit!4v1683234670654!5m2!1sit!2sit"
            allowfullscreen loading="lazy"></iframe>
        </div>
      </div>

      <!-- Info -->
      <div class="info-card">
        <h3 class="section-title">
          <i class="fas fa-info-circle"></i>
          Informazioni
        </h3>
        <div class="contact-info">
          <div class="info-item">
            <i class="fas fa-map-pin"></i>
            <p>58100 Grosseto (GR)<br>Toscana, Italia</p>
          </div>
          <div class="info-item">
            <i class="fas fa-clock"></i>
            <p><strong>Orari di apertura:</strong><br>
              Lunedì – Venerdì: 12:00 – 15:00 / 18:00 – 22:30<br>
              Sabato e Domenica: 12:00 – 23:00
            </p>
          </div>
          <div class="info-item">
            <i class="fas fa-phone-alt"></i>
            <p><a href="tel:+391234567890">+39 123 456 7890</a></p>
          </div>
          <div class="info-item">
            <i class="fas fa-envelope"></i>
            <p><a href="mailto:info@chioschinogiallo.it">info@chioschinogiallo.it</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
