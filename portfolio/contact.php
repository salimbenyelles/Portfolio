<?php include('includes/header.php'); ?>

<section class="contact-section">
  <div class="container">
    <h2 class="section-title">Contact</h2>
    <p class="section-subtitle">Tu veux discuter d’un projet, d’une collaboration ou poser une question ? Écris-moi !</p>

    <div class="contact-grid">
      <!-- Formulaire -->
      <form action="send-message.php" method="POST" class="contact-form">
        <div class="form-group">
          <input type="text" name="name" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Votre email" required>
        </div>
        <div class="form-group">
          <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
        </div>
        <button type="submit" class="btn primary">Envoyer le message</button>
      </form>

      <!-- Infos de contact -->
      <div class="contact-info">
        <p><strong>Email :</strong> salimbenyelles9@gmail.com</p>
        <p><strong>Téléphone :</strong> +213 5 49 95 47 41</p>
        <p><strong>Adresse :</strong> Tlemcen, Algérie</p>
        <div class="socials">
          <a href="https://github.com/salimbenyelles"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/salim-benyelles-2186212b6/"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

