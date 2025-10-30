<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h2>Covoiturez avec EcoRide</h2>
        <p>Réduisez votre empreinte carbone et vos frais de transport grâce à notre plateforme de covoiturage responsable</p>
        <button id="btn" class="btn btn-primary">Chercher un trajet</button>
    </div>
</div>
<!-- chercher un trajet -->
<section class="search-section py-5 border rounded bg-light">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-lg-8">
                <div class="search-form mb-4 ">
                    <h3 class="mb-4 text-center mt-2">Trouvez votre trajet</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="adresseDepart" class="form-label">Départ</label>
                                <input type="text" class="form-control" id="adresseDepart" placeholder="Ville de départ">
                            </div>
                            <div class="col-md-6">
                                <label for="adresseArrivee" class="form-label">Arrivée</label>
                                <input type="text" class="form-control" id="adresseArrivee" placeholder="Ville d'arrivée">
                            </div>
                            <div class="col-md-6">
                                <label for="dateDepart" class="form-label">Date</label>
                                <input type="date" class="form-control" id="dateDepart">
                            </div>
                            <div class="col-md-6">
                                <label for="nbPlaces" class="form-label">Passagers</label>
                                <select class="form-select" id="nbPlaces">
                                    <option value="1">1 passager</option>
                                    <option value="2">2 passagers</option>
                                    <option value="3">3 passagers</option>
                                    <option value="4">4+ passagers</option>
                                </select>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-search me-2"></i>Rechercher un trajet
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin chercher un trajet -->
<!-- Features Section -->
<section class="features">
    <div class="container">
        <h2 class="section-title">Pourquoi choisir EcoRide ?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-currency-euro"></i>
                </div>
                <h3 class="feature-title">Économique</h3>
                <p>Partagez les frais de route et voyagez à petit prix</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-leaf-fill"></i>
                </div>
                <h3 class="feature-title">Écologique</h3>
                <p>Réduisez votre empreinte carbone en partageant vos trajets</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h3 class="feature-title">Communautaire</h3>
                <p>Rejoignez une communauté de conducteurs et passagers responsables</p>
            </div>
        </div>
    </div>
</section>