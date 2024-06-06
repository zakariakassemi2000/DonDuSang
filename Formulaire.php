<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Questionnaire de Donneur de Sang</title>
</head>
<body>
    <div class="form-container">
        <center>
            <h1 style="color: #0046FF;">Questionnaire de Donneur de <span style="color: #FF3E00;">Sang</span></h1>
        </center>

        <form action="process_form.php" method="POST">
            


<div  style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;" >
        <div class="form-group">
        <label for="Date_naissance">Date de Naissance</label>
        <div class="form-options">
            <input  id="Inp" type="date" id="Date_naissance" name="Date_naissance" required>
        </div>
    </div>

    <div class="form-group">
        <label for="CNI">CNI</label>
        <div class="form-options">
            <input type="text" id="CNI" name="CNI" placeholder="XXXXXXX" required>
        </div>
    </div>

    <div class="form-group">
        <label for="VisitMed">Dernière visite médicale ?</label>
        <div class="form-options">
            <input type="date" id="VisitMed" name="VisitMed" required>
        </div>
    </div>

</div>







            <div class="form-group">
                <label for="region">Region : </label>
                <div class="form-options">
                    <select id="region" name="region" required>
                        <option value="">Sélectionnez La Regions</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="ville">Ville</label>
                <div class="form-options">
                    <select id="ville" name="ville" required>
                        <option value="">Sélectionnez une ville</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous ressenti un malaise général ou des symptômes de maladie récemment ?</label>
                <div class="form-options">
                    <label><input type="radio" name="malaise" value="oui" required> Oui</label>
                    <label><input type="radio" name="malaise" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous une fièvre, un rhume, ou une grippe actuellement ?</label>
                <div class="form-options">
                    <label><input type="radio" name="fievre" value="oui" required> Oui</label>
                    <label><input type="radio" name="fievre" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous des antécédents de maladies chroniques, comme le diabète, l'hypertension, ou des maladies cardiaques ?</label>
                <div class="form-options">
                    <label><input type="radio" name="maladies_chroniques" value="oui" required> Oui</label>
                    <label><input type="radio" name="maladies_chroniques" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label for="medicaments">Prenez-vous actuellement des médicaments sur ordonnance ou en vente libre ? Si oui, lesquels ?</label>
                <textarea id="medicaments" name="medicaments" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label>Avez-vous récemment pris des antibiotiques ou des médicaments antiviraux ?</label>
                <div class="form-options">
                    <label><input type="radio" name="antibiotiques" value="oui" required> Oui</label>
                    <label><input type="radio" name="antibiotiques" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Fumez-vous ?</label>
                <div class="form-options">
                    <label><input type="radio" name="fumez" value="oui" required> Oui</label>
                    <label><input type="radio" name="fumez" value="non" required> Non</label>
                </div>
            </div>
<BR>
            <div class="form-group">
                <label for="alcool">Consommez-vous de l'alcool ? Si oui, à quelle fréquence ?</label>
                <textarea id="alcool" name="alcool" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label for="voyages">Avez-vous voyagé à l'étranger récemment ? Si oui, où et quand ?</label>
                <textarea id="voyages" name="voyages" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label>Avez-vous visité des régions où des maladies transmissibles comme le paludisme, la dengue ou le Zika sont présentes ?</label>
                <div class="form-options">
                    <label><input type="radio" name="regions_risque" value="oui" required> Oui</label>
                    <label><input type="radio" name="regions_risque" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous eu des rapports sexuels non protégés avec des partenaires multiples ?</label>
                <div class="form-options">
                    <label><input type="radio" name="rapports_non_proteges" value="oui" required> Oui</label>
                    <label><input type="radio" name="rapports_non_proteges" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous eu un nouveau partenaire sexuel au cours des derniers mois ?</label>
                <div class="form-options">
                    <label><input type="radio" name="nouveau_partenaire" value="oui" required> Oui</label>
                    <label><input type="radio" name="nouveau_partenaire" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous déjà eu une transfusion sanguine ou une greffe d'organe ?</label>
                <div class="form-options">
                    <label><input type="radio" name="transfusion" value="oui" required> Oui</label>
                    <label><input type="radio" name="transfusion" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous des antécédents de cancers ou de maladies du sang ?</label>
                <div class="form-options">
                    <label><input type="radio" name="cancers" value="oui" required> Oui</label>
                    <label><input type="radio" name="cancers" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous déjà été testé positif pour le VIH, l'hépatite B ou C, ou une autre infection transmissible par le sang ?</label>
                <div class="form-options">
                    <label><input type="radio" name="vih_hepatite" value="oui" required> Oui</label>
                    <label><input type="radio" name="vih_hepatite" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous subi une intervention chirurgicale ou une procédure invasive récemment ?</label>
                <div class="form-options">
                    <label><input type="radio" name="chirurgie" value="oui" required> Oui</label>
                    <label><input type="radio" name="chirurgie" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Avez-vous eu des tatouages, des piercings ou des séances d'acupuncture au cours des 6 mois ?</label>
                <div class="form-options">
                    <label><input type="radio" name="tatouages" value="oui" required> Oui</label>
                    <label><input type="radio" name="tatouages" value="non" required> Non</label>
                </div>
            </div>

            <div class="form-group">
                <label>Êtes-vous enceinte actuellement ou avez-vous accouché récemment ? (Pour les femmes)</label>
                <div class="form-options">
                    <label><input type="radio" name="enceinte" value="oui"> Oui</label>
                    <label><input type="radio" name="enceinte" value="non"> Non</label>
                    <label><input type="radio" name="enceinte" value="n/a"> N/A</label>
                </div>
            </div>

            <button type="submit">Soumettre</button>
        </form>
    </div>
    <script>

    document.addEventListener("DOMContentLoaded", function() {
    const regionSelect = document.getElementById('region');
    const villeSelect = document.getElementById('ville');
    let villes = [];

    // Charger les données des régions
    fetch("Regions.json")
        .then(response => response.json())
        .then(data => {
            data.regions.forEach(region => {
                const option = document.createElement('option');
                option.value = region.id;
                option.textContent = region.region;
                regionSelect.appendChild(option);
            });
        });

    // Charger les données des villes
    fetch('Villes.json')
        .then(response => response.json())
        .then(data => {
            villes = data.villes;

            // Mettre à jour la liste des villes en fonction de la région sélectionnée
            regionSelect.addEventListener('change', function() {
                const selectedRegionId = this.value;
                villeSelect.innerHTML = '<option value="">Sélectionnez une ville</option>'; // Réinitialiser les options

                const filteredVilles = villes.filter(ville => ville.region_id === selectedRegionId);
                filteredVilles.forEach(ville => {
                    const option = document.createElement('option');
                    option.value = ville.ville;
                    option.textContent = ville.ville;
                    villeSelect.appendChild(option);
                });
            });
        });
});
</script>
</body>
</html>
