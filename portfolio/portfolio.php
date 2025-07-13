<?php include('includes/header.php'); ?>

<section class="portfolio-section">
    <div class="filter-buttons">
  <button class="filter-btn" data-filter="all">Tous</button>
  <button class="filter-btn" data-filter="php">PHP</button>
  <button class="filter-btn" data-filter="flutter">Flutter</button>
  <button class="filter-btn" data-filter="html">HTML</button>
</div>

  <div class="container">
    <h2 class="section-title">Mes Projets</h2>
    <p class="section-subtitle">Voici quelques projets que j’ai réalisés récemment :</p>

    <div class="project-grid">
      <!-- Projet 1 -->
      <div class="project-card php">
        <img src="assets/images/projet1.jpg" alt="Projet 1">
        <div class="project-content">
          <h3>Site e-commerce</h3>
          <p>Un site de vente en ligne moderne avec système de panier et paiement sécurisé.</p>
          <a href="project-detail.php" class="btn primary">Voir plus</a>
        </div>
      </div>

      <!-- Projet 2 -->
      <div class="project-card flutter">
        <img src="assets/images/projet2.jpg" alt="Projet 2">
        <div class="project-content">
          <h3>Application de réservation</h3>
          <p>Application web responsive pour réserver des tables dans un restaurant.</p>
          <a href="project-detail.php" class="btn primary">Voir plus</a>
        </div>
      </div>

      <!-- Projet 3 -->
      <div class="project-card html">
        <img src="assets/images/projet3.jpg" alt="Projet 3">
        <div class="project-content">
          <h3>Dashboard Admin</h3>
          <p>Interface d'administration avec statistiques, graphiques et gestion des utilisateurs.</p>
          <a href="project-detail.php" class="btn primary">Voir plus</a>
        </div>
      </div>
    </div>
  </div>
</section>

